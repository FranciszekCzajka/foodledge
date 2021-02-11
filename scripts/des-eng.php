<?php
  $con=mysqli_connect("localhost","root","","wiki");
  mysqli_set_charset($con,"utf8");

  $id=$_GET['id'];

  $query=mysqli_query($con,'select round(kcal100G, 1) as kcal100G, round(gramsAPiece, 0) as gramsAPiece, round(proteins100G, 1) as proteins100G, round(carbohydrates100G, 1) as carbohydrates100G, round(sugarsInIt100G, 1) as sugarsInIt100G, round(fats100G, 1) as fats100G, round(saturatedFats100G, 1) as saturatedFats100G, round(fiber100G, 1) as fiber100G, round(salt100G, 1) as salt100G, round(kcalPiece, 1) as kcalPiece, round(proteinsPiece, 1) as proteinsPiece, round(carbohydratesPiece, 1) as carbohydratesPiece, round(sugarsInItPiece, 1) as sugarsInItPiece, round(fatsPiece, 1) as fatsPiece, round(saturatedFatsPiece, 1) as saturatedFatsPiece, round(fiberPiece, 1) as fiberPiece, round(saltPiece, 1) as saltPiece FROM `nutritions` where id = "'.$id.'"');

  if(mysqli_num_rows($query)>0){
    while($arr=mysqli_fetch_array($query)){
      echo "

        <table class='site-nutri-table'>
          <tr class='site-nutri-rows'>
            <th class='site-nutri-header'>     </th>
            <th class='site-nutri-header'>100 g</th>
            <th class='site-nutri-header'>a piece (".$arr['gramsAPiece']." g)</th>
          </tr>
          <tr class='site-nutri-rows'>
            <td class='site-nutri-name'>Energy</td>
            <td class='site-nutri-data'>".$arr['kcal100G']." kcal</td>
            <td class='site-nutri-data'>".$arr['kcalPiece']." kcal</td>
          </tr>
          <tr class='site-nutri-rows'>
            <td class='site-nutri-name'>Protein</td>
            <td class='site-nutri-data'>".$arr['proteins100G']." g</td>
            <td class='site-nutri-data'>".$arr['proteinsPiece']." g</td>
          </tr>
          <tr class='site-nutri-rows'>
            <td class='site-nutri-name'>Carbohydrates</td>
            <td class='site-nutri-data'>".$arr['carbohydrates100G']." g</td>
            <td class='site-nutri-data'>".$arr['carbohydratesPiece']." g</td>
          </tr>
          <tr class='site-nutri-rows'>
            <td class='site-nutri-subname'>Sugars</td>
            <td class='site-nutri-note'>".$arr['sugarsInIt100G']." g</td>
            <td class='site-nutri-note'>".$arr['sugarsInItPiece']." g</td>
          </tr>
          <tr class='site-nutri-rows'>
            <td class='site-nutri-name'>Total fat</td>
            <td class='site-nutri-data'>".$arr['fats100G']." g</td>
            <td class='site-nutri-data'>".$arr['fatsPiece']." g</td>
          </tr>
          <tr class='site-nutri-rows'>
            <td class='site-nutri-subname'>Saturated fat</td>
            <td class='site-nutri-note'>".$arr['saturatedFats100G']." g</td>
            <td class='site-nutri-note'>".$arr['saturatedFatsPiece']." g</td>
          </tr>
          <tr class='site-nutri-rows'>
            <td class='site-nutri-name'>Fiber</td>
            <td class='site-nutri-data'>".$arr['fiber100G']." g</td>
            <td class='site-nutri-data'>".$arr['fiberPiece']." g</td>
          </tr>
          <tr class='site-nutri-rows'>
            <td class='site-nutri-name'>Salt</td>
            <td class='site-nutri-data'>".$arr['salt100G']." g</td>
            <td class='site-nutri-data'>".$arr['saltPiece']." g</td>
          </tr>
        </table>

      ";
    }
  }

  mysqli_close($con);
?>
