<?php

class Heroe
{
    public $identidad;
    public $nombre;
    public $poderes;
    public $vida;


    public function __construct($identidad, $nombre, $poderes, $vida)
    {
        $this->identidad = $identidad;
        $this->nombre = $nombre;
        $this->poderes = $poderes;
        $this->vida = $vida;
    }

    function golpear(Heroe $villano)
    {
        $villano->vida = $villano->vida - 15;
        echo "<br>";
        if ($villano->vida <= 0) {
            echo "$villano->nombre se murio";
            echo "<br>";
        } else {
            echo "$villano->nombre tiene $villano->vida de vida";
            echo "<br>";
        }

    }
}
