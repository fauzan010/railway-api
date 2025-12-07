<?php
$databaseFile = __DIR__ . "/data.json";

// Jika file belum ada, buat dengan array kosong
if (!file_exists($databaseFile)) {
    file_put_contents($databaseFile, json_encode([]));
}

// Fungsi ambil semua data
function getAllData() {
    global $databaseFile;
    $json = file_get_contents($databaseFile);
    return json_decode($json, true);
}

// Fungsi simpan data
function saveAllData($data) {
    global $databaseFile;
    file_put_contents($databaseFile, json_encode($data, JSON_PRETTY_PRINT));
}
