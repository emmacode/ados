<?php
if (!empty($_SESSION['error'])) {
    foreach($_SESSION['error'] as $error) {
        ?>
        <div class="alert-danger" style="padding: 12px;"><?= $error ?></div>
        <?php
    }
    unset($_SESSION['error']);

}
if (!empty($_SESSION['success'])) {
    ?>
    <div class="alert-success" style="padding: 12px;"><?= $_SESSION['success']; ?></div>
    <?php
    unset($_SESSION['success']);
}
?>