<?php

require 'vendor/autoload.php'; // Inclure l'autoloader de Composer

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Définition des entités

class Personne {
    private $id;
    private $nom;
    private $passeport; // Un objet Passeport

    // Getters et Setters
    public function getId(): ?int {
        return $this->id;
    }

    public function getNom(): ?string {
        return $this->nom;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function getPasseport(): ?Passeport {
        return $this->passeport;
    }

    public function setPasseport(Passeport $passeport): void {
        $this->passeport = $passeport;
        $passeport->setPersonne($this); // Lien bidirectionnel
    }
}

class Passeport {
    private $numero;
    private $dateExpiration;
    private $personne; // Un objet Personne

    // Getters et Setters
    public function getNumero(): ?string {
        return $this->numero;
    }

    public function setNumero(string $numero): void {
        $this->numero = $numero;
    }

    public function getDateExpiration(): ?\DateTime {
        return $this->dateExpiration;
    }

    public function setDateExpiration(\DateTime $dateExpiration): void {
        $this->dateExpiration = $dateExpiration;
    }

    public function getPersonne(): ?Personne {
        return $this->personne;
    }

    public function setPersonne(Personne $personne): void {
        $this->personne = $personne;
    }
}

class Auteur {
    private $id;
    private $nom;
    /** @var Livre[] */
    private $livres = [];

    // Getters et Setters
    public function getId(): ?int {
        return $this->id;
    }

    public function getNom(): ?string {
        return $this->nom;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function getLivres(): array {
        return $this->livres;
    }

    public function addLivre(Livre $livre): void {
        $this->livres[] = $livre;
        $livre->setAuteur($this);
    }
}

class Livre {
    private $id;
    private $titre;
    private $auteur; // Un objet Auteur

    // Getters et Setters
    public function getId(): ?int {
        return $this->id;
    }

    public function getTitre(): ?string {
        return $this->titre;
    }

    public function setTitre(string $titre): void {
        $this->titre = $titre;
    }

    public function getAuteur(): ?Auteur {
        return $this->auteur;
    }

    public function setAuteur(Auteur $auteur): void {
        $this->auteur = $auteur;
    }
}

class Etudiant {
    private $id;
    private $nom;
    /** @var Cours[] */
    private $cours = [];

    // Getters et Setters
    public function getId(): ?int {
        return $this->id;
    }

    public function getNom(): ?string {
        return $this->nom;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function getCours(): array {
        return $this->cours;
    }

    public function ajouterCours(Cours $cours): void {
        $this->cours[] = $cours;
        $cours->ajouterEtudiant($this);
    }
}

class Cours {
    private $id;
    private $nom;
    /** @var Etudiant[] */
    private $etudiants = [];

    // Getters et Setters
    public function getId(): ?int {
        return $this->id;
    }

    public function getNom(): ?string {
        return $this->nom;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function getEtudiants(): array {
        return $this->etudiants;
    }

    public function ajouterEtudiant(Etudiant $etudiant): void {
        $this->etudiants[] = $etudiant;
    }
}

// Configuration de Doctrine ORM
$config = Setup::createAnnotationMetadataConfiguration(
    [__DIR__ . "/src"], // Répertoire des entités
    true, // Mode développement
    null, // Répertoire des proxies
    null, // Cache
    false // Utiliser Simple Annotation Reader
);

$conn = [
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => '',
    'dbname' => 'test',
];

$entityManager = EntityManager::create($conn, $config);

// Création d'un nouvel auteur et de livres associés
$auteur = new Auteur();
$auteur->setNom('Dumas');

$livre1 = new Livre();
$livre1->setTitre('Les Trois Mousquetaires');
$livre1->setAuteur($auteur);

$entityManager->persist($auteur);
$entityManager->persist($livre1);
$entityManager->flush();
