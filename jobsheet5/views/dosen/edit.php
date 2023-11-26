<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id); //memanggil getDosenById

    if ($dosenData) {
        if (isset($_POST['submit'])) {
            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];

            $result = $dosenController->updateDosen($id, $nidn, $nama, $jenis_kelamin, $agama, $alamat); //if siatas dibungkus dalam result

            if ($result) {
                header("location:/jobsheet5/dosen");
            } else {
                header("location:edit.php");
            }
        }
    } else {
        echo "Dosen Tidak Ditemukan";
    }
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>



<div class="px-4 py-4">
    <h3>Edit Data Dosen</h3>
    <div class="py-3">
        <a class="btn btn-outline-primary" href="/jobsheet5/dosen">KEMBALI</a>
    </div>
    <div class="px-4 py-4 border" style="width:40% ;">
        <?php if ($dosenData) { ?>
            <form action="" method="post">
                <?php
                foreach ($dosenData as $d => $value) {
                ?>
                    <table border="0">
                        <tr>
                            <td width="100">
                                <?php
                                echo $d;
                                ?>
                            </td>
                            <td>
                                <input type="text" name="<?php echo $d ?>" value="<?php echo $value ?>">
                            </td>
                        </tr>
                    </table>
                <?php
                } ?>
                <tr>
                    <td></td>
                    <td>
                        <input class="btn btn-success" type="submit" name="submit" value="Simpan">
                    </td>
                </tr>
            </form>
    </div>
<?php } ?>
</div>