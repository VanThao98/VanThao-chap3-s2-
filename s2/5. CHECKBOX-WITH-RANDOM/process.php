<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
// CODE HERE 
// $color = $colors[array_rand($colors)];
?>
    <div class="card">
        
        <div class="card-body">
            <!-- // CODE HERE -->
            <?php if(isset($_POST["check-html"])) { echo '<button type="button" class="btn btn-'.$colors[array_rand($colors)].'">'.$_POST["check-html"].'</button>'; } ?>
            <?php if(isset($_POST["check-css"])) { echo '<button type="button" class="btn btn-'.$colors[array_rand($colors)].'">'.$_POST["check-css"].'</button>'; }?>
            <?php if(isset($_POST["check-js"])) { echo '<button type="button" class="btn btn-'.$colors[array_rand($colors)].'">'.$_POST["check-js"].'</button>'; }?>
            <?php if(isset($_POST["check-php"])) { echo '<button type="button" class="btn btn-'.$colors[array_rand($colors)].'">'.$_POST["check-php"].'</button>'; }?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>