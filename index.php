<h1>POO Livre</h1>  
<p>Vous êtes chargé(e) de créer un projet PHP orienté objet permettant de gérer des livres et leurs auteurs respectifs <br>
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur. Un auteur est identifié par un nom et un prénom.<br>
Une méthode toString sera appréciée dans chacune de vos classes. <br>
Vous implémenterez une méthode afficherBibliographie qui permettra d’afficher la bibliographie d’un auteur :</p>

<?php

class Livre
{
    // attributs
    private string $_titre;
    private $_nPages;
    private DateTime $_annee;
    private $_prix;
    private string $_auteur;

    // methodes
    public function __construct(string $titre, $nPages, string $annee, $prix, string $auteur)
    {
        $this->_titre = $titre;
        $this->_nPages = $nPages;
        $this->_annee = $annee;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
    }

    // Getters
    public function getTitre()
    {
        return $this->_titre;
    }
    public function getPages()
    {
        return $this->_nPages;
    }
    public function getAnnee()
    {
        return $this->_annee;
    }
    public function getPrix()
    {
        return $this->_prix;
    }
    public function getAuteur()
    {
        return $this->_auteur;
    }
    public function __toString()
    {
        return $this->_titre." (".$this->_annee.") : ".$this->_nPages." pages  ".$this->_prix." €<br>";
    }
};




?>
