<?php
$link= mysqli_connect("localhost", "root", "", "rishton");

if($link===false){
        die("Error! Connection Failed");
}

if(isset($_POST['submit'])){
    $parentID=$_POST['parentID'];
    $parent_name=$_POST['parent_name'];
    $parent_address=$_POST['parent_address'];
    $parent_email=$_POST['parent_email'];
    $parent_phone=$_POST['parent_phone'];
    
    

    $sql="INSERT INTO addparents(parentID, parent_name, parent_address, parent_email, parent_phone) VALUES ('$parentID','$parent_name','$parent_address','$parent_email','$parent_phone')";

    if (mysqli_query($link,$sql)){
        echo "New record created successfully";
    }else{
        echo "Error adding record";
    }

    $link->close();


}




?>