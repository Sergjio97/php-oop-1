<?php

class Movies {
    public $titolo;
    public $lingua;
    public $trama;
    public $genere;
    public $anno;
    public $durata;

    //costruttore
    public function __construct($_titolo, $_lingua, $_genere, $_anno, $_durata) {

        $this->titolo = $_titolo;
        $this->lingua = $_lingua;
        $this->genere = $_genere;
        $this->anno = $_anno;
        $this->durata = $_durata;        
    }
}


?>