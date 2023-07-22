<?php
// function tambah($data)
// {
//     global $conn;
//     $nama = htmlspecialchars($data["nama"]);
//     $username = htmlspecialchars($data["username"]);
//     $password = htmlspecialchars($data["password"]);
//     $role = htmlspecialchars($data["role"]);
//     $hashed_password = password_hash($password, PASSWORD_DEFAULT);
//     // verify username has taken or not
//     $query = "INSERT INTO users 
//     VALUES
//     ('','$nama','$username','$hashed_password','$role')";
//     mysqli_query($conn, $query);
//     // mysqli affect berfungsi untuk cek apakah data berhasil di input atau tidak
//     return mysqli_affected_rows($conn);
// }<?php
function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $role = htmlspecialchars($data["role"]);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Verify username has taken or not
    $stmt = $conn->prepare("SELECT 1 FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_row();
    $stmt->close();

    if ($user) {
        // Username is already taken, handle the error accordingly
        return "This username is already taken!";
    } else {
        // Username is available, proceed with inserting data
        $stmt = $conn->prepare("INSERT INTO users (nama, username, password, role) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nama, $username, $hashed_password, $role);
        $stmt->execute();
        $stmt->close();

        // mysqli_affected_rows berfungsi untuk cek apakah data berhasil diinput atau tidak
        return true;
    }
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM users WHERE id = $id");
    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $role = htmlspecialchars($data["role"]);
    // query insert data
    $query = "UPDATE users SET
            nama='$nama',
            username='$username',
            password='$password',
            role='$role'
            WHERE id ='$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
