<?php

class An{
    public function an(){
        echo "an 1 !";
    }
}
class An2 extends An{
    public function an(){
        echo "an 2 ! ";
    }
}
class An3 extends An2 {
    public function an(){
        echo "an 3 !";
    }
}
$arr = [new An(), new An2(),new An3()];

foreach($arr as $arr){
    $c = $arr;
    $c->an();

}
