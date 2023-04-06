<?php
$link= mysqli_connect("localhost", "root", "", "rishton");

if($link===false){
        die("Error! Connection Failed");
}

if(isset($_POST['submit'])){
    $classID=$_POST['classID'];
    $studentID=$_POST['studentID'];
    $teachersID=$_POST['teachersID'];
    $classname=$_POST['classname'];
    $classcapacity=$_POST['classcapacity'];
    
    

    $sql="INSERT INTO addclass(classID, studentID, teachersID, classname, classcapacity) VALUES ('$classID','$studentID','$teachersID','$classname','$classcapacity')";

    if (mysqli_query($link,$sql)){
        echo "New record created successfully";
    }else{
        echo "Error adding record";
    }

    $link->close();


}




?>