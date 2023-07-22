<?php
// Koneksi ke database
// ...

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $stmt = $conn->prepare("SELECT 1 FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_row();
    $stmt->close();

    if ($user) {
        echo 'taken';
    } else {
        echo 'available';
    }
}
?>
