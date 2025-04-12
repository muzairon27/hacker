<?php
if(isset($_POST['simpan'])) {
    $nis = $_POST ['nis'];
    $nama = $_POST ['nama'];
    $jk = $_POST ['jk'];
    $tempat_lahir = $_POST ['tempat_lahir'];
    $tanggal_lahir = $_POST ['tanggal_lahir'];
    $alamat = $_POST ['alamat'];
    $telp = $_POST ['telp'];
    $email = $_POST ['email'];
    $jurusan_id = $_POST ['jurusan_id'];


    include_once "setting.php";
    $sql = "INSERT INTO siswa SET nis='$nis' , nama='$nama', jk='$jk', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', telp='$telp', email='$email', jurusan_id='$jurusan_id'";
    $result =mysqli_query($koneksi, $sql);
    if($result) {
        header ('location: ?m=siswa&s=tampil');
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    echo "Jangan Akses Langsung ke file simpan.php";
}
