<?php 
require('../Entities/book.php');
require('../Servase/BookService.php');
class Presentation{
  public function view(){
$classdata = new DataDAO();
$data = $classdata->getData();
foreach($data as $dt){
echo 'Id : '.$dt->getId()."\n";
echo 'Title : '.$dt->getTitle()."\n";
echo 'ISBN : '.$dt->getISBN()."\n";
}
  }
  public function add(){
    $ISBN = ask('enter ISBN : ');
    $title = ask('enter title : ');
  if($ISBN == 'back' || $title == "back"){
return;
  }
    $classData = new Entities($ISBN,$title);
$classDAO = new DataDAO;   
 $classDAO->setData($classData);

  }
}


?>























