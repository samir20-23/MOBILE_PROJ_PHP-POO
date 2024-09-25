<?php 
require('./presentation.php'); 

 function ask($ev){
echo $ev ; 
return trim(fgets(STDIN));
}
 function start(){

    echo "|        Books Management            |\n";
    echo "|------------------------------------|\n";
    echo "|    Please choose an action:        |\n";
    echo "|------------------------------------| \n";
    echo "| [v] - View the Books               |\n";
    echo "| [a] - Add a new Book               |\n";
    echo "| [exit] - Exit the program          |\n";
    echo "+------------------------------------+\n\n";

    $exitProgram = false;
    while (!$exitProgram) {
    $ask = ask('Your choice');
    switch(strtolower($ask)){
    case 'v' :
        $view = new Presentation();
        $view->view();
        break;
    case 'add':
        $add = new Presentation();
        $add->add();
        break;
    case 'ex';
    $exitProgram = false;
    break;
    default:
        echo "error ' switch '.\n";
        break;
    }
}

}
start();
?>