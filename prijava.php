<?php

require 'class/operater.php';

if(isset($_POST['prijava'])){
    $email = $_POST['email'];
    $lozinka = $_POST['lozinka'];
    
    $object = new Operater();
    $status = $object->Prijava($email, $lozinka);
    
    if ($status) {
        $_SESSION['prijavljen'] = true;
        header('Location: katalog.php');
    } else {
        $_SESSION['prijavljen'] = false;
    }
}
require_once('class/savant/Savant3.php');

$tpl = new Savant3(
    array(
        'template_path' => 'templates'
    )
);

$title = 'Prijava';



$tpl->assign('title', $title);

$tpl->display('prijava.tpl.php');