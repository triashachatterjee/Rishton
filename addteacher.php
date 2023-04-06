<?php
$link= mysqli_connect("localhost", "root", "", "rishton");

if($link===false){
        die("Error! Connection Failed");
}

if(isset($_POST['submit'])){
    $teacherID=$_POST['teacherID'];
    $teacher_name=$_POST['teacher_name'];
    $teacher_address=$_POST['teacher_address'];
    $teacher_phone=$_POST['teacher_phone'];
    $teacher_salary=$_POST['teacher_salary'];
    $teacher_background_check=$_POST['teacher_background_check'];
    
    

    $sql="INSERT INTO addteacher(teacherID, teacher_name, teacher_address, teacher_phone, teacher_salary, teacher_background_check ) VALUES ('$teacherID','$teacher_name','$teacher_address','$teacher_phone','$teacher_salary','$teacher_background_check')";

    if (mysqli_query($link,$sql)){
        echo "New record created successfully";
    }else{
        echo "Error adding record";
    }

    $link->close();


}




?>