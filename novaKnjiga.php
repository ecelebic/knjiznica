<?php
session_start();
require_once 'class/model.php';
require_once 'class/savant/Savant3.php';
require_once 'class/knjiga.php';

$tpl = new Savant3(
    array(
        'template_path' => 'templates'
    )
);

if (isset($_REQUEST['sifra'])) {
    
    $knjiga = new Knjiga($_REQUEST['sifra']);    
} else {
    
    $knjiga = new Knjiga();
}

if (isset($_POST['spremi'])) {
    //netko je kliknio na save dugme
    $naslov = $_POST['naslov'];
    $autor = $_POST['autor'];
    $godina = $_POST['godina'];
    $dostupnost = $_POST['pokemon'];

    if ($naslov && $autor && $godina && $dostupnost) {  
        $knjiga->setNaslov($naslov);
        $knjiga->setAutor($autor);
        $knjiga->setGodinaIzdanja($godina);
        $knjiga->setDostupnostKnjige($dostupnost);
        $knjiga->save();
    }
     
    // provjeris jel sve spremio
    if ($knjiga->getSifra()) {
        $tpl->assign('notify', 'Knjiga spremljena');
    } else {
        $tpl->assign('notify', 'Knjiga nije spremljena');
    }
}


$title = 'Dodaj novu knjigu';


$tpl->assign('title', $title);


$tpl->display('novaKnjiga.tpl.php');