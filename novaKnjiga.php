<?php
session_start();
require_once 'class/novaKnjiga.php';
require_once('class/savant/Savant3.php');

$tpl = new Savant3(
    array(
        'template_path' => 'templates'
    )
);

$title = 'Dodaj novu knjigu';


$tpl->assign('title', $title);


$tpl->display('novaKnjiga.tpl.php');