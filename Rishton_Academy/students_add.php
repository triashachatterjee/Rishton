<?php
$link= mysqli_connect("localhost", "root", "", "rishton");

if($link===false){
        die("Error! Connection Failed");
}

if(isset($_POST['submit'])){
    $studentID=$_POST['studentID'];
    $studentname=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $class=$_POST['classname'];
    $medical=$_POST['medical'];

    

    $sql="INSERT INTO addstudents(studentID, studentname, email, address, gender, classname, medical) VALUES ('$studentID','$studentname','$email','$address','$gender', '$class','$medical')";

    if (mysqli_query($link,$sql)){
        echo "New record created successfully";
    }else{
        echo "Error adding record";
    }

    $link->close();


}




?>