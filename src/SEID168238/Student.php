<?php

namespace App;


class Student
{
    public $name;

    public $studentID;


    public function setData($postDataArray)
    {

        if(array_key_exists("Name",$postDataArray)) {
            $this->name = $postDataArray["Name"];
        }
        if(array_key_exists("StudentID",$postDataArray)) {
            $this->studentID = $postDataArray["StudentID"];
        }
    }


    public function getData(){

        $name = $this->name;
        $studentID = $this->studentID;

        $varList = array("name","studentID");
        $studentInfoArray  =  compact($varList);

        return $studentInfoArray;


    }
}

