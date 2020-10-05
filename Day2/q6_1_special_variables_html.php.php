<?php
    
    if(isset($_GET['s1']) && isset($_GET['s2']) && isset($_GET['s3']) ){
    
    $s1 = $_GET['s1'];
    $s2 = $_GET['s2'];
    $s3 = $_GET['s3'];
  
   if ($s1==$s2 && $s2== $s3 ){
    echo "<b>Equilateral triangles</b>";
    } elseif ($s1==$s2 || $s1==$s3 || $s2==$s3){
        echo "<b>Isosceles triangles</b>";
   } else {
        echo "<b>Scalene triangle</b>";
    }

   }


?>