<?php
$fileJson = 'data.json';
class Livre {
    public $titre;
    public $isbn;
    public $auteurs;  
}

class Auteur {
    public $nom;
    public $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}

 
$c = new Livre();
$c->titre = 'samir';
$c->isbn = 'aoulad amar';
$c->auteurs = [ new Auteur('h1', 'h2') ]; 
$json = json_encode($c, JSON_PRETTY_PRINT);
echo $json;

 if(file_exists($fileJson)){


$jsonData = file_get_contents($fileJson);
$livreLu = json_decode($jsonData);
echo $livreLu->titre; 
 }else{
    echo 'error the file json  dont exists ';
 }
 
function enregistrerLivreDansFichier(Livre $livre, string $fichier) {
    $json = json_encode($livre, JSON_PRETTY_PRINT);
    file_put_contents($fichier, $json);
}
 
function lireLivreDepuisFichier(string $fichier) : Livre {
    $json = file_get_contents($fichier);
    return json_decode($json);
}
