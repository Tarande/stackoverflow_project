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
    Open modal
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
        <form action="database2.php" id="myform" method="post">
    <label for="text">TITLE</label>
    <h5> Be specific and imagine you are re asking a question to another person</h5>
    <input type="text" id="QuestionTitelText" class="input-field taran" placeholder="enter your text" name="QuestionTitelText">
      <br><br>
    <label for="text">BODY</label>
    
    <h5> Include all the information someone would need to answer your question </h5><br>
    
    <input type="text" class="input-field" placeholder="enter your text for conformation" id="taran1" name="taran1"><br>
    <br> 
    <br>
    <label for="taran3">TAGS</label><br>
    
    <input type="text" class="input-field" placeholder="enter your text" id="taran3" name="taran3">
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
        <form action="backend1.php" id="myform" method="post">
            
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

        
        
        <br>  
        <div>
     <h2> ALL RECORDS </h2>  
     <div id="records_content">
         
     </div>
      
        </div>
        <script type="text/javascript">
                 
            $(document).ready(function(){
              readRecords();
                
            });
            
            
            
            function readRecords(){
                var readrecord = "readrecord";
                $.ajax({
                  url:"backend1.php",
                  type:'post',
                  data:{readrecord : readrecord},
                  success:function(data,status){
                      $('#records_content').html(data);
                      
                  }
                    
                    
                });
            }
        
            function addRecords(){
                var Title = $('#QuestionTitelText').val();
                var Body = $('#taran1').val();
                var Tag = $('#taran3').val();
                
                $.ajax({
                  url:"backend1.php",
                  type:'post',
                  data:{
                      Title:Title,
                      Body: Body,
                      Tag:Tag
                      
                  },
                  success:function(data,status){
                      readRecords();
                  }
                    
                    
                });
                
            }
            
            function DeleteUserData(deleteid){
                var conf = confirm("are you sure");
                if(conf === true){
                    $.ajax({
                      url:"backend1.php",
                      type:'post',
                      data:{
                          deleteid:deleteid
                      },
                      success:function(data,status){
                          readRecords();
                          
                      }
                        
                    });
                    
                    
                }
             
            } 
            function GetUserDetails(id){
                $('#hidden_user_id').val();
                $.post("backend1.php",{
                    id:id
                    
                },function(data,status){
                    var user = JSON.parse(data);
                    $('#update_Title').val(user.Title);
                    $('#update_Body').val(user.Body);
                    $('#update_Tag').val(user.Tag);
                }
                        );
                $('#update_user_data').modal("show");
            }
            
            
            
               function updatequestiondetails(){
                var Title = $('#update_Title').val();
                var Body = $('#update_Body').val();
                var Tag = $('#update_Tag').val();
                var hidden_user_id = $('#hidden_user_id').val();
                
                $.post("backend1.php",{
                   
                    hidden_user_id:hidden_user_id,
                    Title:Title,
                    Body:Body,
                    Tag:Tag
                     },
                     function (data,status){
                     $('#update_user_data').modal("hide");  
                      readRecords();
                     }
                          );
                          }
            
            
            
            
            </script>       
        
    </body>
    
</html>