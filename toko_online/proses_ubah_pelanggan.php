<?php
if ($_POST) {
    $id_pelanggan = $_POST ['id_pelanggan'];
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    if (empty($nama)) {
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } else {
        include "koneksi.php";
        if (empty($password)) {
            $update = mysqli_query($conn, "update pelanggan set username='" . $username . "',nama='" . $nama . "',alamat='" . $alamat . "', telp='" . $telp. "' where id_pelanggan= '" . $id_pelanggan . "' ") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=" . $id_pelanggan . "';</script>";
            }
        } else {
            $update = mysqli_query($conn, "update pelanggan set username='" . $username . "',nama='" . $nama . "', alamat='" . $alamat . "', telp='" . $telp . "',password='" . md5($password) . "' where id_pelanggan = '" . $id_pelanggan . "'") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=" . $id_pelanggan . "';</script>";
            }
        }

    }
}

?>