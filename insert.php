<?php
  $Title = $_POST['Title'];
  $Body = $_POST['Body'];
  $Tag = $_POST['Tag'];
  

$dbconnect = mysqli_connect("localhost", "root", "", "stackoverflow_project")  or die(mysqli_error($con)); 
$sql = mysqli_query($dbconnect , "insert into question_table(Title , Body , Tag) values ( ' $Title', '$Body' , '$Tag')");
echo"inserted";
?>