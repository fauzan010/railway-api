<?php
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["status" => "error", "message" => "Harus POST"]);
    exit;
}

echo json_encode(["status" => "success", "message" => "Berhasil"]);
