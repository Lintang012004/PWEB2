<?php
include '../classes/database.php';

$db = new Database;
$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_dsn($_POST['nidn'], $_POST['nama'], $_POST['agama'], $_POST['alamat']);
    header("location:tampil_dsn.php");
} elseif ($aksi == "update") {
    $db->updatedosen($_POST['id'], $_POST['nidn'], $_POST['nama'], $_POST['agama'], $_POST['alamat']);
    header("location:tampil_dsn.php");
} elseif ($aksi == "hapus") {
    $db->hapusdosen($_GET['id']);
    header("location:tampil_dsn.php");
}
