<?php


class Livre
{
    // attributs
    private string $_titre;
    private int $_nPages;
    private int $_annee;
    private float $_prix;
    private Auteur $_auteur;

    // methodes
    public function __construct(string $titre, $nPages, $annee, $prix, $auteur)
    {
        $this->_titre = $titre;
        $this->_nPages = $nPages;
        $this->_annee = $annee;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $this->_auteur->addBook($this);
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

