<?php 
// HEADER
include "./templates/header.php"
?>
<ul class="list-group">
<?php
   // YOUR CODE HERE
   if (isset($_POST["name"])){
    $name = $_POST["name"];
   }
   if(isset($_POST["email"])){
    $email = $_POST["email"];
   }
   if(isset($_POST["pass"])){
    $pass = $_POST["pass"];
   }
   if(isset($_POST["number"])){
    $number = $_POST["number"];
   }
   if(isset($_POST["message"])){
    $message = $_POST["message"];
   }
?>
    <li class="list-group-item"><?php echo $name; ?></li>
    <li class="list-group-item"><?php echo $email; ?></li>
    <li class="list-group-item"><?php echo $pass; ?></li>
    <li class="list-group-item"><?php echo $number; ?></li>
    <li class="list-group-item"><?php echo $message; ?></li>

</ul>
<?php 
// FOOTER
include "./templates/header.php"
?>