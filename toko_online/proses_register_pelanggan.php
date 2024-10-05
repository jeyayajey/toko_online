<?php
if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $foto = $_POST['foto'];

    if (empty($nama)) {
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='register_pelanggan.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='register_pelanggan.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('password tidak boleh kosong');location.href='register_pelanggan.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO `pelanggan` (`id_pelanggan`, `username`, `password`, `nama`, `alamat`, `telp`, `foto`) VALUES (NULL, '$username', '$password', '$nama', '$alamat', '$telp', '$foto');") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan Pelanggan');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Pelanggan');location.href='login.php';</script>";
        }
    }
}

?>