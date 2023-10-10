<?php
include '../classes/database.php';
$db = new Database();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DOSEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<div class="px-4 py-4">
    <h3>Edit Data Dosen</h3>
    <div class="py-3">
        <a class="btn btn-outline-primary" href="tampil_dsn.php">KEMBALI</a>
    </div>
    <form action="proses_dsn.php?aksi=update" method="post">
        <?php
        foreach ($db->editdosen($_GET['id']) as $d) {
        ?>
            <table>
                <tr>
                    <td>NIDN</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                        <input type="text" name="nidn" value="<?php echo $d['nidn'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type=" text" name="nama" value="<?php echo $d['nama'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td><input type=" text" name="agama" value="<?php echo $d['agama'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name=" alamat" cols="30" rows="5"><?php echo $d['alamat'] ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn btn-success" type="submit" value="Simpan"></td>
                </tr>
            </table>
        <?php
        }
        ?>
    </form>
</div>