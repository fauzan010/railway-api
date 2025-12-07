<?php
if (strpos($_SERVER['REQUEST_URI'], '/api') === 0) {
    header("Content-Type: application/json");
    echo json_encode(["status" => "error", "message" => "Gunakan endpoint API yang benar"]);
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkembangan Teknologi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background: #f4f6f9;
        }
        .box {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2d3436;
        }
        p {
            line-height: 1.7;
            color: #444;
        }
        .highlight {
            background: #dfe6e9;
            padding: 8px 12px;
            border-radius: 6px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Perkembangan Teknologi Modern</h1>
        <p>
            Teknologi berkembang sangat cepat dalam beberapa dekade terakhir. 
            Mulai dari kecerdasan buatan (AI), Internet of Things (IoT), hingga komputasi awan 
            yang mempermudah berbagai aktivitas manusia.
        </p>

        <p>
            Kehadiran AI generatif seperti <strong>ChatGPT</strong> dan <strong>Gemini</strong> 
            mengubah cara manusia bekerja, belajar, dan berinteraksi dengan teknologi.
        </p>

        <p class="highlight">
            “Masa depan teknologi bergantung pada kemampuan manusia beradaptasi.”
        </p>

        <p>
            Tidak hanya itu, perkembangan smartphone, jaringan 5G, mobil listrik, 
            hingga robotika semakin menunjukkan bahwa dunia menuju era otomatisasi penuh.
        </p>
    </div>
</body>
</html>
