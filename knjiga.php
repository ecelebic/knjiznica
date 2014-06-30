<?php
session_start();
require_once 'class/pretraga.php';
require_once('class/savant/Savant3.php');

$tpl = new Savant3(
    array(
        'template_path' => 'templates'
    )
);

$title = 'Knjiga';
$rezultati = array();

if(isset($_GET['search'])) {
    // Validacija
    $upit = trim($_GET['search']);
    
    if($upit) {        
        $p = new Pretraga();
        $rezultati = $p->pretragaKnjiga($upit);
        $tpl->assign('upit', $upit);
    }
}

$tpl->assign('title', $title);
$tpl->assign('rezultati', $rezultati);

$tpl->display('knjiga.tpl.php');