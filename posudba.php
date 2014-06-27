<?php

require_once('class/savant/Savant3.php');

$tpl = new Savant3(
    array(
        'template_path' => 'templates'
    )
);

$title = 'Posudba';
$rezultati = array();

if(isset($_GET['pretraga_datumPosudbe']) && isset($_GET['pretraga_knjiga']) && isset($_GET['pretraga_clan'])) {
    
    $datumPosudbe = trim($_GET['pretraga_datumPosudbe']);
    $knjiga = trim($_GET['pretraga_knjiga']);
    $clan = trim($_GET['pretraga_clan']);
    
if($datumPosudbe != '' || $knjiga != '' || $clan != '') {        
        $p = new Pretraga();
        $rezultati = $p->pretragaPosudbe($datumPosudbe, $knjiga, $clan);
    }    
}

$tpl->assign('title', $title);
$tpl->assign('rezultati', $rezultati);

$tpl->display('posudba.tpl.php');
