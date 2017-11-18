<?php

$filename = 'logs/'. $_SERVER['REMOTE_ADDR'] .'.txt';
echo $filename;
$file = fopen($filename, 'a');

foreach ($_POST as $param_name => $param_val) {
	$data = $param_name. " => " . $param_val;
	fwrite($file, $data);
}
fwrite($file, "\r\n");
fclose($file);

?>
