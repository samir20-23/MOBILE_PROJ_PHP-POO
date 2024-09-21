<?php
 
 require(__DIR__ . '/../MANAG/manag.php');


class Ask extends Manager{
    public $fileJson = __DIR__ .'/../DATA/data.json';

     function getInput($ask){
         echo $ask;
         return trim(fgets(STDIN));
     }
 
     public function __construct(){
        
        echo '##############################' . PHP_EOL .
        '[a] => add book' . PHP_EOL .
        '[v] => show the books' . PHP_EOL .
        '[ex] => exit the application' . PHP_EOL .
        '##############################' . PHP_EOL;
 
         $this->option = $this->getInput('enter (add or ex or v) :: ');
         if($this->option == "add"){
             $this->ISBN = $this->getInput('enter ISBN :: ');
             $this->title = $this->getInput('enter title :: ');
             $this->author = $this->getInput('enter author :: ');
             $this->date = $this->getInput('enter date  :: '); 
         } 
         else if($this->option == 'ex') {
             echo "Exiting...\n";
         } 
        
 
     }
 }