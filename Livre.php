<?php


class Livre
{
    // attributs
    private string $_titre;
    private $_nPages;
    private DateTime $_annee;
    private $_prix;
    private $_auteur;

    // methodes
    public function __construct(string $titre, $nPages, string $annee, $prix, $auteur)
    {
        $this->_titre = $titre;
        $this->_nPages = $nPages;
        $this->_annee = new DateTime ($annee);
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
        return $this->_titre." (".$this->_annee.") : ".$this->_nPages." pages / ".$this->_prix." €<br>";
    }
};





?>

