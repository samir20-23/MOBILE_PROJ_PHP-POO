<?php 

class DataLogIn{
    public $name ;
    public $email ;
    public $password;
    public function getData(){
      echo "hello {$this->name} your email {$this->email} your password: [{$this->password}]";
    }
}
function getInput($ev){
echo $ev;
return trim(fgets(STDIN));
}
$name = getInput("enter your NAME : ");
$email = getInput("enter your email : ");
$password = getInput("enter your password : ");

$DataLogIn = new DataLogIn();
$DataLogIn->name = $name;
$DataLogIn->email = $email;
$DataLogIn->password = $m;
$DataLogIn->getData();

