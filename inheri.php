<?php
class jay{
    public $name;
    public $member;

    function set($name,$member,$car)
    {
        $this->n=$name;
        $this->m=$member;
        $this->c=$car;
        $this->t=$name+$member+$car;

        

    }
    function get(){
        echo "name is {$this->n}<br>
        member is {$this->m}<br>
        car is {$this->c}<br>
       total car is {$this->t}<br>";
      
       if($this->t<96){
        echo "pass";
    }
    else{
        echo "fail";
    }
    
    }
} 
class riya extends jay{
    public $car;

}

$m1=new jay();
$m1->set(45,4,45);
$m1->get();
?>