<?php
require_once("config/config.php");
$url = "http://localhost:5000";

function getNeurons($sql,$conn){
    $stmt = $conn->query($sql);
    return $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
}

$data = [
    [
        "name" => "",
        "weight" => 2
    ]
];

$sendFlask = [
    "http" => [
        "header"  => "Content-Type: application/json",
        "method"  => "POST",
        "content" => json_encode($data),
    ]
];
