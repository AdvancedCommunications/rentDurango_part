<?php
// $Id: template.php,v 1.2.2.1 2009/04/21 07:49:48 frjo Exp $

/**
 * Override or insert PHPTemplate variables into the page templates.
 *
 * @param $vars
 *   A sequential array of variables to pass to the theme template.
 * @param $hook
 *   The name of the theme function being called ("page" in this case.)
 */
function slash_preprocess_page(&$vars, $hook) {
  // Classes for body element. Allows advanced theming based on context
  // (home page, node of certain type, etc.)
  if (!$vars['is_front']) {
    $body_classes = array($vars['body_classes']);
    // Add unique classes for each page and website section
    $path = drupal_get_path_alias($_GET['q']);
    list($section, ) = explode('/', $path, 2);
    $body_classes[] = slash_id_safe('page-'. $path);
    $body_classes[] = slash_id_safe('section-'. $section);
    if (arg(0) == 'node') {
      if (arg(1) == 'add') {
        if ($section == 'node') {
          array_pop($body_classes); // Remove 'section-node'
        }
        $body_classes[] = 'section-node-add'; // Add 'section-node-add'
      }
      elseif (is_numeric(arg(1)) && (arg(2) == 'edit' || arg(2) == 'delete')) {
        if ($section == 'node') {
          array_pop($body_classes); // Remove 'section-node'
        }
        $body_classes[] = 'section-node-'. arg(2); // Add 'section-node-edit' or 'section-node-delete'
      }
    }
    $vars['body_classes'] = implode(' ', $body_classes); // Concatenate with spaces
  }

  // Don't display empty help from node_help().
  if ($vars['help'] == "<div class=\"help\"><p></p>\n</div>") {
    $vars['help'] = '';
  }
}

/**
 * Override or insert PHPTemplate variables into the node templates.
 *
 * @param $vars
 *   A sequential array of variables to pass to the theme template.
 * @param $hook
 *   The name of the theme function being called ("node" in this case.)
 */
function slash_preprocess_node(&$vars, $hook) {
  global $user;

  $vars['below_node'] = theme('blocks', 'below_node');

  if (module_exists('taxonomy') && $vars['node']->taxonomy) {
    $vocabs = taxonomy_get_vocabularies($vars['node']->type);
    foreach ($vocabs as $vocab) {
      $tags = array();
      $terms = taxonomy_node_get_terms_by_vocabulary($vars['node']->nid, $vocab->vid);
      foreach ($terms as $term) {
        $tags['taxonomy_term_'. $term->tid] = array(
          'title' => $term->name,
          'href' => taxonomy_term_path($term),
          'attributes' => array('rel' => 'tag', 'title' => strip_tags($term->description))
        );
      }
      if ($tags) {
        $vars['tags_'. $vocab->vid] = theme('links', $tags, array('class' => 'links inline'));
      }
    }
  }

  // Special classes for nodes
  $node_classes = array();
  if ($vars['sticky']) {
    $node_classes[] = 'sticky';
  }
  if (!$vars['node']->status) {
    $node_classes[] = 'node-unpublished';
    $vars['unpublished'] = TRUE;
  }
  else {
    $vars['unpublished'] = FALSE;
  }
  if ($vars['node']->uid && $vars['node']->uid == $user->uid) {
    // Node is authored by current user
    $node_classes[] = 'node-mine';
  }
  if ($vars['teaser']) {
    // Node is displayed as teaser
    $node_classes[] = 'node-teaser';
  }
  // Class for node type: "node-type-page", "node-type-story", "node-type-my-custom-type", etc.
  $node_classes[] = 'node-type-'. $vars['node']->type;
  $vars['node_classes'] = implode(' ', $node_classes); // Concatenate with spaces
}

/**
 * Override or insert PHPTemplate variables into the comment templates.
 *
 * @param $vars
 *   A sequential array of variables to pass to the theme template.
 * @param $hook
 *   The name of the theme function being called ("comment" in this case.)
 */
