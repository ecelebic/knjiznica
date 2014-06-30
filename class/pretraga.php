<?php
require_once 'class/baza.php';

class Pretraga extends Baza
{    
    public function pretragaKataloga($upit)
    {
        $searchq = "%{$upit}%";
        $sql = $this->db->prepare("SELECT sifra FROM `knjiga` WHERE naslov LIKE :upit OR autor LIKE :upit");
        $sql->execute(array(
            ':upit' => $searchq,
            )
        );

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
       public function pretragaKnjiga($upit)
    {
        $searchq = "%{$upit}%";
        $sql = $this->db->prepare("SELECT sifra FROM `knjiga` WHERE naslov LIKE :upit OR autor LIKE :upit");
        $sql->execute(array(
            ':upit' => $searchq,
            )
        );

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
     public function pretragaPosudbe($upit)
    {
        $searchq = "%{$upit}%";
        $sql = $this->db->prepare("SELECT sifra FROM `posudba` WHERE datumPosudbe LIKE :upit OR knjiga LIKE :upit OR clan LIKE :upit");
        $sql->execute(array(
            ':upit' => $searchq,
            )
        );

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function pretragaClana($upit)
    {
        $searchq = "%{$upit}%";
        $sql = $this->db->prepare("SELECT sifra FROM `clan` WHERE ime LIKE :upit OR prezime LIKE :upit OR fakultet LIKE :upit");
        $sql->execute(array(
            ':upit' => $searchq,
            )
        );

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
