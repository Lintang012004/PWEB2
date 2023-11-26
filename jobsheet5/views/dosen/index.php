<?php
//memanggil class model database dengan file convig tadi
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

//instansi dari class pada dosen controller
$dosenController = new DosenController($db);
$dosen = $dosenController->getAllDosen();

?>

<div class="px-4 py-3">
    <div class="px-5">
        <h3>Data Dosen</h3>
        <a class="btn btn-outline-success mb-4 mt-2" href="tambahdosen">+ Tambah Dosen</a>
        <table class="table table-striped table-bordered" style="text-align:center ;">
            <tr>
                <th class="table-dark">No</th>
                <th class="table-dark">NIDN</th>
                <th class="table-dark">Nama</th>
                <th class="table-dark">Jenis Kelamin</th>
                <th class="table-dark">Agama</th>
                <th class="table-dark">Alamat</th>
                <th class="table-dark">Aksi</th>
            </tr>
            <?php
            $no = 1;
            foreach ($dosen as $x) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $x['nidn'] ?></td>
                    <td><?php echo $x['nama'] ?></td>
                    <td><?php echo $x['jenis_kelamin'] ?></td>
                    <td><?php echo $x['agama'] ?></td>
                    <td><?php echo $x['alamat'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="editdosen/<?php echo $x['id']; ?>">Edit</a>
                        <a class="btn btn-danger" href="hapusdosen/<?php echo $x['id']; ?>"
                        onclick="return confirm ('Apakah yakin ingin menghapus...?')">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>