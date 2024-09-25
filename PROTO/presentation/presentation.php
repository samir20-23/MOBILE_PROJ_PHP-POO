<?php
require('../Entities/book.php');
require('../Servase/BookService.php');
class Presentation {
    public function view(){
      $view = new DataAccess();
      $data = $view->getBooks();
      if(!empty($data)){
 foreach($data as  $dk){
        echo "ISBN: " . $dk->getISBN() . "\n";
        echo "Title: " . $dk->getTitle() . "\n";
        // echo "auther: " . $dk->getAuther() . "\n";
      }
      }else{
        echo "no view";
      }
     
    }
  public function add(){
     $ISBN = ask("enter ISBN OR  enter 'back' ");
     if($ISBN == "back"){
   return;
     }
     $title = ask("enter title or 'back' ");
     if($title == "back"){
return;
     }
     
//      $auther = ask("enter auther or 'back' ");
//      if($auther == "back"){
// return ;
//      }  
     
     $book = new book($ISBN,$title);
     $ser = new DataAccess();
     $ser->setBook($book);
    echo 'Book added successfully';
    }


}

?>