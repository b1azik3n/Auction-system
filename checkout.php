<?php
require('top.php');
$product_id=mysqli_real_escape_string($con,$_GET['id']);
$get_product=get_product($con,'','',$product_id);

if(isset($_POST['submit'])){
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
$product_id=get_safe_value($con,$_POST['product_id']);
mysqli_query($con,"insert into order_detail(order_id,product_id) values('$order_id','$product_id')");
}
?>

<section class="about">
<form method="post">
    <div class="content">
    <input type="hidden"  id="product_id" name="product_id" value="<?php echo $product_id?>">
        &nbsp;&nbsp;
    <input type="text" id="name" name="name" placeholder="Your Name">
        &nbsp;&nbsp;
        <input type="text" id="email" name="email" placeholder="Email">
        &nbsp;&nbsp;
        <input type="text" id="mobile" name="mobile" placeholder="Mobile">
        <br><br><br><br>
        <input type="text" id="bid_amt" name="bid_amt" placeholder="Your bidding amount">
         &nbsp;&nbsp;
         <input type="text" id="city" name="city" placeholder="City/State">
         &nbsp;&nbsp;
        <input type="text" id="address" name="address" placeholder="street address">
        <br><br><br><br>
        <input type="text" id="pincode"  name="pincode" placeholder="zip code">
        <br><br><br><br>
        <div class="btn">
       <button type="submit" id="submit" name="submit" class="btn">Submit</button>
        </div>

    </div>
</form>
</section>


<?php
require('footer.php');
?>