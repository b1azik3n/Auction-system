<?php
require('connection.inc.php');
require('functions.inc.php');
$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
    $cat_arr[]=$row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="home.php" class="logo"> <i class="fas fa-store"></i> OAS </a>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="icons">
        
    <div id="search-btn">
            <a href="search.php"  class="fas fa-search"></a>
        </div>
         
    </div>

</header>

<!-- header section ends -->


<section class="quick-links">


    <div class="links">
        <a href="Home.php"> home </a>
         <a href="login_form.php"> categories </a>
        <a href="login_form.php"> products </a>
        <a href="contact.html"> contact </a>
        <a href="login_form.php"> login </a>
        <a href="register_form.php"> register </a>
       
    </div>

</section>



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
                <a href="login_form.php" class="fas fa-gavel"></a>
              
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



<!-- footer section starts  -->


<section class="credit">

    <p> created by <span>JSSS</span> | All rights reserved! </p>

    <img src="images/card_img.png" alt="">

</section>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>