<?php

require('./presentation.php');
function ask($ask)
{
    echo $ask;
    return trim(fgets(STDIN));
}

function start()
{
    $ax = false;
    while (!$ax) {
    echo "enter [a] [v] [exit]";

        $question = ask('write hear : ');
        switch ($question) {
            case 'v':
                $view = new Presentation();
                $view->view();
                break;
            case 'a':
                $view = new Presentation();
                $view->add();
                break;
              case 'exit':
    $ax = true;
    break;

  default:
    echo "error switch .\n";
    break;
            
        }
    }
}
start();