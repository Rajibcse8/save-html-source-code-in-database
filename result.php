<?php 
    
   $conn=mysqli_connect('localhost','root','', 'phpcrud');
    
   if(isset($_POST['all'])){
    
   

    $code = "SELECT code FROM new  WHERE user_id='0' ";
    $code_result = mysqli_query($conn,$code);
    $row = mysqli_fetch_assoc($code_result);
    $data2=($row['code']);
    echo $data2;
    
   }

   if(isset($_POST['idsearch'])){
    
     $id=$_POST['sid'];
     
     if(!empty($id)){

        $code = "SELECT code FROM new  WHERE user_id='$id' ";
        $code_result = mysqli_query($conn,$code);
        $rowcount=mysqli_num_rows($code_result);
        if($rowcount>0){
        $row = mysqli_fetch_assoc($code_result);
        $data2=($row['code']);
        echo $data2;
       }

       else{
           echo '<h1>'.'ENTER VALID ID'.'</h1>'  ;
       }

     }
     else echo"PLESE ENTER ID";



     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">

  
    <h1 class="card-title">Rajib5</h1>
    <p class="card-text">REG NO IS 1233445</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
  
  </div>
</div>
    

             
    



</html>









  
 }
?>