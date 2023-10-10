<?php
//memanggil class model database dengan file convig tadi
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

//instansiasi class database
$database= new database;
$db=$database->getKoneksi();

$mahasiswaController = new MahasiswaController($db);
$mahasiswa=$mahasiswaController->getAllMahasiswa();

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAHASISWA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<div class="px-4 py-3">
    <div class="px-5">
        <h3>Data Mahasiswa</h3>
        <a class="btn btn-outline-success mb-4 mt-2" href="input_mhs.php">+ Tambah Mahasiswa</a>
        <table class="table table-striped table-bordered" style="text-align:center ;">
            <tr>
                <th class="table-dark">No</th>
                <th class="table-dark">NIM</th>
                <th class="table-dark">Nama</th>
                <th class="table-dark">Tempat Lahir</th>
                <th class="table-dark">Jenis Kelamin</th>
                <th class="table-dark">Agama</th>
                <th class="table-dark">Alamat</th>
                <th class="table-dark">Aksi</th>
            </tr>
            <?php
            $no = 1;
            foreach ($db->tampil_mahasiswa() as $x) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $x['nim'] ?></td>
                    <td><?php echo $x['nama'] ?></td>
                    <td><?php echo $x['alamat'] ?></td>
                    <td>
                        <a class="btn btn-warning" href=" edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                        <a class="btn btn-danger" href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>