<?php 

class FavoriteCar{
     public $name ;
     public $model;
     public $style;
public function __construct($name,$model,$style){
$this->name = $name;
$this->model = $model;
$this->style = $style;
}
public function __destruct(){
     echo "my favorite car is {$this->name} model {$this->model} and style or type {$this->style}";
}
}
function getInput($ev){
     echo $ev ;
     return trim(fgets(STDIN));
}
 $choice = getInput("Enter NAME car: ");
 $model = getInput("Enter MODEL car: ");
 $style = getInput("Enter TYPE car: ");

$car = new FavoriteCar($choice,$model,$style);
 