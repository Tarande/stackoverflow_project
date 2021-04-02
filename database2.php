
<?php
$dbconnect = mysqli_connect("localhost", "root", "", "stackoverflow_project")  or die(mysqli_error($con)); 
mysqli_select_db($dbconncet,'stackoverflow_project');
 
extract($_POST);
if(isset($_POST['submit'])){
    
    $q = "insert into question_table(Title , Body , Tag) values ('$Title' , '$Body' , '$Tag')";
    $query = mysqli_query($dbconnect,$q);
    header('location:index3.php');
    
}

?>
