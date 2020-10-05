  
<?php

error_reporting(0);
$connect = mysqli_connect("localhost","root","");
mysqli_select_db($connect,"result") or die("ERROR");


if ($connect) {

$extract = mysqli_query($connect,"SELECT * FROM class1 WHERE name='Rohan'");

while ($row = mysqli_fetch_assoc($extract)) {

$s1 = $row["s1"];
$s2 = $row["s2"];
$s3 = $row["s3"];
$s4 = $row["s4"];
$s5 = 99;
$name1 = $row["name"];
$newtotal = $s1+$s2+$s3+$s4+$s5;
$newper = ($newtotal / 500 ) * 100 ;

mysqli_query($connect,
"UPDATE class1  SET s5='$s5' , total = '$newtotal' , percent = '$newper' WHERE name='$name1'"
);



}

echo "<h2>Marks updated succesfully</h2>";
}

 ?>