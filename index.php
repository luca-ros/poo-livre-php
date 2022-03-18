<h1>POO Livre</h1>  
<p>Vous êtes chargé(e) de créer un projet PHP orienté objet permettant de gérer des livres et leurs auteurs respectifs <br>
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur. Un auteur est identifié par un nom et un prénom.<br>
Une méthode toString sera appréciée dans chacune de vos classes. <br>
Vous implémenterez une méthode afficherBibliographie qui permettra d’afficher la bibliographie d’un auteur :</p>

<?php

require "Auteur.php";
require "Livre.php";

$aut1 = new Auteur ("BRUNO", "Carlo");
$aut2 = new Auteur ("GIOVA", "Archi");

$book1 = new Livre ("NUIT", 220, 2010, 20, "$aut1");
$book2 = new Livre ("PONT", 632, 2000, 15, "$aut2");
$book3 = new Livre ("PINOCCHIO", 823, 1985, 14, "$aut1");



$aut1->printAuteur();



?>