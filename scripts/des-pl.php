<?php
  $con=mysqli_connect("localhost","root","","wiki");
  mysqli_set_charset($con,"utf8");

  $id=$_GET['id'];

  $query=mysqli_query($con,'select round(kcal100G, 1) as kcal100G, round(proteins100G, 1) as proteins100G, round(carbohydrates100G, 1) as carbohydrates100G, round(sugarsInIt100G, 1) as sugarsInIt100G, round(fats100G, 1) as fats100G, round(saturatedFats100G, 1) as saturatedFats100G, round(fiber100G, 1) as fiber100G, round(salt100G, 1) as salt100G, round(kcalPiece, 1) as kcalPiece, round(proteinsPiece, 1) as proteinsPiece, round(carbohydratesPiece, 1) as carbohydratesPiece, round(sugarsInItPiece, 1) as sugarsInItPiece, round(fatsPiece, 1) as fatsPiece, round(saturatedFatsPiece, 1) as saturatedFatsPiece, round(fiberPiece, 1) as fiberPiece, round(saltPiece, 1) as saltPiece FROM `nutritions` where id = "'.$id.'"');

  if(mysqli_num_rows($query)>0){
    while($arr=mysqli_fetch_array($query)){
      echo "

        <table>
          <tr>
            <th> </th>
            <th>100 G</th>
            <th>a piece</th>
          </tr>
          <tr>
            <td>Energia</td>
            <td>".$arr['kcal100G']."</td>
            <td>".$arr['kcalPiece']."</td>
          </tr>
          <tr>
            <td>Białko</td>
            <td>".$arr['proteins100G']."</td>
            <td>".$arr['proteinsPiece']."</td>
          </tr>
          <tr>
            <td>Węglowodany</td>
            <td>".$arr['carbohydrates100G']."</td>
            <td>".$arr['carbohydratesPiece']."</td>
          </tr>
          <tr>
            <td>W tym cukry</td>
            <td>".$arr['sugarsInIt100G']."</td>
            <td>".$arr['sugarsInItPiece']."</td>
          </tr>
          <tr>
            <td>Tłuszce</td>
            <td>".$arr['fats100G']."</td>
            <td>".$arr['fatsPiece']."</td>
          </tr>
          <tr>
            <td>Tłuszce nasycone</td>
            <td>".$arr['saturatedFats100G']."</td>
            <td>".$arr['saturatedFatsPiece']."</td>
          </tr>
          <tr>
            <td>Błonnik</td>
            <td>".$arr['fiber100G']."</td>
            <td>".$arr['fiberPiece']."</td>
          </tr>
          <tr>
            <td>Sól</td>
            <td>".$arr['salt100G']."</td>
            <td>".$arr['saltPiece']."</td>
          </tr>
        </table>

      ";
    }
  }

  mysqli_close($con);
?>
