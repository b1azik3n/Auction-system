<?php
require('connection.inc.php');
require('functions.inc.php');

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
      <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="admin/assets/css/font-awesome.min.css">
    
      <link rel="stylesheet" href="admin/assets/css/style.css">
   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <li class="menu-item-has-children dropdown">
                     <a href="categories.inc.php" > Categories Master</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="product.inc.php" > Product Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="order_master.php" > Order Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="users.php" > User Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="contact_us.php" > Contact Us</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="login_form.php" >Logout</a>
                  </li>
				  
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="Home.php"><img src="admin/images/logo.png" alt="Logo"></a>
                  <a class="navbar-brand hidden" href="Home.php"><img src="admin/images/logo2.png" alt="Logo"></a>
                  
               </div>
            </div>
        
         </header>