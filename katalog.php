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

$title = 'Katalog';

if(isset($_POST['search'])) {
    // Validacija
    $upit = trim($_POST['search']);
    $rezultati = array();
    
    if($upit) {        
        $p = new Pretraga();
        $rezultati = $p->pretragaKnjiga($upit);
        $tpl->assign('upit', $upit);
    }
    
    $tpl->assign('rezultati', $rezultati);
    $tpl->display('katalog_rezultati.tpl.php');
} else {
    $tpl->assign('title', $title);
    $tpl->display('katalog.tpl.php');
}
