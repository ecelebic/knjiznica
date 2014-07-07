<?php
session_start();
require_once 'class/model.php';
require_once 'class/clancollect.php';
require_once 'class/pretraga.php';
require_once 'class/clan.php';
require_once('class/savant/Savant3.php');

$tpl = new Savant3(
    array(
        'template_path' => 'templates'
    )
);

$title = 'Član';
$rezultati = array ();
$clanovi = array();


if(isset($_GET['search'])) {
    // Validacija
    $upit = trim($_GET['search']);
    
    if($upit) {        
        $p = new Pretraga();
        $rezultati = $p->pretragaClana($upit);
        $tpl->assign('upit', $upit);
    }
} else if(isset($_GET['delete'])) {
    // pokusaj brisanja
    $delete = $_GET['delete'];
    $sifra = $_GET['sifra'];
    
    $clan = new Clan($sifra);
    $clan->delete();
    }
    
if(isset($_GET['list'])) {
//učitaj sve članove
$sviClanovi = new ClanCollect();
//pošalji templateu sveClanove s vrijednošću $sviClanovi
$tpl->assign('sviClanovi', $sviClanovi->getData());
}

$tpl->assign('clanovi', $clanovi);
$tpl->assign('title', $title);
$tpl->assign('rezultati', $rezultati);

$tpl->display('clan.tpl.php');