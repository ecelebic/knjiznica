<?php
session_start();
require_once 'class/model.php';

require_once'class/savant/Savant3.php';
require_once 'class/posudba.php';

$tpl = new Savant3(
    array(
        'template_path' => 'templates'
    )
);


$title = 'Promijeni posudbu';

$tpl->assign('title', $title);


$tpl->display('updatePosudba.tpl.php');
