<?php
function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $role = htmlspecialchars($data["role"]);
    $query = "INSERT INTO users 
    VALUES
    ('','$nama','$username','$password','$role')";
    mysqli_query($conn, $query);
    // mysqli affect berfungsi untuk cek apakah data berhasil di input atau tidak
    return mysqli_affected_rows($conn);
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
