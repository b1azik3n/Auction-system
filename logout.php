<?php

@include 'connection.inc.php';
unset($_SESSION['user_login']);
unset($_SESSION['user_id']);
unset($_SESSION['user_name']);

header('location:login_form.php');

?>