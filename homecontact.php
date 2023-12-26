<?php
require('top.php');
?>

<section class="about">
<form action="send_message.php" method="post">
    <div class="content">
        <input type="text" id="name" name="name" placeholder="Your Name">
       <br> <br> <br> <br>
        <input type="email" id="email" name="email" placeholder="Email">
        <input type="text" id="mobile" name="mobile" placeholder="Mobile">
        <br> <br> <br>
        <p> <textarea name="comment" id="comment" placeholder="Your Message"></textarea> </p>
        <br>
        <div class="btn">
       <button type="button" onclick="send_message()" class="btn">Send Message</button>
        </div>

    </div>
</form>
</section>


<?php
require('footer.php');
?>