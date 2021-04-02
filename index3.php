<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>           
         <link href="stylesheet.css" rel="stylesheet" type="text/css">
         <title> CRUD OPERATIONS </title>
    </head>
    
    <body>
    <div class="navbar-fixed-top">    
    <div id="yo" class="img">
    <h2> <span class="glyphicon glyphicon-globe"></span>STACKOVERFLOW</h2>  
    </div>
    </div>  
        <br> <br> <br> <br> <br> <br>  <br> <br> <br>
     
     <!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Open modal
</button>
     <div id="records_contant">
     </div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">STACKOVERFLOW WITH AJAX</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          
          
          <div id="yo3">
        <form action="database2.php" id="myform" method="post">
    <label for="text">TITLE</label>
    <h5> Be specific and imagine you are re asking a question to another person</h5>
    <input type="text" id="QuestionTitelText" class="input-field taran" placeholder="enter your text" name="Title"/>
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
   
    
    <button type="submit" onclick="parseJSON" type="button"  id="formSubmitbutton"  class="btn glyphicon glyphicon-envelope"> post your question </button>
   
     </form>  
     </div>
     </div>
          
          
          
          
          
          
          
          
          
          
          
      
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" id="formSubmitbutton" class="btn btn-danger" data-dismiss="modal" onclick="database2.php" >save</button>
        <button type="button"  class="btn btn-danger" data-dismiss="modal">Close</button>
            
   
    </div>
  </div>
</div>


   
        
        <table border="2">
            <tr>
               
           <th> ID </th>
           <th> TITLE</th>
           <th> BODY </th>
           <th>TAG </th>
           <th> CREATED ON </th>
           <th> UPDATE DATA </th>   
           <th> DELETE data </th>
               
            </tr>
      <?php
     include("fetch.php");
     $query = "SELECT * FROM question_table"; // to fetch all the values 
     $data = mysqli_query($dbconnect ,$query); // for executing the fuctions
     $total = mysqli_num_rows($data);         // to fetch no. of rows 
     if($total!=0)
         {
       while($result=mysqli_fetch_assoc($data))
               {
       
           echo "   
               <tr> 
           <td>".$result['id']."</td>
            <td>".$result['Title']."</td>
            <td>".$result['Body']."</td>
            <td>".$result['Tag']."</td>
            <td>".$result['CreatedOn']."</td>
            <td> <a href ='delete_update_both1.php?id=$result[id] & Title=$result[Title] & Body=$result[Body] & Tag=$result[Tag] & CreatedOn=$result[CreatedOn]'>UPDATE</td>
            <td> <a href ='delete.php?id=$result[id]'>DELETE</td>
            
                
           
           
           </tr>";
           
       }
     }
     else{
         echo"no records found";
     }
?>
        </table>
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
