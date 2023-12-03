<?php // HEADER 
    require "./templates/header.php";
?>
<?php
    // YOUR CODE HERE 
    if (isset($_POST["color"])){
        $color = $_POST["color"];
    }
    if(isset($_POST["range"])){
        $range = $_POST["range"];
    }
    if(isset($_POST["date"])){
        $date = $_POST["date"];
    }
?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> <span><?php echo $color ;?></span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong> <span><?php echo $range; ?></span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> <span><?php echo $date; ?></span>
    </div>

<?php //FOOTER 
    require "./templates/footer.php";
?>