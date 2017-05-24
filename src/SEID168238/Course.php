<?php


namespace App;


class Course
{
    public $bangla;
    public $english;
    public $math;
    public $ict;

    public function setData($postDataArray)
    {
        if (array_key_exists("Bangla", $postDataArray))
        {
            $this->bangla = $postDataArray['Bangla'];
        }
        if (array_key_exists("English", $postDataArray))
        {
            $this->english = $postDataArray['English'];
        }
        if (array_key_exists("Math", $postDataArray))
        {
            $this->math = $postDataArray['Math'];
        }
        if (array_key_exists("ICT", $postDataArray))
        {
            $this->ict = $postDataArray['ICT'];
        }
    }

    public function getData(){

        $bangla = $this->bangla;
        $english = $this->english;
        $math = $this->math;
        $ict = $this->ict;

        $varList = array("bangla","english","math","ict");
        $courseInfoArray  =  compact($varList);

        return $courseInfoArray;


    }
}