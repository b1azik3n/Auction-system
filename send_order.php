<?php
require('connection.inc.php');
require('functions.inc.php');
$product_id=mysqli_real_escape_string($con,$_GET['id']);
$get_product=get_product($con,'','',$product_id);


    $user_id=$_SESSION['user_id'];
    $product_id=get_safe_value($con,$_POST['product_id']);
    $name=get_safe_value($con,$_POST['name']);
    $email=get_safe_value($con,$_POST['email']);
     $mobile=get_safe_value($con,$_POST['mobile']);
     $bid_amt=get_safe_value($con,$_POST['bid_amt']);
     $address=get_safe_value($con,$_POST['address']);
     $city=get_safe_value($con,$_POST['city']);
     $pincode=get_safe_value($con,$_POST['pincode']);
     
     $added_on=date('Y-m-d h:i:s');
     mysqli_query($con,"insert into orders(user_id,product_id,name,email,mobile,bid_amt,address,city,pincode,added_on) values('$user_id','$product_id','$name','$email','$mobile','$bid_amt','$address','$city','$pincode','$added_on')");
     echo "Message sent";
$order_id=mysqli_insert_id($con);

?>