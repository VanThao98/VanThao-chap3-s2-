<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
    
    ?>
        <tr>
            <td><?php echo (isset($_POST['name']))?$_POST['name'] : ""; ?></td>
            <td><?php echo (isset($_POST["email"]))? $_POST["email"] : "" ; ?></td>
            <td><?php echo (isset($_POST["pass"]))? $_POST["pass"] : "" ; ?></td>
            <td><?php echo (isset($_POST["number"]))? $_POST["number"] : "" ; ?></td>
            <td><?php echo (isset($_POST["mess"]))? $_POST["mess"] : "" ; ?></td>
            <td><?php echo (isset($_POST["user"]))? $_POST["user"] : "" ; ?></td>
            <td>
            <!-- // subjects -->
                <?php echo (isset($_POST['check-html']))?$_POST['check-html']." | " : ""; ?>
                <?php echo (isset($_POST['check-css']))?$_POST['check-css']." | " : ""; ?>
                <?php echo (isset($_POST['check-js']))?$_POST['check-js']." | " : ""; ?>
                <?php echo (isset($_POST['check-php']))?$_POST['check-php']." | " : ""; ?>                         
            </td>
            <td><?php echo (isset($_POST['check-html']))?$_POST['check-html'] : ""; ?></td>
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>