<?php

class Livre
{
    // attributs
    private string $_titre;
    private $_nPage;
    private DateTime $_anne;
    private $_prix;
    private string $_autheur;

    // methodes
    public function __construct(string $titre, $nPage, string $anne, $prix, string $autheur)
    {
        $this->_titre = $titre;
        $this->_nPage = $nPage;
        $this->_annes = $anne;
        $this->_prix = $prix;
        $this->_autheur = $autheur;
    }

    // Getters
    public function getTitre()
    {
        return $this->_titre;
    }
    public function getNpage()
    {
        return $this->_nPage;
    }
    public function getAnne()
    {
        return $this->_anne;
    }
    public function getPrix()
    {
        return $this->_prix;
    }
    public function getAutheur()
    {
        return $this->_autheur;
    }

};



// class autheur
// {

// }


?>