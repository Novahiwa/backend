<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type: application/json");

$data = [
    "name" => "Novahiwa Mzika",
    "age" => 21,
    "district" => "Phalombe",
    "email" => "novahiwamzika18@gmail.com",
];

echo json_encode($data);
