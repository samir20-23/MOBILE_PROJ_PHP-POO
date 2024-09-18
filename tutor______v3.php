<?php 
class Animal {
    public $nom;
    public $age;

    public function manger() {
        echo "Je mange.";
    }
}

class Chat extends Animal {
    public function miauler() {
        echo "Miaou !";
    }
}


// 
class Chien extends Animal {
  public function faireDuBruit() {
      echo "Ouaf !";
  }
}

 

 $c = new Animal();
 $cl = new Chat();
 $class = new Chien(); 
 $c->manger();
 $cl->miauler();
 $class->faireDuBruit();

