<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'oclyhp7m7nsr',
  'passwordsalt' => 'Hag8G3+n3c5xwpEjmCQRuXdDDSqLnt',
  'secret' => 'JEDpSRdJmx9bimcLhegNQnZUdpGZI1xGnWhuRmbKIcvgLAov',
  'trusted_domains' => 
  array (
    0 => 'macmini:8080',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'sqlite3',
  'version' => '31.0.1.2',
  'overwrite.cli.url' => 'http://macmini:8080',
  'installed' => true,
);
