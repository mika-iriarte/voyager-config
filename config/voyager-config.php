<?php

// This is the config for Voyager-Config

return [

  // the config path where the subfolder with Voyager Export data should be put
  'path' => app_path() . '/../config/',

  // the name of the subfolder where the Voyager Export data should be put
  'folder' => 'voyager',

  // list of the tables which belong to Voyager to export
  'tables' => [
      'data_types',
      'data_rows',
      'menus',
      'menu_items',
      'permissions',
      'roles',
      'permission_role',
      'settings',
      'translations',
  ]

];