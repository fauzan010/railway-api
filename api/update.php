<?php
header("Content-Type: application/json");
require "db.php";

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["id"]) || !isset($data["nama"])) {
    echo json_encode(["status" => "error", "message" => "id dan nama wajib"]);
    exit;
}

$allData = getAllData();
$found = false;

foreach ($allData as &$item) {
    if ($item["id"] == $data["id"]) {
        $item["nama"] = $data["nama"];
        $found = true;
        break;
    }
}

if (!$found) {
    echo json_encode(["status" => "error", "message" => "ID tidak ditemukan"]);
    exit;
}

saveAllData($allData);

echo json_encode(["status" => "success", "message" => "Updated"]);
