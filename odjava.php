
<?php include_once ('session.php')?>
<?php
if (isset($_SESSION['prijavljen'])) {
    $_SESSION['prijavljen'] = false;
}

header('Location: katalog.php');
?>