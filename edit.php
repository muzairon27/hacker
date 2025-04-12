<div class="card">
<div class="card-body row">
    <div class="card-title h3 col-8">Edit Data Siswa</div>
    <div class="col-4 mb-3">
        <a href="?m=siswa&s=view" class="btn btn-md btn-primary float-end">Kembali</a>
    </div>

    <?php
    include_once "setting.php";
    $nis = $_GET['nis'];
    $sql = "SELECT * FROM siswa JOIN jurusan ON siswa.jurusan_id=jurusan_id WHERE nis='$nis'";
    $query = mysqli_query($koneksi, $sql);
    $r = mysqli_fetch_array($query);
    ?>
    <form action="?m=siswa&s=update" method="post">
        <div class="mb-2">
            <input type="text" class="form-control" name="nis" value="<?= $r['nis']; ?>" placeholder="Nomor Induk Siswa" autofocus required>
        </div>
        <div class="mb-2">
            <input type="text" class="form-control" name="nama" value="<?= $r['nama']; ?>" placeholder="nama" required>
        </div>
        <div class="mb-2">
            <label for="jk">Jenis Kelamin</label>&nbsp;
            <input type="radio" name="jk" value="Laki-laki" 
            <?php
            if ($r['jk'] == "Laki-laki") {
                echo 'checked';
            }
            ?>
            >Laki-laki
            <input type="radio" name="jk" <?= $r['jk'] == 'Perempuan' ? 'checked' : ''?> value="Perempuan">Perempuan
        </div>
        <div class="mb-2">
            <input type="text" class="form-control" name="tempat_lahir" value="<?= $r['tempat_lahir']; ?>" placeholder="Tempat_lahir">
        </div>
        <div class="mb-2">
            <input type="date" class="form-control" name="tanggal_lahir" value="<?= $r['tanggal_lahir']; ?>" placeholder="Tanggal_lahir">
        </div>
        <di class="mb-2">
            <textarea type="alamat" class="form-control" name="alamat" value="<?= $r['alamat']; ?>" placeholder="Alamat" rows="4"></textarea>
        </div>
        <div class="mb-2">
            <input type="text" class="form-control" name="telp" value="<?= $r['telp']; ?>" placeholder="Nomor Telepon/HP" autofocus required>
        </div>
        <div class="mb-2">
            <input type="email" class="form-control" name="email" value="<?= $r['email']; ?>" placeholder="Email" autofocus required>
        </div>
        <div class=""mb-2>
            <select name="jurusan_id" class="form-control" required>
                <option value="">-- Pilihan Jurusan --</option>
                <?php
                include_once "setting.php";
                $jurusan = mysqli_query($koneksi, "SELECT * FROM jurusan");
                while ($j = mysqli_fetch_array($jurusan) ) {
                    echo "<option value='$j[id]' " . ($j['id'] == $r['jurusan_id'] ? 'selected' : '') . ">$j[jurusan]</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-2">
            <input type="hidden" name="nis" value="<?= $r['nis']; ?>">
            <input type="reset" class="btn btn-sm btn-danger">
            <input type="submit" class="btn btn-sm btn-primary" name="update" value="Update">
        </div>
</div>
</div>