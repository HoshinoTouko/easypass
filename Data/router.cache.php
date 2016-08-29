<?php
if(!defined('ROOT_PATH')) exit('This file could not be access directly.');

return array (
  'Static' => 
  array (
    '@home' => 
    array (
      0 => 'Controller\\Index',
      1 => 'index',
    ),
    'index' => 
    array (
      0 => 'Controller\\Index',
      1 => 'index',
    ),
  ),
  'Dynamic' => 
  array (
    0 => 
    array (
      'callback' => 
      array (
        0 => 'Controller\\api',
        1 => 'dynamicRouteTest',
      ),
      'regexp' => '/^api\\/encrypt\\/(\\w+)$/i',
    ),
    1 => 
    array (
      'callback' => 
      array (
        0 => 'Controller\\api',
        1 => 'encrypt',
      ),
      'regexp' => '/^api\\/encrypt$/i',
    ),
  ),
  'Fallback' => 
  array (
  ),
);
