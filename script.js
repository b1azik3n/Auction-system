
function send_message(){
    var name=jQuery("#name").val();
    var email=jQuery("#email").val();
    var mobile=jQuery("#mobile").val();
    var comment=jQuery("#comment").val();
 
    if(name==""){
    alert('Please enter name');
 }else if(email==""){
     alert('Please enter email');
 }
 else if(mobile==""){
     alert('Please enter mobile');
 }
 else if(comment==""){
     alert('Please enter message');
 }else{
     jQuery.ajax({
 url: 'send_message.php',
 type:'post',
 data:'&name='+name+'&email='+email+'&mobile='+mobile+'&comment='+comment,
 success:function(result){
     alert(result);
     }
  });
 }
 }
 function sort_product_drop(cat_id){
     var sort_product_id=$('#sort_product_id').val();
     console.log(sort_product_id)
     window.location.href="categories.php?id="+cat_id+"&sort="+sort_product_id; 
 }

 function send_order(){
    var bid_amt=jQuery("#product_id").val();
    var name=jQuery("#name").val();
    var email=jQuery("#email").val();
    var mobile=jQuery("#mobile").val();
    var address=jQuery("#address").val();
    var city=jQuery("#city").val();
    var pincode=jQuery("#pincode").val();
    var bid_amt=jQuery("#bid_amt").val();
 
    if(name==""){
    alert('Please enter name');
 }else if(email==""){
     alert('Please enter email');
 }
 else if(mobile==""){
     alert('Please enter mobile');
 }
 else if(address==""){
     alert('Please enter address');
 }else if(city==""){
    alert('Please enter city');
}
else if(pincode==""){
    alert('Please enter pincode');
}
else if(bid_amt==""){
    alert('Please enter your amount');
}
 else{
     jQuery.ajax({
 url: 'send_order.php',
 type:'post',
 data:'&product_id='+product_id+'&name='+name+'&email='+email+'&mobile='+mobile+'&bid_amt='+bid_amt+'&address='+address+'&city='+city+'&pincode='+pincode,
 success:function(result){
     alert(result);
     }
  });
 }
 }