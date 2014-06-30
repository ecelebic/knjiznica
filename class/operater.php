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

            if($st->rowCount() ==1){
                $status = true;
            }
        }
        
        return $status;
    }
}