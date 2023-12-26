<?php
require('top.php');
?>
<!--

<div class="midad">
            <img src="image/bg1.jpg" alt="">
               
     </div>
   

-->   
<link rel="stylesheet/css" href="style.css">

<section class="products">

<h1 class="heading" > New <span>Arrivals</span> </h1>


<div class="box-container">
<?php
     $get_product=get_product($con,3);
     foreach($get_product as $list)
      {
     ?>
    <div class="box">
  
        <div class="image">
            <img src= <?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?> class="main-img" alt="">
            <img src= <?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?> class="hover-img" alt="">
            <div class="icons">
                <a href="product.php?id=<?php echo $list['id']?>" class="fas fa-gavel"></a>
              
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
