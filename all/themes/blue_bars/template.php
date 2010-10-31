<?php

function phptemplate_system_user($form) {
  foreach (element_children($form) as $key) {
    $row = array();
    if (is_array($form[$key]['description'])) {
      $row[] = drupal_render($form[$key]['description']) . drupal_render($form[$key]['screenshot']);
      $row[] = array('data' => drupal_render($form['theme'][$key]), 'align' => 'center');
    }
    $rows[] = $row;
  }

  $header = array(t('Name/Screenshot'), t('Selected'));
  $output = theme('table', $header, $rows);
  return $output;
}
?>
