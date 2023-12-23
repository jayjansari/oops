<?php
class result{
    public $id;
    public $name;
    public $ma;
    public $hi;
    public $ss;
    
 function __construct($id,$name,$ma,$hi,$ss)
 {
    $this->i=$id;
    $this->n=$name;
    $this->m=$ma;
    $this->h=$hi;
    $this->s=$ss;
    $this->t=$ma+$hi+$ss;


 }
 function get()
 {
    echo "id no is {$this->i}<br>
    student name is {$this->n}<br>
    math mark is {$this->m}<br>
    hindi mark is {$this->h}<br>
    ss mark  is {$this->s}<br>
    total mark  is {$this->t}<br><br>";
 }



}

class sir extends result{
    public $total;
}

$s1=new result(1,'jay',45,45,44);
$s1->get();

$s2=new sir(2,'sir',45,45,44);
$s2->get();

?>
