<?php
class Manager{
     public $option;
     public $ISBN;
     public $title;
     public $author;
     public $date;
     public $id;
 
     public function __construct($option, $ISBN, $title, $author, $date, $id){
         $this->option = $option;
         $this->ISBN = $ISBN;
         $this->title = $title;
         $this->author = $author;
         $this->date = $date;
         $this->id = $id;
     }
 }
 