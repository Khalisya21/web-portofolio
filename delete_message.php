<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);

    // Debug: Periksa apakah ID diterima
    if (!$id) {
        die("ID tidak valid.");
    }

    $sql = "DELETE FROM contacts WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>
                alert('Pesan berhasil dihapus!');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Terjadi kesalahan saat menghapus pesan: " . $stmt->error . "');
                window.location.href = 'index.php';
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?> 