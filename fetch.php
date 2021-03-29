<?php
$dbconnect = mysqli_connect("localhost", "root", "", "stackoverflow_project")  or die(mysqli_error($con)); 
if($dbconnect == TRUE){
    echo "ok";
}
else{

echo"success";
}
?>

