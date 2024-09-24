<?php
require('../DB/DataBase.php');

class  DataAccess{

    public function getBooks(){
        $database = new Database();
        return $database->book;
    }
    public function setBook($book){
        $dataBase = new DataBase();
      $dataBase->book[] = $book;
      $dataBase->saveData();
  }
}
?>
