<?php


    class Auteur{
    private $_nom;
    private $_prenom;
    private $_livres;

    function __construct($nom, $prenom){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livres = [];
    }

    // Getters
    public function getNom()
    {
        return $this->_nom;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function addBook($livre)
    {
        array_push($this->_book, $livre) ;
    }

    public function showMeBook(){
        if(count($this->livres) > 0){
            echo "$this";
            foreach($this->_livres as $book)
                echo $book;
        }else{
            echo " $this it's time to put an Author";
        }
    }

    public function __toString(){
    
        return "$this->_prenom $this->_nom<br>";
    }

    ?>