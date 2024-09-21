<<<<<<< HEAD
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
 
 
 
 
=======
<?php 
require(__DIR__ . '/../ASK/ask.php');

class AddData extends Ask{
     public $fileJson = __DIR__ .'/../DATA/data.json';
     public $json; 
     public function __destruct() {
          if (file_exists($this->fileJson)) {
              $existingData = json_decode(file_get_contents($this->fileJson), true);
              echo "🥳🥳🎉🎊🥳🥳🎉🎊🥳🥳🎉🎊🥳 IS DONE";
          } else {
              $existingData = [];
          }
      
          $book_data = [
              'ISBN' => $this->ISBN,
              'title' => $this->title,
              'author' => $this->author,
              'publication_date' => $this->date,
              'availability' => true
          ];
      
          $existingData[] = $book_data;  
          $json = json_encode($existingData, JSON_PRETTY_PRINT);
          file_put_contents($this->fileJson, $json);
      }
      

}

 
 
 
>>>>>>> f9408813670e5286ae1206bd757c95bd74d5b8e2
