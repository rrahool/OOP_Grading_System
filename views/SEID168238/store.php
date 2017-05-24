<?php

//$_POST   Form Data are waiting here

require_once ("../../vendor/autoload.php");



$objStudent = new \App\Student();
$objCourse = new \App\Course();

$objStudent->setData($_POST);

$objCourse->setData($_POST);

$studentArr = $objStudent->getData();
$courseArr = $objCourse->getData();



$name = $studentArr["name"];
$studentID = $studentArr["studentID"];
$bangla = $courseArr["bangla"];
$english = $courseArr["english"];
$math = $courseArr["math"];
$ict = $courseArr["ict"];


$data2write = <<<CONTENT
*************************************
NAME: $name
StudentID: $studentID
*************************************
SUBJECT         MARKS         GRADE
*************************************

CONTENT;

file_put_contents("result.txt",$data2write,FILE_APPEND);




file_put_contents("result.txt","Bangla"."           ".$bangla. printSpace(strlen($bangla)) .mark2Grade($bangla) ."\n",FILE_APPEND);
file_put_contents("result.txt","English"."          ".$english. printSpace(strlen($english)).mark2Grade($english) ."\n",FILE_APPEND);
file_put_contents("result.txt","Math"."             ".$math. printSpace(strlen($math)) .mark2Grade($math)."\n",FILE_APPEND);
file_put_contents("result.txt","ICT"."              ".$ict.printSpace(strlen($ict)).mark2Grade($ict) ."\n",FILE_APPEND);




function printSpace($len){
    $space = "";
    for($i=1; $i<= 13 - $len; $i++)
        $space .= " ";

    return $space;
}


function mark2Grade($mark){


    if($mark>=80) return "A+";
    else if($mark>=70) return "A";
    else if($mark>=60) return "A-";
    else if($mark>=50) return "B";
    else if($mark>=40) return "C";
    else return "F";

}


header("Location: view.php");

