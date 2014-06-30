<?php

abstract class Baza
{
    protected $db;
    
    public function __construct()
    {
        $this->db = new PDO ("mysql:host=localhost;dbname=knjiznica","root", "root");
    }
    
    public function dbConnect()
    {
        return $this->db;
    }
}