<?php
require('top.php');
$product_id=mysqli_real_escape_string($con,$_GET['id']);
$get_product=get_product($con,'','',$product_id);

?>

<section class="about">
<?php
    foreach($get_product as $list)
      {
     ?>
    <div class="image">
        <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>" alt="">
    </div>

    <div class="content">
        <h3><?php echo $get_product['0']['name'] ?> </h3>
        <br><br>
       
        <h1>Description: </h1>
      <p>  <?php echo $get_product['0']['description']?></p>
       
        <h1>Starting Bid: <?php echo $get_product['0']['starting_price']?></h1>
        <p></p>
       
        <a href="checkout.php?id=<?php echo $list['id']?>" class="btn">Place Bid</a>
    </div>
    <?php } ?>
</section>


<!-- review section ends -->

</section>
<?php
require('footer.php');
?>