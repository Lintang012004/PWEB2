<?php
include '../classes/database.php';

$db = new Database;
$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_mhs($_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_mhs.php?pesan=tambah");
} elseif ($aksi == "update") {
    $db->update($_POST['id'], $_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_mhs.php?pesan=edit");
} elseif ($aksi == "hapus") {
    $db->hapus($_GET['id']);
    header("location:tampil_mhs.php?pesan=hapus");
}
