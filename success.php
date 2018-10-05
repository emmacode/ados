<?php
if(isset($_POST['submit'])){
    $user = $_POST['name'];
    echo "Welcome $user";
}
?>
<?php include ('inc/header.php'); ?>
<?php include ('inc/footer.php'); ?>