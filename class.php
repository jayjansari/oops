<?php
class car{
    public $name;
    public $model;


    function __construct($name,$model,$price,$avg){
        $this->n=$name;
        $this->m=$model;
        $this->p=$price;
        $this->a=$avg;


    }
    function get(){
        echo "car name is {$this->n}<br>
        car model is {$this->m}<br>
        car price is {$this->p}<br>
        car avg is {$this->a}<br>";
        if($this->a>4){
            echo "consider";
            echo "<br><br>";
        }
        else{
            echo "notconsider";
            echo "<br><br>";

        }
    }

}

class hero extends car{
    public $price;
}

class luna extends car{
    public $avg;
}


$c1=new car('swift',2014,45,19);
$c1->get();
$c2=new car('dzire',2014,45,5);
$c2->get();

$c3=new hero('i10',2012,46,4);
$c2->get();



?>