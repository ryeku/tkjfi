<?php
header('Location:index.php');
//open file to write
$ff = fopen("filter0.txt", "r+");
// clear content to 0 bits
ftruncate($ff, 0);
//close file
fclose($ff);
?>
<?php
//open file to write
$fa = fopen("accounts0.txt", "r+");
// clear content to 0 bits
ftruncate($fa, 0);
//close file
fclose($fa);
?>