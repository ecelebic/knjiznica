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

if (isset($_REQUEST['sifra'])) {
    // update postojece posudbe
    $posudba = new Posudba($_REQUEST['sifra']);    
} else {
    // nova posudba
    $posudba = new Posudba();
}

if (isset($_POST['promijeni'])) {
    $datumPosudbe = $_POST['datumPosudbe'];
    $datumPovratka = $_POST['datumPovratka'];
    $clan = $_POST['clan'];
    $knjiga = $_POST['knjiga'];
    
    if ($datumPosudbe && $datumPovratka && $clan && $knjiga) {        
        $posudba->setdatumPosudbe($datumPosudbe);
        $posudba->setdatumPovratka($datumPovratka);
        $posudba->setClan($clan);
        $posudba->setKnjiga($knjiga);
        $posudba->save();
    }
     
    if ($posudba->getSifra()) {
        $tpl->assign('notify', 'Posudba spremljena');
    } else {
        $tpl->assign('notify', 'Posudba nije spremljena');
    }
}

if ($posudba->getSifra()) {
    
    $tpl->assign('posudbaSifra', $posudba->getSifra());
    $tpl->assign('posudbadatumPosudbe', $posudba->getdatumPosudbe());
    $tpl->assign('posudbadatumPovratka', $posudba->getdatumPovratka());
    $tpl->assign('posudbaclan', $posudba->getClan());
    $tpl->assign('posudbaknjiga', $posudba->getKnjiga());
    
    
}

$title = 'Nova posudba';

$tpl->assign('title', $title);


$tpl->display('novaPosudba.tpl.php');
