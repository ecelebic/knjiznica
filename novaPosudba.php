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

if (isset($_POST['gotovo'])) {
    $datumPosudbe = $_POST['datumPosudbe'];
    $datumPovratka = $_POST['datumPovratka'];
    $clan = $_POST['clan'];
    $knjiga = $_POST['knjiga'];
    
    $posudba = new Posudba(null);
    
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

$title = 'Nova posudba';

$tpl->assign('title', $title);


$tpl->display('novaPosudba.tpl.php');
