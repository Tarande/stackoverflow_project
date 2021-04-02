<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>        
        <title>login page</title>
         <link href="stylesheet.css" rel="stylesheet" type="text/css">
         <style>
            input
            [type=text]{
             transition:0.5s;
             
            }
            input
            [type=text]:focus{
                border-color:dodgerblue;
                box-shadow:  0 0 8px 0  dodgerblue;            
            }
        </style>
       
  </head>
     
 <body>
     
     
     <div class="navbar-fixed-top">
   
    <div id="yo" class="img">
            <h2> STACKOVERFLOW</h2> 
    
        
    </div>
    </div>                
    <div  id="yo1">
    <div>
    <p> ASK A PUBLIC QUESTION </p>
    </div>
    <div id="yo3">
        <form action="database2.php" id="myform" method="post">
    <label for="text">TITLE</label>
    <h5> Be specific and imagine you are re asking a question to another person</h5>
    <input type="text" id="QuestionTitelText" class="input-field taran form-control" placeholder="enter your text" name="Title"/>
      <br><br>
    <label for="text">BODY</label>
    
    <h5> Include all the information someone would need to answer your question </h5><br>
    
    <input type="text" class="input-field" placeholder="enter your text for conformation" id="taran1" name="Body"><br>
    <br> 
    <br>
    <label for="taran3">TAGS</label><br>
    
    <input type="text" class="input-field" placeholder="enter your text" id="taran3" name="Tag">
    <br> 
    <br>
   
    
    <button type="submit" onclick="database2.php" type="button" name="submit"  id="formSubmitbutton"  class="btn glyphicon glyphicon-envelope"> post your question </button>
   
     </form>  
     </div>
     </div>
     
     <script type="text/javascript">
       $(document).ready(function(){ // jquery function --> means until the page doesnot load  completely it does not work
           var form = $('#myform');
           $('#formsubmitbutton').click(function(){
               $.ajax({
                   url: form.attr("action"),
                   type:'post',
                   data : $("#myform input").serialize(),
                   success:function(data){
                       console.log(data);
                   }
                   
               });
               
           });
           
       });  

</script> 
 
    </body>
</html>

