<?php
session_start();
require_once('class/savant/Savant3.php');

$tpl = new Savant3(
    array(
        'template_path' => 'templates'
    )
);

$title = 'Katalog';
$rezultati = array();

if(isset($_GET['pretraga_naslov']) && isset($_GET['pretraga_autor'])) {
    // Validacija
    $naslov = trim($_GET['pretraga_naslov']);
    $autor = trim($_GET['pretraga_autor']);
    
    if($naslov != '' || $autor != '') {        
        $p = new Pretraga();
        
        $rezultati = $p->pretragaKnjiga($naslov, $autor);
    }
}

$tpl->assign('title', $title);
$tpl->assign('rezultati', $rezultati);

$tpl->display('katalog.tpl.php');
