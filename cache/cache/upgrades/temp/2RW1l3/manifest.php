<?php

$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '6.5.25',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'sup',
  'author' => 'Bethwel Too',
  'description' => 'Supply',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Supply',
  'published_date' => '2018-05-21 07:05:41',
  'type' => 'module',
  'version' => 1526886363,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Supply',
  'relationships' => 
  array (
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/en_us.Supply.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/Extension/modules/Supply/Ext/Vardefs/sugarfield_jjwg_maps_address_c.php',
      'to' => 'custom/Extension/modules/Supply/Ext/Vardefs/sugarfield_jjwg_maps_address_c.php',
    ),
    1 => 
    array (
      'from' => '<basepath>/Extension/modules/Supply/Ext/Vardefs/sugarfield_jjwg_maps_geocode_status_c.php',
      'to' => 'custom/Extension/modules/Supply/Ext/Vardefs/sugarfield_jjwg_maps_geocode_status_c.php',
    ),
    2 => 
    array (
      'from' => '<basepath>/Extension/modules/Supply/Ext/Vardefs/sugarfield_jjwg_maps_lat_c.php',
      'to' => 'custom/Extension/modules/Supply/Ext/Vardefs/sugarfield_jjwg_maps_lat_c.php',
    ),
    3 => 
    array (
      'from' => '<basepath>/Extension/modules/Supply/Ext/Vardefs/sugarfield_jjwg_maps_lng_c.php',
      'to' => 'custom/Extension/modules/Supply/Ext/Vardefs/sugarfield_jjwg_maps_lng_c.php',
    ),
  ),
);