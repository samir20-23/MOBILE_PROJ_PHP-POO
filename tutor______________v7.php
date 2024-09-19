<?php

class Livre {
    public $titre;
    public $isbn;
    public $auteurs; // Un tableau d'objets Auteur
}

class Auteur {
    public $nom;
    public $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}

// Créer un objet Livre
$c = new Livre();
$c->titre = 'samir';
$c->isbn = 'aoulad amar';
$c->auteurs = [ new Auteur('h1', 'h2') ]; // Utiliser une liste d'auteurs

// Convertir l'objet en JSON et afficher
$json = json_encode($c, JSON_PRETTY_PRINT);
echo $json;

// Lire un objet Livre depuis un fichier JSON
$jsonData = file_get_contents('data.json');
$livreLu = json_decode($jsonData);
echo $livreLu->titre; // Afficher le titre lu depuis le fichier

// Fonction pour enregistrer un objet Livre dans un fichier JSON
function enregistrerLivreDansFichier(Livre $livre, string $fichier) {
    $json = json_encode($livre, JSON_PRETTY_PRINT);
    file_put_contents($fichier, $json);
}

// Fonction pour lire un objet Livre depuis un fichier JSON
function lireLivreDepuisFichier(string $fichier) : Livre {
    $json = file_get_contents($fichier);
    return json_decode($json);
}
