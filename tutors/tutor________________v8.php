<?php

class Livre {
    public $titre;
    public $isbn;
    public $auteurs;  

    public function __construct($titre, $isbn, $auteurs) {
        $this->titre = $titre;
        $this->isbn = $isbn;
        $this->auteurs = $auteurs;
    }
}

class Auteur {
    public $nom;
    public $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}

 
$auteur1 = new Auteur("Saint-Exupéry", "Antoine de");
$livre1 = new Livre("Le Petit Prince", "9782266000016", [$auteur1]);

 
$json = json_encode($livre1, JSON_PRETTY_PRINT);
file_put_contents('data.json', $json);
 
$json = file_get_contents('data.json');
$livreLu = json_decode($json);

 
echo $livreLu->titre;  
