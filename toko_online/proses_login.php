<?php
if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    if (empty($username)) {
        echo "<script>alert('username tidak valid!');location.href='login.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
    } else {
        include "koneksi.php";
        $qry_login = mysqli_query($conn, "select * from pelanggan where username = '" . $username . "' and password = '" . $password . "'");
        if (mysqli_num_rows($qry_login) > 0) {
            $dt_login = mysqli_fetch_array($qry_login);
            session_start();
            $_SESSION['username'] = $dt_login['username'];
            $_SESSION['nama'] = $dt_login['nama'];
            $_SESSION['status_login'] = true;
            header("location: home_pelanggan.php");
        } else {
            echo "<script>alert('username dan Password salah');location.href='login.php';</script>";
        }
    }
}
?>