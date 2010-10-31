<?php
// $Id: uicarousel.views.inc,v 1.2 2009/10/16 19:51:24 neclimdul Exp $
/**
 * @file
 * Views definitions and integration.
 */

/**
  * Implementation of hook_views_plugin().
  */
function uicarousel_views_plugins() {
  return array(
    'module' => 'uicarousel',
    'style' => array(
      'uicarousel' => array(
        'title' => t('jQuery UI Carousel'),
        'theme' => 'uicarousel_view',
        'help' => t('A rotating carousel of items using the the jQuery UI library.'),
        'handler' => 'uicarousel_style_plugin',
        'path' => drupal_get_path('module', 'uicarousel') . '/views',
        'theme path' => drupal_get_path('module', 'uicarousel') . '/theme',
        'theme file' => 'theme.inc',
        'uses row plugin' => TRUE,
        'uses options' => TRUE,
        'type' => 'normal',
      ),
    ),
  );
}
