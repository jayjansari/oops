<?php
class student{
    public $id;
    public $name;
    public $maths;
    public $sci;
    public $hin;

    function __construct($id,$name,$maths,$sci,$hin)
    {
        $this->i=$id;
        $this->n=$name;
        $this->m=$maths;
        $this->s=$sci;
        $this->h=$hin;
        $this->t=$maths+$sci+$hin;
        $this->p=$this->t/3;



    }
    function __destruct()
    {
        echo "student number is {$this->i}<br>
        student name is {$this->n}<br>
        student maths mark is {$this->m}<br>
        student science mark is {$this->s}<br>
        student hindi mark is {$this->h}<br>
        student total mark is {$this->t}<br>
        student total percentage is {$this->p}<br><br>";
        if($this->t>=150){
            echo "pass";
            echo "<br>";
        }
        else{
            echo "fail<br>";
        }

        if($this->t>=150){
            echo "a+";
            echo "<br>";
        }
        else{
            echo "d<br>";
        }

        

    }

}
$s1=new student(1,'jay',55,48,45);
$s2=new student(2,'riya',50,40,60);
$s3=new student(3,'ravi',80,80,50);


?>