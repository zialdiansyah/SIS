<?php
define("HOSTNAME","o2c");
define("DOMAIN",".vnet");
define("WEB_HOST","http://www.".HOSTNAME.DOMAIN."/");

define('FRONT_IMAGE',WEB_HOST.'images/');
define('FRONT_MODULES',WEB_HOST.'modules/');
define('FRONT_STYLE',WEB_HOST.'styles/');
define('FRONT_LIBRARY',WEB_HOST.'library/');
define('FRONT_JAVASCRIPT',WEB_HOST.'javascript/');
define('PRODUCT_IMAGE',WEB_HOST.'images/product/');
define('IMG_PRODUCT',$_SERVER['DOCUMENT_ROOT'].'images/product/');

define('DATABASE_HOST','localhost');
define('DATABASE_USER','root');
define('DATABASE_PASSWORD','');
define('DATABASE_TABLE','db_ooc');
define('ADMIN_EMAIL','administrator@o2c.vnet');
?>