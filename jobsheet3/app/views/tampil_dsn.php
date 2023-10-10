<?php
//memanggil kelas database
include '../classes/database.php';
//instansiasi class database
$db = new Database;
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DOSEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<div class="px-4 py-3">
    <div class="px-5">
        <h3>Data Dosen</h3>
        <a class="btn btn-outline-success mb-4 mt-3" href="input_dsn.php">+ Tambah Dosen</a>
        <table class="table table-striped table-bordered" style="text-align:center ;">
            <tr>
                <th class="table-dark">No</th>
                <th class="table-dark">NIDN</th>
                <th class="table-dark">Nama</th>
                <th class="table-dark">Agama</th>
                <th class="table-dark">Alamat</th>
                <th class="table-dark">Aksi</th>
            </tr>
            <?php
            $no = 1;
            foreach ($db->tampil_dosen() as $x) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $x['nidn'] ?></td>
                    <td><?php echo $x['nama'] ?></td>
                    <td><?php echo $x['agama'] ?></td>
                    <td><?php echo $x['alamat'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="edit_dsn.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                        <a class="btn btn-danger" href="proses_dsn.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>