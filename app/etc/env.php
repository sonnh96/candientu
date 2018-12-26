<?php
return array (
  'backend' => 
  array (
    'frontName' => 'admin_123',
  ),
  'crypt' => 
  array (
    'key' => '07f10efdb6f8f5522bca79fd6b06559d',
  ),
  'session' => 
  array (
    'save' => 'redis',
    'redis' => 
    array (
      'host' => 'redis-session',
      'port' => '6379',
      'password' => '',
      'timeout' => '2.5',
      'persistent_identifier' => '',
      'database' => '2',
      'compression_threshold' => '2048',
      'compression_library' => 'gzip',
      'log_level' => '1',
      'max_concurrency' => '6',
      'break_after_frontend' => '5',
      'break_after_adminhtml' => '30',
      'first_lifetime' => '600',
      'bot_first_lifetime' => '60',
      'bot_lifetime' => '7200',
      'disable_locking' => '0',
      'min_lifetime' => '60',
      'max_lifetime' => '2592000',
    ),
  ),
  'db' => 
  array (
    'table_prefix' => '',
    'connection' => 
    array (
      'default' => 
      array (
        'host' => 'db',
        'dbname' => 'magento',
        'username' => 'root',
        'password' => 'root',
        'active' => '1',
      ),
    ),
  ),
  'resource' => 
  array (
    'default_setup' => 
    array (
      'connection' => 'default',
    ),
  ),
  'x-frame-options' => 'SAMEORIGIN',
  'MAGE_MODE' => 'production',
  'cache_types' => 
  array (
    'config' => 0,
    'layout' => 0,
    'block_html' => 0,
    'collections' => 0,
    'reflection' => 0,
    'db_ddl' => 0,
    'eav' => 0,
    'customer_notification' => 0,
    'full_page' => 0,
    'config_integration' => 0,
    'config_integration_api' => 0,
    'translate' => 0,
    'config_webservice' => 0,
    'compiled_config' => 1,
  ),
  'install' => 
  array (
    'date' => 'Mon, 24 Sep 2018 04:01:04 +0000',
  ),
  'cache' => 
  array (
    'frontend' => 
    array (
      'default' => 
      array (
        'backend' => 'Cm_Cache_Backend_Redis',
        'backend_options' => 
        array (
          'server' => 'redis',
          'port' => '6379',
          'persistent' => '',
          'database' => '0',
          'password' => '',
          'force_standalone' => '0',
          'connect_retries' => '1',
          'read_timeout' => '10',
          'automatic_cleaning_factor' => '0',
          'compress_data' => '1',
          'compress_tags' => '1',
          'compress_threshold' => '20480',
          'compression_lib' => 'gzip',
          'use_lua' => '0',
        ),
      ),
      'page_cache' => 
      array (
        'backend' => 'Cm_Cache_Backend_Redis',
        'backend_options' => 
        array (
          'server' => 'redis',
          'port' => '6379',
          'persistent' => '',
          'database' => '1',
          'password' => '',
          'force_standalone' => '0',
          'connect_retries' => '1',
          'lifetimelimit' => '57600',
          'compress_data' => '0',
        ),
      ),
    ),
  ),
);
