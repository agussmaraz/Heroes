<?php 
require_once('heroes.php');

$heroe1 = new Heroe('Jason Momoa', 'Aquaman', 'superfuerza-acuatica','100');
$heroe2 = new Heroe('Clark Kent', 'Superman', 'superfuerza','100');

while ($heroe1->vida > 0  && $heroe2->vida > 0) {
    $pelea =  rand(0, 1);
    if ($pelea === 1) {
        $heroe1->golpear($heroe2);
    } else {
        $heroe2->golpear($heroe1);
    }
}
?>