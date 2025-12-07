<?php
header("Content-Type: application/json");
require "db.php";

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["nama"])) {
    echo json_encode(["status" => "error", "message" => "Field 'nama' wajib"]);
    exit;
}

$allData = getAllData();

$newItem = [
    "id" => time(),
    "nama" => $data["nama"]
];

$allData[] = $newItem;

saveAllData($allData);

echo json_encode(["status" => "success", "data" => $newItem]);
