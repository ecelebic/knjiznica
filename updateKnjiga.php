<?php
session_start();
require_once 'class/model.php';
require_once 'class/savant/Savant3.php';
require_once 'class/knjiga.php';

$tpl = new Savant3(
    array(
        'template_path' => 'templates'
    )
);


$title = 'Promijeni knjigu';


$tpl->assign('title', $title);


$tpl->display('updateKnjiga.tpl.php');

