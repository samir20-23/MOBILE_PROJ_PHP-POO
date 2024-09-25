<?php 

class book{
    private $id;
    private $ISBN;
    private $title;
    // public  $auther;

    public function __construct($ISBN,$title){
        $this->id = time();
        $this->ISBN = $ISBN ;
        $this->title = $title;
        // $this->auther - $auther;
    }
    public function  getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getISBN(){
        return $this->ISBN ;
    }
    public function setISBN($ISBN){
$this->ISBN = $ISBN;
    }

    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
  $this->title = $title;
    }

    // public function getAuther(){
    //     return $this->auther;
    // }
    // public function setAuther ($auther){
    // $this->auther = $auther;
    // }
    }


?>