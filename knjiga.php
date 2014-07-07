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

$title = 'Knjiga';
$rezultati = array();
$knjige = array();
$sveKnjige = array();

if(isset($_GET['search'])) {
    // Validacija
    $upit = trim($_GET['search']);
    
    if($upit) {        
        $p = new Pretraga();
        $rezultati = $p->pretragaKnjiga($upit);
        $tpl->assign('upit', $upit);
    }
} else if(isset($_GET['delete'])) {
    // pokusaj brisanja
    $delete = $_GET['delete'];
    $sifra = $_GET['sifra'];
    
    $knjiga = new Knjiga($sifra);
    $knjiga->delete();
}
//ako je na listu, odnosno klik na prikazi 
if(isset($_GET['list'])) {
    //učitaj sve knjige
    $sveKnjige = new KatalogCollection();
    //pošalji templateu sveKnjige s vrijednošću $sveKnjige
    $tpl->assign('sveKnjige', $sveKnjige->getData());
}

$tpl->assign('knjige', $knjige);
$tpl->assign('title', $title);
$tpl->assign('rezultati', $rezultati);

$tpl->display('knjiga.tpl.php');