   <?php
 include ("fetch.php");
 error_reporting(0);
 $id = $_GET['id'];
 $Title =  $_GET['Title'];
 $Body = $_GET['Body'];
 $Tag  = $_GET['Tag'];
 $CreatedOn = $_GET['CreatedOn'];
 
 ?>


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
         <ul class="nav navbar-nav navbar-right">
             <li><a href="update_question1.php"><span class="glyphicon glyphicon-info-sign"></span> UPDATE </a> </li>
                    <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> ENTER </a> </li>
                    <li><a href=index1.php><span class="glyphicon glyphicon-search"></span> FETCH</a> </li>
                    <li><a href="DELETE1.php"><span class="glyphicon glyphicon-trash"></span> DELETE</a> </li>
                    
                </ul>
   
    <div id="yo" class="img">
            <h2>        <span class="glyphicon glyphicon-globe"></span>STACKOVERFLOW UPDATE</h2> 
            
            
            
            
            
    
        
    </div>
    </div>                
    <div  id="yo1">
    <div>
    <p> ASK A PUBLIC QUESTION </p>
    </div>
    <div id="yo3">
        <form action="update_question.php" method="post">
            
    <label for="text">INPUT ID TO UPDATE</label>
    <h5> Update the question please</h5>
    <input type="text" value="<?php echo"$id"?>" id="changeid" class="input-field taran" placeholder="enter your text" name="id"/>
    <br><br>
            
            
            
    <label for="text">TITLE TO CHANGE</label>
    <h5> Be specific and imagine you are re asking a question to another person</h5>
    <input type="text"  value="<?php echo"$Title"?>" id="QuestionTitelText" class="input-field taran" placeholder="enter your text" name="Titletochange"/>
      <br><br>
    <label for="text">BODY</label>
    
    <h5> Include all the information someone would need to answer your question </h5><br>
    
    <input type="text" value="<?php echo"$Body"?>" class="input-field" placeholder="enter your text for conformation" id="taran1" name="Bodytochange"><br>
    <br> 
    <br>
    <label for="taran3">TAGS</label><br>
    
    <input type="text" value="<?php echo"$Tag"?>" class="input-field" placeholder="enter your text" id="taran3" name="Tagtochange">
    <br> 
    <br>
   
    
    <button type="submit" onclick="parseJSON()" type="button"  id="formSubmitbutton"  class="btn glyphicon glyphicon-envelope"> post your question </button>
   
     </form>  
     </div>
     </div>
     <script>
       function parseJSON() {        
        var titel = document.getElementById('QuestionTitelText').value;           
        
        var body = document.getElementById('taran1').value;    
        
         
        var tag = document.getElementById('taran3').value;
        
        var myobj2;
        myobj2 = {"titel":titel, "body":body, "tag":tag};
        console.log(myobj2);      
      }
       
       
       
       
       
            
            
           
            /* var queTitelEle = document.getElementById('QuestionTitelText').value;
             queTitelEle = JSON.parse(queTitelEle);
             alert(data[0]['id']);
             console.log(queTitelEle);
           
            
            
            var Titel2Value = document.getElementById('taran1').value;
            Titel2Value  = JSON.parse( Titel2Value);
            console.log("body:"+Titel2Value);
            
            var tags = document.getElementById("taran3").value;
            tags  = JSON.parse(tags);
            console.log("tags:"+tags);*/
            
           
            
            
     </script>
     
     
     
    
    </body>
</html>
