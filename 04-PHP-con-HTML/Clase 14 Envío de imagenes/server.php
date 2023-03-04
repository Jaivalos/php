<?php

echo "<pre>";

var_dump($_FILES);

echo "</pre>";

$basename = $_FILES["image"]["name"];
$type = $_FILES["image"]["type"];
$tmp_path = $_FILES["image"]["tmp_name"];
echo $basename ."<br>". $type ."<br>". $tmp_path;