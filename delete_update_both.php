  

<html>
    <title>
    <head>fetch data from database </head>
    </title>
    <body>
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
    </body>
 </html>
