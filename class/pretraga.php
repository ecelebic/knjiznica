<?php
require_once 'class/baza.php';

class Pretraga extends Baza
{    
    public function pretragaKnjiga($upit)
    {
        $searchq = "%{$upit}%";
        $sql = $this->db->prepare("SELECT * FROM `knjiga` WHERE naslov LIKE :upit OR autor LIKE :upit");
        $sql->execute(array(
            ':upit' => $searchq,
            )
        );

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
