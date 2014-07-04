<?php
session_start();
require_once 'class/model.php';
require_once 'class/pretraga.php';
require_once 'class/posudba.php';
require_once('class/savant/Savant3.php');

$tpl = new Savant3(
    array(
        'template_path' => 'templates'
    )
);

$title = 'Posudba';
$rezultati = array();

if(isset($_GET['search'])) {
    // Validacija
    $upit = trim($_GET['search']);
    
    if($upit) {        
        $p = new Pretraga();
        $rezultati = $p->pretragaPosudbe($upit);
        $tpl->assign('upit', $upit);
    }
} else if(isset($_GET['delete'])) {
    // pokusaj brisanja
    $delete = $_GET['delete'];
    $sifra = $_GET['sifra'];
    
    $posudba = new Posudba($sifra);
    $posudba->delete();
    
    
}

$tpl->assign('title', $title);
$tpl->assign('rezultati', $rezultati);

$tpl->display('posudba.tpl.php');
