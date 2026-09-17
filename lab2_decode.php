<?php

$json = '{"name":"Maria","age":21,"email":"maria@example.com"}';

// Convert JSON to PHP object
$object = json_decode($json);

// Convert JSON to PHP associative array
$array = json_decode($json, true);

// Display the required values
echo "Object: " . $object->name . "<br>";
echo "Array: " . $array["email"];

?>
