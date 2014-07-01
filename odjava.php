
<?php include_once ('session.php')?>
<?php include_once ('class/operater.php')?>
<?php

$object = new Operater();
$object->Odjava();

header('Location: katalog.php');
?>