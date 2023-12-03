<?php // HEADER 
    require "./templates/header.php";
?>
<?php
// YOUR CODE HERE

?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3">
                <?php // province
                    if(isset($_POST["name"])){
                        echo $_POST["name"];
                    }
                ?>
            </h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
            <!-- YOUR CODE HERE [gender] -->
            <?php if(isset($_POST["gender"])) { 
                    if(($_POST["gender"]) === "Male"){
                        echo '<img src="./images/male.png" alter ="Male">';
                    } else{
                        echo '<img src="./images/female.png" alter ="Female">';
                    }
                }
            ?>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">
            
                 <!-- YOUR CODE HERE [subject] -->
            <?php if(isset($_POST["check-html"])) { echo '<button type="button" class="btn btn-primary">'.$_POST["check-html"].'</button>'; } ?>
            <?php if(isset($_POST["check-css"])) { echo '<button type="button" class="btn btn-primary">'.$_POST["check-css"].'</button>'; }?>
            <?php if(isset($_POST["check-js"])) { echo '<button type="button" class="btn btn-primary">'.$_POST["check-js"].'</button>'; }?>
            <?php if(isset($_POST["check-php"])) { echo '<button type="button" class="btn btn-primary">'.$_POST["check-php"].'</button>'; }?>
            
        </div>
    </div>

<?php // FOOTER
     require "./templates/footer.php";
 ?>