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

if(isset($_GET['pretraga_posudbe'])) {
    // Validacija
    $upit = trim($_GET['pretraga_posudbe']);
    
    if($upit) {        
        $p = new Pretraga();
        $rezultati = $p->pretragaPosudbe($upit);
        $tpl->assign('upit', $upit);
    }
}

$tpl->assign('title', $title);
$tpl->assign('rezultati', $rezultati);

$tpl->display('posudba.tpl.php');
