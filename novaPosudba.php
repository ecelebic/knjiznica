<?php
session_start();
require_once 'class/posudba.php';
require_once('class/savant/Savant3.php');

$tpl = new Savant3(
    array(
        'template_path' => 'templates'
    )
);

$title = 'Nova posudba';




$tpl->assign('title', $title);


$tpl->display('novaPosudba.tpl.php');
