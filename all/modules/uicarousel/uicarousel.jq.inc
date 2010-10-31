<?php
// $Id: uicarousel.jq.inc,v 1.1 2009/09/30 20:47:02 neclimdul Exp $
/**
 * @file
 * Add support for the jQ module.
 *
 * jq_add('uicarousel', $selector, $options);
 */
function jcarousel_jq($op, $plugin = NULL) {
  switch ($op) {
    case 'info':
      return array(
        'uicarousel' => array(
          'name' => t('jQuery UI Carousel'),
          'description' => t(''),
          'version' => '1.1',
          'url' => 'http://plugins.jquery.com/project/uicarousel',
        ),
      );
    break;
    case 'add':
      switch ($plugin) {
        case 'uicarousel':
          // When adding the plugin, allow additional arguments so that
          // we can automatically add the jQuery $selector and $callback
          // function.
          $args = func_get_args();
          unset($args[0]); // $op
          unset($args[1]); // $plugin
          call_user_func_array('jcarousel_add', $args);
        break;
      }
    break;
  }
}
