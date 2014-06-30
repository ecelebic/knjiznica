<?php
session_start();
require_once 'class/clan.php';
require_once('class/savant/Savant3.php');

$tpl = new Savant3(
    array(
        'template_path' => 'templates'
    )
);

$title = 'Član';


$tpl->assign('title', $title);

$tpl->display('noviClan.tpl.php');