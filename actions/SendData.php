<?php
require_once("../config/config.php");
require_once("api_client.php");


// NEURON FORM SEND //
if(isset($_POST["name"])  && isset($_POST["threshold"])) {
    $method = "POST";
    $url = "http://localhost:5000/api/addNeuron";
    $neuron_name = $_POST["name"];
    $neuron_threshold = $_POST["threshold"];
    $data = [
        [
            "name" => $neuron_name,
            "threshold" => $neuron_threshold
        ]
    ];
    $response_json = postJson($method, $url, $data);
    $response = json_encode($response_json, true);
}

// SYNAPSE FORM SEND
if(isset($_POST["fromName"])  && isset($_POST["toName"]) && isset($_POST["weight"])) {
    $url = "http://localhost:5000/api/createSynapse";
    $method = "POST";
    $starting_neuron = $_POST["fromName"];
    $ending_neuron = $_POST["toName"];
    $weight = $_POST["weight"];
    $data = [
        [
            "fromName" => $starting_neuron,
            "toName" => $ending_neuron,
            "weight" => $weight
        ]
    ];
    postJson($method,$url,$data);
}

$sendFlask = [
    "http" => [
        "header"  => "Content-Type: application/json",
        "method"  => "POST",
        "content" => json_encode($data),
    ]
];
?>