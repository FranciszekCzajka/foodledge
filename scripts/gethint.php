<?php

$con = mysqli_connect('localhost','root','','wiki');

$query = mysqli_query($con,'select nazwa from wiki');

if(mysqli_num_rows($query)>0){
  while($arr=mysqli_fetch_array($query)){
    $a[]=$arr['nazwa'];
  }
}

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "Brak wyników" : $hint;

mysqli_close($con);
?>
