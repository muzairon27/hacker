<?php
$nis = $_GET ['nis'];
include_once ("setting.php");

$sql = "DELETE FROM siswa WHERE nis='$nis'";
$result =mysqli_query($koneksi, $sql);
if($result) {
    header('location: ?m=siswa&s=tampil');
} else {
    echo "Error: " . "<br>" . $koneksi->error;
}
