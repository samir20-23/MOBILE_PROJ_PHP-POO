<?php 

class Utilisateur {
    private $nom;
    private $prenom;
    private $email;

    public function __construct($nom, $prenom, $email) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }

    public function getNom(){
        echo  $this->nom;
        echo  $this->prenom;
        echo  $this->email;

    }

    public function setNom($nom){
        $this->nom = $nom;
    }
}


function getInput($ev){
echo $ev;
return trim(fgets(STDIN));
}
$nom = getInput('enter nome : ');
$prenom = getInput('enter prenom : ');
$email  = getInput('enter email  : ');
$c = new Utilisateur($nom,$prenom,$email);  
$c->setNom('samir');
$c->getNom();
