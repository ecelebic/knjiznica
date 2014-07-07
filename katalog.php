<?php
session_start();
require_once 'class/model.php';
require_once 'class/katalogcollection.php';

require_once 'class/pretraga.php';
require_once 'class/knjiga.php';
require_once('class/savant/Savant3.php');

$tpl = new Savant3(
    array(
        'template_path' => 'templates'
    )
);

$title = 'Katalog';
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

$knjige = new KatalogCollection();


$tpl->assign('title', $title);
$tpl->assign('rezultati', $rezultati);

$tpl->display('katalog.tpl.php');
