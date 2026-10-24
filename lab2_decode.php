<?php

$json = '{"name":"Maria","age":21,"email":"maria@example.com"}';

$obj = json_decode($json);
echo "Object: " . $obj->name . "<br>";

$arr = json_decode($json, true);
echo "Array: " . $arr["email"] . "<br>";
?>