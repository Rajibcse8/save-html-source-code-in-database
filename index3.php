

<?php 

     
   
/*   $d1='http://127.0.0.1/phpcrud/index2' ;
   $d2='.php?id=2';
   $d3=$d1.$d2;
   $d3=$d3;
   
   $data = file_get_contents('http://127.0.0.1/phpcrud/index2.php?id=1');
   $dat2 = file_get_contents($d3);  
   $dat2=$dat2.$data1;
   echo $dat2;

*/


//$d='<form action="" method="POST">
//<input type="submit" name="add" value="ADD Record">       
//</form>';
//$d=str_replace($d,"Hello world!");

//$d=$d.replace("hello world");

//echo $d;
            $conn=mysqli_connect('localhost','root','', 'phpcrud');

            $code = "SELECT code FROM new  WHERE user_id='0' ";
            $code_result = mysqli_query($conn,$code);
            $row = mysqli_fetch_assoc($code_result);
            $data2=($row['code']);
            echo $data2;
    

?>
