<?php

$link = mysqli_connect('localhost', 'root', '', 'wiki');

mysqli_set_charset($link,"utf8");

if($link === false){
    die('Błąd połączenia ' . mysqli_connect_error());
}

if(isset($_REQUEST['term'])){
    $sql = 'select id, name_pl FROM artykuly WHERE name_pl LIKE ? order by name_pl';

    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, 's', $param_term);

        $param_term = $_REQUEST['term'] . '%';

        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo '<a href="subsite.php?name='.$row['name_pl'].'&id='.$row['id'].'""><li class="search-elements light light-hover dark-border">'.$row['name_pl'].'</li></a>';
                }
            } else{
                echo '<li class="search-elements light light-hover dark-border">Brak wyników</li>';
            }
        } else{
            echo "Bład wykonania $sql. " . mysqli_error($link);
        }
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($link);
?>
