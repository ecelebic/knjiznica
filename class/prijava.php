<?php

class Prijava
{
    public function dbConnect () {
        return new PDO ("mysql:host=localhost;dbname=knjiznica","root", "root");
    }
}