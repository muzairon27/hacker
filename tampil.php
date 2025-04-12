<div class="card">
<div class="card-body row">
    <div class="card-title h3 col-8">Data santri</div>
    <div class="col-4 mb-2">
        <a href="?m=siswa&s=tambah" class="btn btn-md btn-primary float-end">Tambah</a>
    </div>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nis</th>
                <th>Nama Santri</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include_once "setting.php";
                $sql    = "SELECT siswa.*, jurusan.* FROM siswa JOIN jurusan ON jurusan.id=siswa.jurusan_id";
                $result = mysqli_query($koneksi, $sql);
                if ($r = mysqli_num_rows($result) > 0){
                    $no = 1;
                    while ($r = mysqli_fetch_assoc($result)) {
                        echo '<tr>
                            <td>' . $no . '</td>
                            <td>' . $r['nis'] . '</td>
                            <td>' . $r['nama'] . '</td>
                            <td>' . $r['jk'] . '</td>
                            <td>' . $r['tempat_lahir'] . '</td>
                            <td>' . date('d F Y', strtotime($r['tanggal_lahir'])) . '</td>
                            <td>' . $r['alamat'] . '</td>
                            <td>' . $r['telp'] . '</td>
                            <td>' . $r['email'] . '</td>
                            <td>' . $r['jurusan'] . '</td>
                            <td>
                                <a href="?m=siswa&s=edit&nis=' . $r ['nis'] . '" class="btn btn-sm btn-warning">Edit</a>
                                <a href="?m=siswa&s=hapus&nis=' . $r ['nis'] . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Apakah anda yakin?\')">Hapus</a>
                            </td>
                            </tr>';
                        $no++;
                    }
                } else {
                    echo '<tr>
                        <td colspan=10" align="center">Data Kosong</td>
                    </tr>';
                }
            ?>
        </tbody>
    </table>
</div>
</div>