function slash_preprocess_comment(&$vars, $hook) {
  global $user;

  // We load the node object that the current comment is attached to
  $node = node_load($vars['comment']->nid);
  // If the author of this comment is equal to the author of the node, we
  // set a variable so we can theme this comment uniquely.
  $vars['author_comment'] = $vars['comment']->uid == $node->uid ? TRUE : FALSE;
  // Special classes for comments
  $comment_classes = array();
  // Odd/even handling
  static $comment_odd = TRUE;
  $comment_classes[] = $comment_odd ? 'odd' : 'even';
  $comment_odd = !$comment_odd;
  if ($vars['comment']->status == COMMENT_NOT_PUBLISHED) {
    $comment_classes[] = 'comment-unpublished';
    $vars['unpublished'] = TRUE;
  }
  else {
    $vars['unpublished'] = FALSE;
  }
  if ($vars['author_comment']) {
    // Comment is by the node author
    $comment_classes[] = 'comment-by-author';
  }
  if ($vars['comment']->uid == 0) {
    // Comment is by an anonymous user
    $comment_classes[] = 'comment-by-anon';
  }
  if ($user->uid && $vars['comment']->uid == $user->uid) {
    // Comment was posted by current user
    $comment_classes[] = 'comment-mine';
  }
  $vars['comment_classes'] = implode(' ', $comment_classes);
}

/**
 * Format the "submitted" string for nodes and comments.
 */
function slash_node_submitted($node) {
  return t('!user - <abbr class="created" title="!microdate">!date</abbr>', array(
      '!user' => theme('username', $node),
      '!date' => format_date($node->created),
      '!microdate' => format_date($node->created, 'custom', "Y-m-d\TH:i:sO")
    ));
}
function slash_comment_submitted($comment) {
  return t('!user - <abbr class="created" title="!microdate">!date</abbr>', array(
      '!user' => theme('username', $comment),
      '!date' => format_date($comment->timestamp),
      '!microdate' => format_date($comment->timestamp, 'custom', "Y-m-d\TH:i:sO")
    ));
}

/**
 * Allow themable wrapping of all comments.
 */
function slash_comment_wrapper($content, $type = NULL) {
  static $node_type;

  if (isset($type)) {
    $node_type = $type;
  }
  if (!$content || $node_type == 'forum') {
    return '<div id="comments">'. $content .'</div>';
  }
  else {
    $output = '<div id="comments">';
    $output .= '<h2 class="comments">'. t('Comments') .'</h2>';
    $output .= $content;
    $output .= '</div>';

    return $output;
  }
}

/**
 * Returns the rendered local tasks. The default implementation renders
 * them as tabs.
 *
 * @ingroup themeable
 */
function slash_menu_local_tasks() {
  $output = '';

  if ($primary = menu_primary_local_tasks()) {
    $output .= "<ul class=\"tabs primary clear-block\">\n". $primary ."</ul>\n";
  }
  if ($secondary = menu_secondary_local_tasks()) {
    $output .= "<ul class=\"tabs secondary\">\n". $secondary ."</ul>\n";
  }

  return $output;
}

/**
 * Converts a string to a suitable html ID attribute.
 *
 * http://www.w3.org/TR/html4/struct/global.html#h-7.5.2 specifies what makes a
 * valid ID attribute in HTML. This function:
 *
 * - Ensure an ID starts with an alpha character by optionally adding an 'n'.
 * - Replaces any character except A-Z, numbers, and underscores with dashes.
 * - Converts entire string to lowercase.
 *
 * @param $string
 *   The string
 * @return
 *   The converted string
 */
function slash_id_safe($string) {
  // Replace with dashes anything that isn't A-Z, numbers, dashes, or underscores.
  $string = strtolower(preg_replace('/[^a-zA-Z0-9_-]+/', '-', $string));
  // If the first character is not a-z, add 'n' in front.
  if (!ctype_lower($string{0})) { // Don't use ctype_alpha since its locale aware.
    $string = 'id'. $string;
  }

  return $string;
}
