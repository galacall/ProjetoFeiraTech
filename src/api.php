<?php
header('Content-Type: application/json');
$data = array("message" => "Hello from PHP API");
echo json_encode($data);