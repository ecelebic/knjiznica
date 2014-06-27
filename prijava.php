<?php

require_once('class/savant/Savant3.php');

$tpl = new Savant3(
    array(
        'template_path' => 'templates'
    )
);

$title = 'Prijava';

$tpl->assign('title', $title);

$tpl->display('prijava.tpl.php');