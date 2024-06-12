<?php

require_once '../../../functions/functions_lower.php';
AddJasa();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Meta tags required -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title of the document -->
    <title>Tambah Sparepart</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Jasa</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="namaJasa" class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control" id="namaJasa" name="namaJasa" required>
            </div> 
             <div class="mb-3">
                <label for="namaJasa" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="namaJasa" name="namaJasa" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Nomer telepon</label>
                <input type="number" class="form-control" id="harga" name="harga" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
