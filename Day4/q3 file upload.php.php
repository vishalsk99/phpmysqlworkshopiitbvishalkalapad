  
<!DOCTYPE html>
<html lang="en">

<body onload="document.FormName.reset();">
    
<form action="q3_file_upload.php" method="POST" enctype="multipart/form-data" >
<h1>UPLOAD A FILE</h1>
<input type="file" name="file" id="">
<br>
<br>
<input type="submit" value="UPLOAD" name="submit">

</form>
</body>
</html>
<?php

if(@$_POST['submit'])
{
    echo "FILE NAME: ".$_FILES["file"]["name"]."<br>";

    echo "FILE TYPE: ".$_FILES["file"]["type"]."<br>";

 
   echo "FILE SIZE: ".$_FILES["file"]["size"]." bytes <br>";

   echo  "ERROR: ".$_FILES["file"]["error"]."<br>" ;
}

$_FILES=0;
?>