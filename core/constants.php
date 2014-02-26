<?php
define( 'octopus_version', '1.0.0');
define( 'octopus_version_name', 'dev');

define( 'coredir', __DIR__ );
define( 'webdir', str_replace('/core', '', coredir ) );

define( 'custom_path', webdir . '/custom');
define( 'sitedir', custom_path . '/default' );

