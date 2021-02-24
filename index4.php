<?php 


   $conn=mysqli_connect('localhost','root','', 'phpcrud');
    

    $q1="SELECT  id  FROM info WHERE status='0' ORDER BY id ASC  ";
    $q2=mysqli_query($conn,$q1);
    
    $rowcount2=mysqli_num_rows($q2);
        if($rowcount2>0){

    

   while($result=mysqli_fetch_assoc($q2)){
      
       $url='http://127.0.0.1/phpcrud/index2.php?id=';
       $id=(string)($result['id']);
       $suburl=$url.$id;
       $data = file_get_contents($suburl);


       $r1= $q1="SELECT  *  FROM new WHERE user_id='0'   ";
       $r2=mysqli_query($conn,$r1);
       $rowcount=mysqli_num_rows($r2);
       
       if($rowcount==0){

             $insert_code= $query=  "INSERT INTO new(user_id,code) VALUES('0','$data')";
             $insert_res=mysqli_query($conn,$insert_code);
             $insert_code1= $query=  "INSERT INTO new(user_id,code) VALUES('$id','$data')";
             $insert_res1=mysqli_query($conn,$insert_code1);
             $sql = "UPDATE info SET status='1' WHERE id='$id' ";
             $res_sql=mysqli_query($conn,$sql);



       }

       else  {

        $row1="SELECT  *  FROM new WHERE user_id='$id'   ";
        $row2=mysqli_query($conn,$row1);
        $rowcount1=mysqli_num_rows($row2);

         if($rowcount1==0){
            $code = "SELECT code FROM new  WHERE user_id='0' ";
            $code_result = mysqli_query($conn,$code);
            $row = mysqli_fetch_assoc($code_result);
            $data2=($row['code']);

            $data2=$data2.$data;
             
            $updatecode = "UPDATE new SET code='$data2' WHERE user_id='0' ";
            $result_update=mysqli_query($conn,$updatecode);
            $insert_code1= $query=  "INSERT INTO new(user_id,code) VALUES('$id','$data')";
            $insert_res1=mysqli_query($conn,$insert_code1);
            $sql = "UPDATE info SET status='1' WHERE id='$id' ";
            $res_sql=mysqli_query($conn,$sql);



        
           }

         else continue ;
   
              

       }

        
       
   
    }

    echo '<h1>'.'DATA ADDED SUCCESSFULLY :) '.'</h1>';
}

else echo "NOTHING TO ADD INTO DATABASE  :( ";
  

?>