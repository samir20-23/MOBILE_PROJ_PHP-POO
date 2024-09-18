
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

    // Getters
    public function getNom() {
        return  $this->nom;
    }

    public function getPrenom() {
        return  $this->prenom;
    }

    public function getEmail() {
        return  $this->email;
    }

    // Setters
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}
function getInput($ev){
    echo $ev;
    return trim(fgetc(STDIN));
}
$nom = getInput('enter nom :');
$email = getInput('enter Email :');
$pnom= getInput('enter prenom :');

$r = new Utilisateur($nom,$pnom,$email);
$r->setPrenom($pnom);
$r->setEmail($email);
$r->setNom($nom);


$r->getPrenom();
$r->getEmail();
$r->getNom();
?>
