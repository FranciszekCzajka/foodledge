<?php
  $con=mysqli_connect("localhost","root","","wiki");
  mysqli_set_charset($con,"utf8");

  $id=$_GET['id'];

  $query=mysqli_query($con,"select id, name_eng from food where id like '".$id."'");

  if(mysqli_num_rows($query)>0){
    while($arr=mysqli_fetch_array($query)){
      echo "<img class='photo' src='images/".$id.".png' alt=".$arr['name_eng'].">";
      }
    }
  mysqli_close($con);
?>
