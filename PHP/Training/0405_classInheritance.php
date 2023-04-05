<?php
class People
{
    protected $name;

    public function setName($param_name)
    {
        $this->name = $param_name;
    }

    public function peoplePrint()
    {
        echo "Name: ".$this->name."\n";
    }
}

class Student extends People
{
    protected $id;

    public function setid($param_id)
    {
        $this->id = $param_id;
    }

    public function studentPrint()
    {
        parent::peoplePrint();
        echo "ID : ".$this->id."\n";
    }
}

$obj_student = new Student;
$obj_student->setName( "이름" );
$obj_student->setid( "아이디" );
$obj_student->studentPrint();

?>