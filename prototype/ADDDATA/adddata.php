<?php 
require(__DIR__ . '/../ASK/ask.php');

class AddData extends Ask{
   
     public $json; 
     public $ask; 
     
     public function __destruct() {
       
          if (file_exists($this->fileJson)) {
              $existingData = json_decode(file_get_contents($this->fileJson), true);
          
          } else {
              $existingData = [];
          }
          if($this->option == 'add'){
      if($this->ISBN != '' || $this->title != ''|| $this->author != '' || $this->date != ''){
         $book_data = [
              'ISBN' => $this->ISBN,
              'title' => $this->title,
              'author' => $this->author,
              'publication_date' => $this->date,
              'availability' => true
          ];
           echo "🥳🥳🎉🎊🥳🥳🎉🎊🥳🥳🎉🎊🥳 IS DONE";
               $existingData[] = $book_data;  
          $json = json_encode($existingData, JSON_PRETTY_PRINT);
          file_put_contents($this->fileJson, $json);
             
      }else{
        echo 'empty inputs .......';
      }
 }
      }
  

}
 
 
 
 
