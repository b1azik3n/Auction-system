<?php
require('top.php');

if(!isset($_GET['id']) && $_GET['id']!=''){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
$cat_id=mysqli_real_escape_string($con,$_GET['id']);

$price_high_selected="";
$price_low_selected="";
$new_selected="";
$old_selected="";
$sort_order="";

if(isset($_GET['sort'])){
    $sort=mysqli_real_escape_string($con,$_GET['sort']);
    if($sort=="price_high"){
        $sort_order=" order by product.starting_price desc";
        $price_high_selected="selected";
    }
    if($sort=="price_low"){
        $sort_order=" order by product.starting_price asc";
        $price_low_selected="selected";

    }
    if($sort=="new"){
        $sort_order=" order by product.id desc";
        $new_selected="selected";

    }
    if($sort=="old"){
        $sort_order=" order by product.id asc";
        $old_selected="selected";

    }
}

    if($cat_id>0){
     $get_product=get_product($con,'',$cat_id,'','',$sort_order);
       }
       else{
     ?>
     <script>
       window.location.href='index.php';
     </script>
     <?php
       }
 ?>
<section>
 
 <?php if(count($get_product)>0){
     ?>
  <div class="dropdown-content">
   <select class="ht-select" onchange="sort_product_drop('<?php echo $cat_id?>')" id="sort_product_id" >
   Default sorting
    <option value="price_low" <?php echo $price_low_selected?>>Sort by price low to high</option>
    <option value="price_high" <?php echo $price_high_selected?>>Sort by price high to low</option>
    <option value="new" <?php echo $new_selected?>>sort by new first</option>
    <option value="old" <?php echo $old_selected?>>sort by old first</option>
   </select>
  </div>

<br><br>
</section>
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
<?php } else{
    echo"data not found";
} ?>

<?php
require('footer.php');
?>