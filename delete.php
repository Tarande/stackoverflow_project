<?php
$dbconnect = mysqli_connect("localhost", "root", "", "stackoverflow_project")  or die(mysqli_error($con)); 
if($dbconnect == TRUE){
    echo "ok";
}
else{

echo" no success";
}
$id = $_GET['id'];
$query = "DELETE FROM question_table WHERE id = '$id '";
$data = mysqli_query($dbconnect,$query);
if($data == TRUE){
    echo "RECORD DELETD";
}
else{
    
    echo"NOT UPDATED";
}

?>