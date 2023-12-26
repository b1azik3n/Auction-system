<?php
require('top.php');
$product_id=mysqli_real_escape_string($con,$_GET['id']);
$get_product=get_product($con,'','',$product_id);
?>
<section>
<thead>
    <th class="product-thumbnail">order id</th>
</thead>
<tbody>
<?php
$uid=$_SESSION['user_id'];
$res=mysqli_query($con,"select * from orders where id=$uid");

while($row=mysqli_fetch_assoc($res)){
?>
<tr>
<td class="product-name"><a href="#"><?php echo $row['id']?></a> </td> 
<td class="product-name"><a href="#"><?php echo $row['added_on']?></a> </td> 
<td class="product-name"><a href="#"><?php echo $row['bid_amt']?></a> </td> 
<td class="product-name"><a href="#"><?php echo $row['address']?></a> </td> 
<td class="product-name"><a href="#"><?php echo $row['city']?></a> </td> 
<td class="product-name"><a href="#"><?php echo $row['pincode']?></a> </td> 
</tr>
<?php } ?>
</tbody>
</section>
<?php
require('footer.php');
?>