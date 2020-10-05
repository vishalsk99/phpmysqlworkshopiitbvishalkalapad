<html>
<form action="" method="post">
<label><b>Name of Student:</b></label><br>
<input type="text" name="name" max=500 required>
<h3>Marks in each subject</h3>
<label>Marathi:</label>
<input type="text" name="mar" max=100 required><br><br>
<label>Hindi:</label>
<input type="text" name="hin" max=100 required><br><br>
<label>English:</label>
<input type="text" name="eng" max=100 required><br><br>
<label>Science:</label>
<input type="text" name="sci" max=100 required><br><br>
<label>History:</label>
<input type="text" name="his" max=100 required><br><br>
<input type="submit" value="submit"  >
</html>


<?php


 @$mar=$_POST['mar']; 
 @$hin=$_POST['hin']; 
@$eng=$_POST['eng']; 
 @$sci=$_POST['sci']; 
 @$his=$_POST['his']; 
 

$total=($mar + $hin + $eng+ $sci + $his);
$avg=($total/5.0);
$percentage=(($total/500.0)* 100);

echo "<br>Total marks obtained:".$total."/500<br>";
echo "Average:".$avg."<br>";
echo "Percentage:".$percentage."%";



?>

