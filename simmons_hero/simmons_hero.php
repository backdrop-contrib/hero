<?php
/**
 * @file
 * PHP functions for the Simmons Hero layout.
 */

/**
 * Process variables for the Simmons Hero layout.
 */
function template_preprocess_layout__simmons_hero(&$variables) {
  if ($variables['content']['sidebar'] && $variables['content']['sidebar2']) {
    $variables['classes'][] = 'layout-two-sidebars';
  }
  elseif ($variables['content']['sidebar'] || $variables['content']['sidebar2']) {
    $variables['classes'][] = 'layout-one-sidebar';
    if ($variables['content']['sidebar']) {
      $variables['classes'][] = 'layout-sidebar-first';
    }
    else {
      $variables['classes'][] = 'layout-sidebar-second';
    }
  }
  else {
    $variables['classes'][] = 'layout-no-sidebars';
  }
}
