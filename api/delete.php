<?php
header("Content-Type: application/json");
require "db.php";

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["id"])) {
    echo json_encode(["status" => "error", "message" => "id wajib"]);
    exit;
}

$allData = getAllData();
$filtered = [];

foreach ($allData as $item) {
    if ($item["id"] != $data["id"]) {
        $filtered[] = $item;
    }
}

saveAllData($filtered);

echo json_encode(["status" => "success", "message" => "Deleted"]);
