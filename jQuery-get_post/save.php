<?php 
$f = fopen('data.txt' , 'a+');
fwrite($f , $_POST['content'] . "<br>");
fclose($f);
//whatever you echo goes to jQuery.php data
echo "Done !";
 ?>