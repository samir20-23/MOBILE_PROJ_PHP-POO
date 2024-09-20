<?php
 
 require(__DIR__ . '/../MANAG/manag.php');


class Ask extends Manager{
     

     function getInput($ask){
         echo $ask;
         return trim(fgets(STDIN));
     }
 
     public function __construct(){
         $this->option = $this->getInput('enter (add or ex ) :: ');
         if($this->option == "add"){
             $this->ISBN = $this->getInput('enter ISBN :: ');
             $this->title = $this->getInput('enter title :: ');
             $this->author = $this->getInput('enter author :: ');
             $this->date = $this->getInput('enter date  :: '); 
         } else {
             echo "Exiting...\n";
         }
 
 
     }
 }