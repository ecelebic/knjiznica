<?php
session_start();
require_once 'class/model.php';
require_once 'class/savant/Savant3.php';
require_once 'class/posudba.php';

$tpl = new Savant3(
    array(
        'template_path' => 'templates'
    )
);

if (isset($_REQUEST['sifra'])) {
    // update postojece posudbe
    $posudba = new Posudba($_REQUEST['sifra']);

    $tpl->assign('posudbaSifra', $posudba->getSifra());
    $tpl->assign('posudbaDatumPosudbe', $posudba->getdatumPosudbe());
    $tpl->assign('posudbaDatumPovratka', $posudba->getdatumPovratka());
    $tpl->assign('posudbaClan', $posudba->getClan());
    $tpl->assign('posudbaKnjiga', $posudba->getNaslovKnjige() . ' ' . $posudba->getAutorKnjige());
} else {
    // nova posudba
    $posudba = new Posudba();
}

if (isset($_POST['promijeni'])) {
    //netko je kliknio na save dugme
    $datumPosudbe = $_POST['datumPosudbe'];
    $datumPovratka = $_POST['datumPovratka'];
    $clan = $_POST['clan'];
    $knjiga = $_POST['knjiga'];
    

    if ($datumPosudbe && $datumPovratka && $clan && $knjiga) {  
        $posudba->setDatumPosudbe($datumPosudbe);
        $posudba->setDatumPovratka($datumPovratka);
        $posudba->setClan($clan);
        $posudba->setKnjiga($knjiga);
        $posudba->save();
    }
     
    // provjeris jel sve spremio
    if ($posudba->getSifra()) {
        $tpl->assign('notify', 'Posudba spremljena');
    } else {
        $tpl->assign('notify', 'Posudba nije spremljena');
    }
}

$title = 'Nova posudba';

$tpl->assign('title', $title);


$tpl->display('novaPosudba.tpl.php');
