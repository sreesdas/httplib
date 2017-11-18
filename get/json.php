<?php
header('Content-Type: application/json');
$name = json_encode(array( "firstname" => "Jon" , "lastname" => "Snow" ));
echo json_encode(array("id" => "1", "name" => $name));

?>