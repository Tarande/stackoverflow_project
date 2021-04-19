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
    <div class="navbar-fixed-top">
    <div id="yo">
    <h2>  <span class="glyphicon glyphicon-globe"> </span> STACKOVERFLOW</h2> 
    </div>
    </div>
       <br>  <br>  <br>   <br>  <br>  <br>      <br>  <br>  <br>   <br> 

       <div>
     <form action="database5.php"  method="post">
    <label for="text">email</label><br>
    <input type="email" class="input-field" placeholder="enter your email to log in" id="phone" name="phone">
    <br> 
    <br>
    <label for="text">password</label><br>
    <input type="password" class="input-field" placeholder="enter your password" id="password" name="password">
    <br> 
    <br>
    <button type="submit" form="form1" value="Submit" onclick="addRecords()">Login</button>
    </form>  
           </div>
    </body>
     <br>  <br>  <br>   <br> <br>  <br>  <br>   

       
<div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> Stackoverflow2.0.com</a>
  </div>
</html>