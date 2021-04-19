<?php

$mysqli = new mysqli("localhost","root","","stackoverflow_project");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

extract($_POST);

try{
    
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password']))
    {   
        
        $sql = "INSERT INTO user(name , email , phone , password) VALUES ('$name', '$email', '$phone', '$password')";

        if ($mysqli->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
            
        
    }
        
    else{     
        echo 'outside';   
    }
} catch (Exception $ex) {
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Exception thrown in $file on line $line: [Code $code]
    $message";
}

$mysqli -> close();    

?>
