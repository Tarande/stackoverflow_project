<?php
session_start();
if(isset($_SESSION['username'])){
echo"welcome" .$_SESSION ['username'];
echo "<br> your favourite category is".$_SESSION['favcat'];
echo"<br>";
}
else{
    echo 'please login to continue';
}
?>