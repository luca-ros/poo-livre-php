<?php

require "Auteur.php";
require "index.php";



$aut1 = new Auteur ("BRUNO", "Carlo");
$aut2 = new Auteur ("GIOVA", "Archi");

$book1 = new Livre ("NUIT",220,2010,20,);
$book2 = new Livre ("PONT",632, 2000,15,);
$book3 = new Livre ("PINOCCHIO",823,1985,14);



$aut1->printAuteur();



?>