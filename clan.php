<?php

require_once('class/savant/Savant3.php');

$tpl = new Savant3(
    array(
        'template_path' => 'templates'
    )
);

$title = 'Član';
$rezultati = array ();

if(isset($_GET['pretraga_ime']) && isset($_GET['pretraga_prezime']) && isset($_GET['pretraga_fakultet'])) {
    $ime = trim($_GET['pretraga_ime']);
    $prezime = trim($GET['pretraga_prezime']);
    $fakultet = trim($_GET['pretraga_fakultet']);
    
        if($ime != '' || $prezime != '' || $fakultet != ''){
            
             $p = new Pretraga();
             $rezultati = $p->pretragaClan($ime, $prezime, $fakultet);
        }
}

$tpl->display('clan.tpl.php');