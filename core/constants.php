<?php
define( 'octopus_version', '1.0.0');
define( 'octopus_version_name', 'dev');

define( 'coredir', __DIR__ );
define( 'webdir', str_replace('/core', '', coredir ) );

define( 'domains_path', '/domains');

define( 'site_path', domains_path . '/default');
define( 'sitedir', webdir . site_path );