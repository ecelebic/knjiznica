<?php

include_once('class/prijava.php');

class Operater{

    private $db;
    

    public function __construct () {
        $this->db = new Prijava();
        $this->db = $this->db->dbConnect();
    }


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