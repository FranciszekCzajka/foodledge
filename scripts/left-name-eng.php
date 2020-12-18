<?php
  $con=mysqli_connect("localhost","root","","wiki");
  mysqli_set_charset($con,"utf8");

  $id=$_GET['id'];

  $query=mysqli_query($con,"select name_eng from artykuly where id like '".$id."'");

  if(mysqli_num_rows($query)>0){
    while($arr=mysqli_fetch_array($query)){
      echo "<label>".$arr['name_eng']."</label>";
      }
    }
  mysqli_close($con);
?>
