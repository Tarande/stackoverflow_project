<?php
$mysqli = new mysqli("localhost","root","","stackoverflow_project");
echo "success";




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
    <div class="navbar-fixed-top">
    <div id="yo">
    <h2>  <span class="glyphicon glyphicon-globe"> </span> STACKOVERFLOW</h2> 
    </div>
    </div>
        <br>  <br>  <br>  <br>  <br>  <br> 
    <div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    signup 
   </button> 
        <a href="login.php"> <button type="button" class="btn btn-primary"> login </button> </a>
        
        <!-- The Modal -->
  <div class="modal" id="myModal">
   <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">stackoverflow</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <form action="signupdata.php"  method="post">
    <label for="text">Name</label>
    <input type="text" id="name" class="input-field taran" placeholder="enter your name" name="name">
      <br><br>
    <label for="text">email</label>
    <input type="email" class="input-field" placeholder="enter your email id"  id="email" name="email"><br>
    <br> 
    <br>
    <label for="text">Phone</label><br>
    <input type="number" class="input-field" placeholder="enter your phone no." id="phone" name="phone">
    <br> 
    <br>
    <label for="text">password</label><br>
    <input type="password" class="input-field" placeholder="enter your password" id="password" name="password">
    <br> 
    <br>
    </form>  
     
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" onclick="addRecords()" class="btn btn-danger" data-dismiss="modal">save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
   
    </div>
  </div>
</div>
    </div> 
        
        
        
        
        
      
      
<script type="text/javascript">
function addRecords(){
                var name = $('#name').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var password = $('#password').val();
                
                
                $.post("signupdata.php",
                    {
                        name:name,
                        email:email,
                        phone:phone,
                        password:password
                    },
                    function (data,status){
                        
                    }
                );
                
            }


</script>

</body>
 <br>  <br>  <br>  <br>  <br>  <br>    <br>  <br>  <br>  <br>  <br>   <br>  <br>  <br>  <br>   <br>  <br>  <br>  <br> 
<div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> Stackoverflow2.0.com</a>
  </div>
</html>