<?php
session_start();
$con=mysqli_connect("localhost","root","","auction");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/aauction/admin/');
define('SITE_PATH','http://localhost/aauction/admin/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>