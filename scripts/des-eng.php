<?php
            $con=mysqli_connect("localhost","root","","wiki");
            mysqli_set_charset($con,"utf8");

            $id=$_GET['id'];

            $query=mysqli_query($con,"select opis_eng from opisy where id like '".$id."'");

            if(mysqli_num_rows($query)>0){
              while($arr=mysqli_fetch_array($query)){
                  echo "<label>".$arr['opis_eng']."<label>";
                }
              }

            mysqli_close($con);
          ?>
