<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q2_string_functions.php" method="POST">
        <label for="name">Enter any string</label>
        <input type="text" name="name">
        <br>
        <input type="submit">
    </form>
</body>
</html>

<?php
$string = $_POST["name"];
if($string){

echo "<h2>String Functions</h2>";
echo "Entered string is: ".$string;
echo "<br>";
echo "No of characters in this string are: ".strlen($string);
echo "<br>";
$arr=explode(" ",$string);
echo "String to Array: ";
print_r($arr);
echo "<br>";
echo "Reversed string: ".strrev($string)."<br>";
echo "String after converting all in lower case: ".strtolower($string)."<br>";
echo "String after converting all in lower case: ".strtoupper($string)."<br>";
$substring = substr($string,0);
echo "String after replacing with substring: ".str_replace($substring,"Himanshu is a good boy",$string);

}
?>