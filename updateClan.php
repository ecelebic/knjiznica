<?php
session_start();
require_once 'class/model.php';
require_once'class/savant/Savant3.php';
require_once 'class/clan.php';

$tpl = new Savant3(
    array(
        'template_path' => 'templates'
    )
);

$title = 'Promijeni člana';


$tpl->assign('title', $title);

$tpl->display('updateClan.tpl.php');