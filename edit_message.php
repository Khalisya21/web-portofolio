<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM contacts WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $message = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message_text = $_POST['message'];

    $sql = "UPDATE contacts SET name = ?, email = ?, message = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $name, $email, $message_text, $id);

    if ($stmt->execute()) {
        echo "<script>
                alert('Pesan berhasil diupdate!');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Terjadi kesalahan saat mengupdate pesan.');
                window.location.href = 'index.php';
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Pesan</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Pesan</h2>
        <form action="edit_message.php" method="POST">
            <input type="hidden" name="id" value="<?= $message['id']; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($message['name']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($message['email']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <textarea class="form-control" id="message" name="message" rows="3" required><?= htmlspecialchars($message['message']); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html> 