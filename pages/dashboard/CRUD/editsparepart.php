<?php

require_once '../../../functions/functions_lower.php';

checkRole(['admin', 'gudang']);
$id = $_GET['id'];
$editspareparts = geteditSpareparts($id);





EditSpareparts($id);
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
        <h2>Edit Sparepart</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="namaSparepart" class="form-label">Nama Sparepart</label>
                <input type="text" class="form-control" id="namaSparepart" name="namaSparepart" required value="<?php echo $editspareparts['nama']; ?>">
            </div>
            <div class="mb-3">
                <label for="hargaBeli" class="form-label">Harga Beli</label>
                <input type="number" class="form-control" id="hargaBeli" name="hargaBeli" required value="<?php echo $editspareparts['harga_beli'];?>">
            </div>
            <div class="mb-3">
                <label for="hargaJual" class="form-label">Harga Jual</label>
                <input type="number" class="form-control" id="hargaJual" name="hargaJual" required value="<?php echo $editspareparts['harga_jual']; ?>">
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" required value="<?php echo $editspareparts['stok']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Edit Sparepart</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
