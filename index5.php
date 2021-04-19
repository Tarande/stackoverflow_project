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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
    login 
   </button> 
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
        <form action="database5.php"  method="post">
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
        
        
        
        
        
         <!-- The Modal for updation -->
         
<div class="modal fade" id="update_user_data">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">stackoverflow Q edit</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="backend1.php" id="myform1" method="post">
            
    <label for="update_Title">TITLE</label>
    <h5> Be specific and imagine you are re asking a question to another person</h5>
    <input type="text" id="update_Title" class="input-field" placeholder="enter your text" name="update_Title">
      <br><br>
      
    <label for="update_Body">BODY</label>
    <h5> Include all the information someone would need to answer your question </h5><br>
    <input type="text" id="update_Body" class="input-field" placeholder="enter your text for conformation"  name="update_Body"><br>
    <br> 
    <br>
    <label for="update_Tag">TAGS</label><br>
    <input type="text" id="update_Tag" class="input-field" placeholder="enter your text"  name="update_Tag">
    <br> 
    <br>
    </form>  
     
      </div>
  
      <!-- Modal footer -->
      <div class="modal-footer">
          <button type="button" onclick="updatequestiondetails()" class="btn btn-danger" data-dismiss="modal">save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="hidden" name="hidden_user_id" id="hidden_user_id">
      </div>

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
                
                
                $.post("database5.php",
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