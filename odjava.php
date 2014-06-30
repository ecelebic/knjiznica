<?php

if (isset($_SESSION['prijavljen'])) {
    $_SESSION['prijavljen'] = false;
}

header('Location: prijava.php');