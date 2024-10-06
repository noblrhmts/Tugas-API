<?php

// URL API publik
$url = 'https://jsonplaceholder.typicode.com/posts';

// Inisialisasi cURL
$ch = curl_init();

// Set opsi cURL untuk mengambil URL dengan metode GET
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi cURL dan simpan respon
$response = curl_exec($ch);

// Tutup cURL
curl_close($ch);

// Ubah respon dari JSON menjadi array PHP
$data = json_decode($response, true);

// Ambil 5 data pertama
$first_five_data = array_slice($data, 0, 5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1>First 5 Posts</h1>

    <div class="container">
        <?php foreach ($first_five_data as $post): ?>
            <div class="post">
                <h2><?php echo $post['title']; ?></h2>
                <p><?php echo $post['body']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
