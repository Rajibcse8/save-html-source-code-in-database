<?php

   $conn=mysqli_connect('localhost','root','', 'phpcrud');//  mysql connection function
   
   if(isset($_POST['btn'])){

      $name = $_POST['name'];  
      $regno =$_POST['regno'];
   
       
      if(!empty($name) && !empty($regno)){

          $query=  "INSERT INTO info(name,regno) VALUES('$name','$regno')";
          if($query)
          $create_query=mysqli_query($conn,$query);
      }   
    }
   
   ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  
   
   
   <title>PHP_CRUD</title>
  </head>
  <body>

  <div class="container m-5 p-4">

  <form action=""  method="Post" class="d-flex justify-content-around">
  
      <input class="form-control" type="text" name="name"  placeholder="Enter  Name :" >

      <input class="form-control" type="number" name="regno"  placeholder="Enter  registration no :" >

     <input type="submit" name="btn" value="submit"  class="btn btn success" > 
     
  </form>

     
   
   <form action="index4.php" method="POST">

      <input type="submit" name="addall" value="addall" class="btn btn-primary">
   
   </form>

   <form action="result.php"  method="POST">
           
           <input class="form-control" type="number" name="sid"  placeholder="Enter  ID :" > 
           <input type="submit" value='Enter' class="btn btn-info" name="idsearch">
           <input type="submit" value='See all' class="btn btn-info" name="all">
   
   </form>  
  
  <div class="cointainer">
     
     <table class="table table-bordered">
     <tr>
     <th>std id</th>
     <th>std name</th>
     <th>reg</th>
     <th></th>
     <th></th>
     
     </tr> 

    
     <?php


     $query ="SELECT * FROM info";
     $read_q=mysqli_query($conn,$query);

     if($read_q->num_rows>0){
     while ($rd =mysqli_fetch_assoc($read_q)){
       $sid=$rd['id'];
       $sn=$rd['name'];
       $r=$rd['regno'];

      ?>
     <tr>
        <td><?php echo $sid;  ?></td>
        <td><?php echo $sn;  ?></td>
        <td><?php  echo $r;  ?> </td>
        <td> <a href="index2.php?id=<?php echo $rd['id']; ?>" class="btn btn-primary">View</a> </td>
        <td></td>

     </tr>
         <?php }} ?>
     </table>
      
  </div>
       
       

  
  
   


 </div>
  

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>   
  </body>
  
  </html>
  