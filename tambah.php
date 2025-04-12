<div class="card">
<div class="card-body row">
    <div class="card-title h3 col-8">Tambah Data Siswa</div>
    <div class="col-4 mb-3">
        <a href="?m=siswa&s=view" class="btn btn-md btn-primary float-end">Kembali</a>
    </div>

    <form action="?m=siswa&s=simpan" method="post">
        <div class="mb-2">
            <input type="text" class="form-control" name="nis" placeholder="Nomor Induk Siswa" autofocus required>
        </div>
        <div class="mb-2">
            <input type="text" class="form-control" name="nama" placeholder="nama">
        </div>
        <div class="mb-2">
            <label for="jk">Jenis Kelamin</label>&nbsp;
            <input type="radio" name="jk" value="Laki-laki" checked>Laki-laki
            <input type="radio" name="jk" value="Perempuan" checked>Perempuan
        </div>
        <div class="mb-2">
            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat_lahir">
        </div>
        <div class="mb-2">
            <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal_lahir">
        </div>
        <di class="mb-2">
            <textarea type="alamat" class="form-control" placeholder="Alamat" rows="4"></textarea>
        </div>
        <div class="mb-2">
            <input type="number" class="form-control" name="telp" placeholder="Nomor Telepon/HP" autofocus required>
        </div>
        <div class="mb-2">
            <input type="email" class="form-control" name="email" placeholder="email" autofocus required>
        </div>
        <div class=""mb-2>
            <select name="jurusan_id" class="form-control" required>
                <option value="">-- Pilihan Jurusan --</option>
                <?php
                include_once "setting.php";
                $jurusan = mysqli_query($koneksi, "SELECT * FROM jurusan");
                while ($j = mysqli_fetch_array($jurusan) ) {
                    echo "<option value='$j[id]'>$j[jurusan]</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-2">
            <input type="reset" class="btn btn-sm btn-danger">
            <input type="submit" class="btn btn-sm btn-primary" name="simpan" value="Simpan">
        </div>
    </form>
</div>
</div>