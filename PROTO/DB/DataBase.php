<?php  

class Database{
    public  $book = [];
    public $pathText = 'DB/DataBase.txt';

    public function __construct(){
         $this->getData();
    }

    private function  getData(){
     if(file_exists($this->pathText)){
       $content = file_get_contents($this->pathText); 
       $data = unserialize($content);
       $this->book = $data->books; 
     }
    }

    private function setData(){
     $data = serialize($this);
     file_put_contents($this->pathText,$data);
    }

    public function saveData(){
      $this->setData();
    }

}

?>