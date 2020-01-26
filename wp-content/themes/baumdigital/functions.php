<?php

//Define constants
define('HOMELINK', site_url('/'));
define('PATH', get_template_directory_uri());
define('IMAGES', get_template_directory_uri()."/img" );
define('SITENAME', get_bloginfo('name') );



require_once('custom-post-type/custom-post-type.php');

?>