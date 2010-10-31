<?php
// $Id: uicarousel_style_plugin.inc,v 1.5 2009/12/21 21:57:44 neclimdul Exp $
/**
 * @file
 *  Provide the views carousel plugin object with default options and form.
 */

/**
  * Implementation of views_plugin_style().
  */
class uicarousel_style_plugin extends views_plugin_style {
  function option_definition() {
    $options = parent::option_definition();
    $options['orientation'] = array('default' => 'horizontal');
    $options['start'] = array('default' => '');
    $options['visible'] = array('default' => '');
    $options['scroll'] = array('default' => '');
    $options['easing'] = array('default' => NULL);
    $options['speed'] = array('default' => 'normal');
    $options['auto'] = array('default' => 0);
    $options['circular'] = array('default' => TRUE);
    return $options;
  }

  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);
    $form['orientation'] = array(
      '#type' => 'select',
      '#title' => t('Orientation'),
      '#options' => array(
        'horizontal' => t('Horizontal'),
        'vertical' => t('Vertical'),
      ),
      '#description' => t('The orientation of the carousel.'),
      '#default_value' => $this->options['orientation'],
    );
    $form['start'] = array(
      '#type' => 'textfield',
      '#title' => t('Start'),
      '#description' => t('The index of the item that should be visible at initialization.'),
      '#size' => 4,
      '#maxlength' => 4,
      '#default_value' => $this->options['start'],
    );
    $form['visible'] = array(
      '#type' => 'textfield',
      '#title' => t('Visible'),
      '#description' => t('The number of items visible. This corresponds to the subsection of the display settings "items to display" that you want to be visible at any one time. Default 3.'),
      '#size' => 4,
      '#maxlength' => 4,
      '#default_value' => $this->options['visible'],
    );
    $form['scroll'] = array(
      '#type' => 'textfield',
      '#title' => t('Scroll'),
      '#description' => t('The number of items that will scroll with each click.'),
      '#size' => 4,
      '#maxlength' => 4,
      '#default_value' => $this->options['scroll'],
    );
    $form['easing'] = array(
      '#type' => 'textfield',
      '#title' => t('Easing'),
      '#size' => 10,
      '#maxlength' => 10,
      '#default_value' => $this->options['easing'],
      '#description' => t('The name of the easing effect that you want to use. See list of options in the <a href="http://docs.jquery.com/effects/animate">jQuery Documentations</a>.'),
    );
    $form['speed'] = array(
      '#type' => 'textfield',
      '#title' => t('Animation speed'),
      '#size' => 10,
      '#maxlength' => 10,
      '#default_value' => $this->options['speed'],
      '#description' => t('The speed of the scroll animation as string in jQuery terms ("slow", "normal" or "fast") or milliseconds as integer (See <a href="http://docs.jquery.com/Effects/animate">jQuery Documentation</a>).'),
    );
    $form['auto'] = array(
      '#type' => 'textfield',
      '#title' => t('Autoscrolling'),
      '#size' => 4,
      '#maxlength' => 4,
      '#default_value' => $this->options['auto'],
      '#description' => t('Specifies how many milliseconds to periodically autoscroll the content. If set to 0 (default) then autoscrolling is turned off.'),
    );
    $form['circular'] = array(
      '#type' => 'checkbox',
      '#title' => t('Circular carousel'),
      '#default_value' => $this->options['circular'],
      '#description' => t('If enbabled, the carousel will continue with the infitely.'),
    );
  }
}
