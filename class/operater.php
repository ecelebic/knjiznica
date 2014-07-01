<?php

include_once('class/baza.php');

class Operater extends Baza
{
    public function Prijava($email, $lozinka){
        $status = false;

        if($email && $lozinka){
            $st = $this->db->prepare("select * from operater where email=? and lozinka=?");
            $st->bindParam(1,$email);
            $st->bindParam(2,$lozinka);
            $st->execute();

            if($st->rowCount() == 1){
                $res = $st->fetch(PDO::FETCH_ASSOC);

                $_SESSION['operater_sifra'] = $res['sifra'];

                $status = $res['sifra'];
            }
        }

        return $status;
    }

    public function Odjava() {
        session_destroy();
        session_regenerate_id();

//        if (isset($_SESSION['prijavljen'])) {
//            $_SESSION['prijavljen'] = false;
//        }
    }
}