<?php
abstract class bike{
    public $name;
    public $model;

    function __construct($name,$model)
    {
        $this->n=$name;
        $this->m=$model;

    }
    abstract function __destruct();

}
class tvs extends bike{
    function __destruct(){
        echo "bike name is {$this->n}<br>
        bike model is {$this->m}<br><br>";
    }
}

class hero extends bike{
    function __destruct(){
        echo "bike name is  {$this->n}<br>
        bike model is {$this->m}<br><br>
        ";
    }
}
$b1=new tvs('jupiter',2012);


$b2=new hero('passion',2012);


?>
