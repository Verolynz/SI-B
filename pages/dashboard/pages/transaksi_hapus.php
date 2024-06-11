<?php

require '../../../functions/functions_lower.php';
// Get the ID from the URL parameter
$id = $_GET['id'];

// Check if the ID is valid (you might want to add more validation here)
if (isset($id) && is_numeric($id)) {
    // Delete the transaction
    $result = deleteTransaksi($id);

    if ($result) {
        // Redirect to the transaksi.php page after successful deletion
        header("Location: transaksi.php");
        exit;
    } else {
        // Handle the error (e.g., display an error message)
        echo "Error deleting transaction.";
    }
} else {
    // Handle invalid ID (e.g., display an error message)
    echo "Invalid transaction ID.";
}

?>