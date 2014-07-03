<?php
session_start();
require_once 'class/model.php';
require_once 'class/savant/Savant3.php';
require_once 'class/clan.php';

$tpl = new Savant3(
    array(
        'template_path' => 'templates'
    )
);

if (isset($_REQUEST['sifra'])) {
   
    $clan = new Clan($_REQUEST['sifra']);    
} else {
    
    $clan = new Clan();
}

if (isset($_POST['spremi'])) {
    
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $fakultet = $_POST['fakultet'];
    $kontakt = $_POST['kontakt'];
    $mjesto = $_POST['mjesto'];

     if ($ime && $prezime && $fakultet && $kontakt && $mjesto) {        
        $clan->setIme($ime);
        $clan->setPrezime($prezime);
        $clan->setFakultet($fakultet);
        $clan->setKontakt($kontakt);
        $clan->setMjesto($mjesto);
        $clan->save();
    }
     
    if ($clan->getSifra()) {
        $tpl->assign('notify', 'Clan je spremljen');
    } else {
        $tpl->assign('notify', 'Clan nije spremljen');
    }
}

if ($clan->getSifra()) {
    // ako je knjiga ucitana
    $tpl->assign('clanSifra', $clan->getSifra());
    $tpl->assign('clanIme', $clan->getIme());
    $tpl->assign('clanPrezime', $clan->getPrezime());
    $tpl->assign('clanFakultet', $clan->getFakultet());
    $tpl->assign('clanKontakt', $clan->getKontakt());
    $tpl->assign('clanMjesto', $clan->getMjesto());
}

$title = 'Dodaj novog člana';


$tpl->assign('title', $title);

$tpl->display('noviClan.tpl.php');