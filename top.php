<?php
require('connection.inc.php');
require('functions.inc.php');

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
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
    <title>ART AUCTION</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <!-- cusom css file link  -->
    <link rel="stylesheet" href="style.css">
    <link rel="text/javascript" href="jquery-3.2.1.min.js">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="index.php" class="logo"> <i class="fas fa-store"></i> OAS </a>

    <form action="search.php" method="get" class="search-form">
        <input type="search" id="search-box" name="str" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="icons">
        
        <div id="search-btn">
            <a href="search.php"  class="fas fa-search"></a>
        </div>
        <a href="mybid.php" class="fas fa-user"></a>
        
        
    </div>

</header>

<!-- header section ends -->

<!-- side-bar section starts -->



<section class="quick-links">


    <div class="links">
        <a href="index.php"> home </a>
        <a href="about.php"> about </a>
        <?php
          foreach($cat_arr as $list){
              ?>
                <a href="categories.php?id=<?php echo $list['id']?>"><?php
                echo $list['categories']?> </a>
              <?php
              }

        ?>
        <a href="homecontact.php"> contact us </a>
        <a href="Home.php"> logout </a>
      
       
    </div>
 </section>
        