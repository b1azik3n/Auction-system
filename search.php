<?php
require('top.php');
$str=mysqli_real_escape_string($con,$_GET['str']);
if($str!=''){
$get_product=get_product($con,'','','',$str);
}else{
    header('location:index.php');
    die();
}
?>

 <section class="products">

<div class="box-container">
    <?php
    foreach($get_product as $list)
      {
     ?>
     <div class="box">
  
        <div class="image">
            <img src= <?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?> class="main-img" alt="">
            <img src= <?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?> class="hover-img" alt="">
            <div class="icons">
                <a href="product.php?id=<?php echo $list['id']?>" class="fas fa-shopping-cart"></a>
              
            </div>
        </div>
        <div class="content">
            <h3><?php echo $list['name']?></h3>
            <div class="price">Starting Bid : <?php echo $list['starting_price']?></div>
            
        </div>
     </div> 
    <?php } ?>
</div>


</section>


<?php
require('footer.php');
?>