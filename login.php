<?php
$server = "localhost";
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'signupdata.php';
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from users where email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("location: index4.php");

    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>










<html>
    <head>
        <title> crud operations</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initialscale=1.0"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>           
         <link href="stylesheet.css" rel="stylesheet" type="text/css">
     
    </head>
    <body>
        <?php
        if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

    <div class="navbar-fixed-top">
    <div id="yo">
    <h2>  <span class="glyphicon glyphicon-globe"> </span> STACKOVERFLOW</h2> 
    </div>
    </div>
       <br>  <br>  <br>   <br>  <br>  <br>      <br>  <br>  <br>   <br> 

       <div>
     <form action="logindata.php"  method="post">
         <h3> STACKOVERFLOW LOGIN </h3>
         <br>
    <label for="text">E-mail:</label><br>
    <input type="email" class="input-field" placeholder="enter your email to log in" id="email" name="email">
    <br> 
    <br>
    <label for="text">Password:</label><br>
    <input type="password" class="input-field" placeholder="enter your password" id="password" name="password">
    <br> 
    <br>
    <button type="submit" form="form1" value="Submit" >Login</button>
    </form>  
           </div>
    </body>
     <br>  <br>  <br>   <br> <br>  <br>  <br>   

       
<div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> Stackoverflow2.0.com</a>
  </div>
</html>