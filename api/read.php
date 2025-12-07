<?php
header("Content-Type: application/json");
require "db.php";

echo json_encode([
    "status" => "success",
    "data" => getAllData()
]);
