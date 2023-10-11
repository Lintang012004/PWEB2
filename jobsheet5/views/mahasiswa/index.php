<?php
//memanggil class model database dengan file convig tadi
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

//instansi dari class pada mahasiswa controller
$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getAllMahasiswa();

?>



<div class="px-4 py-3">
    <div class="px-5">
        <h3>Data Mahasiswa</h3>
        <a class="btn btn-outline-success mb-4 mt-2" href="tambah">+ Tambah Mahasiswa</a>
        <table class="table table-striped table-bordered" style="text-align:center ;">
            <tr>
                <th class="table-dark">No</th>
                <th class="table-dark">NIM</th>
                <th class="table-dark">Nama</th>
                <th class="table-dark">Tempat Lahir</th>
                <th class="table-dark">Tanggal Lahir</th>
                <th class="table-dark">Jenis Kelamin</th>
                <th class="table-dark">Agama</th>
                <th class="table-dark">Alamat</th>
                <th class="table-dark">Aksi</th>
            </tr>
            <?php
            $no = 1;
            foreach ($mahasiswa as $x) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $x['nim'] ?></td>
                    <td><?php echo $x['nama'] ?></td>
                    <td><?php echo $x['tempat_lahir'] ?></td>
                    <td><?php echo $x['tanggal_lahir'] ?></td>
                    <td><?php echo $x['jenis_kelamin'] ?></td>
                    <td><?php echo $x['agama'] ?></td>
                    <td><?php echo $x['alamat'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="edit/<?php echo $x['id']; ?>">Edit</a>
                        <a class="btn btn-danger" href="hapus/<?php echo $x['id']; ?>"
                        onclick="return confirm ('Apakah yakin ingin menghapus...?')">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>