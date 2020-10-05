  
<?php
error_reporting(0);
$connect = mysqli_connect("localhost","root","") or die(mysqli_error());
mysqli_select_db($connect,"sample") or die(mysqli_error());

if($connect)
{
    $extract = mysqli_query($connect,"select * from counter where id=1");
    while($row = mysqli_fetch_assoc($extract))
    {
        $count = $row["count"];
    }
    $extract = mysqli_query($connect,"update counter set count=$count+1 where id = 1") or die(mysqli_error($connect));
    echo "You've had $count visitors";
}

?>