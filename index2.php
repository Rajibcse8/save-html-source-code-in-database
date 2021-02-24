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

  <?php   
        $conn=mysqli_connect('localhost','root','', 'phpcrud');//  mysql connection function
        $cid=$_GET['id'];
        

        $q1="SELECT * FROM info WHERE id='$cid' ";
        $q2=mysqli_query($conn,$q1);
        $q3=mysqli_fetch_assoc($q2);
         { 
      
           
      
  ?>

    <h1 class="card-title"><?php echo $q3['name'];  ?></h1>
    <p class="card-text">REG NO IS <?php echo $q3['regno'];  ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
  
  </div>
</div>
    <?php  } ?>


    <?php
    
    if(isset($_POST['add'])){
    $url = $_SERVER['REQUEST_URI'];
    
      $url='http://127.0.0.1'.$url;

      echo $url;
      $data = file_get_contents($url);
      
      
     
    }
?>
         
    



</html>








