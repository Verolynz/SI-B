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
        <h2>Edit Jasa</h2>
        <form action="submit_sparepart.php" method="POST">
            <div class="mb-3">
                <label for="namaSparepart" class="form-label">Jenis jasa</label>
                <input type="text" class="form-control" id="namaSparepart" name="namaSparepart" required>
            </div>
            <div class="mb-3">
                <label for="hargaBeli" class="form-label">Biaya</label>
                <input type="number" class="form-control" id="hargaBeli" name="hargaBeli" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Edit Jasa</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
