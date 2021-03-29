<?php
$dbconnect = mysqli_connect("localhost", "root", "", "stackoverflow_project")  or die(mysqli_error($dbconnect));
  $idtochange = $_POST['id'];
  $Titletochange = $_POST['Titletochange'];
  $Bodytochange = $_POST['Bodytochange'];
  $Tagtochange = $_POST['Tagtochange'];
  $sql = mysqli_query($dbconnect , "UPDATE question_table SET Title='$Titletochange' ,Body ='$Bodytochange' ,Tag = '$Tagtochange'   WHERE id='$idtochange'");
  if($sql == TRUE){
      echo"updated";
  }
  else{
 echo " not updated";
  }




?>