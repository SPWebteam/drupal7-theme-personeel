<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Only content'),
  'category' => t('SPruit'),
  'icon' => 'onlycontent.png',
  'theme' => 'onlycontent',
  'css' => 'onlycontent.css',
  'regions' => array('middle' => t('Middle column')),
);
