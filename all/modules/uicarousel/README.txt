This module provides integration with the jQuery UI Carousel module. You can create carousels by hand by passing a list of themed items to the provided theme function or using the Views style plugin.

You can see a demo of my work on the UI Carousel module on demo site.

Example usage of the theme function.
<?php
// The id to be used in the template and used to attach
$id = 'foo-bar-baz';
// A list of options to be passed allong to the javascript.
$options = array(
  'auto' => FALSE, // bool to toggle autorotation.
  speed: 200, // Animation speed.
  easing: null, // Animation easing.
  orientation: "horizontal", // Horizontal or vertical orientation.
  circular: true, // Bool to toggle continuos rotation.
  visible: 3, // Number of items that are visible.
  start: 0, // Item to start on.
  scroll: 1, // Number of items to change on each slide.
  // I don't know if providing these callbacks will work when provided in the php.
  beforeStart: '', // if provided, it should be a javascript function to be called before each slide.
  afterEnd: '' // if provided, it should be a javascript function to be called before each slide.
);
foreach (array(1, 2, 3) as $baz) {
  $list[] = theme('foo_bar', $baz);
}

return theme('uicarousel', $list, $options, $id);
?>