<?php

class Database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi;

    //tidak perlu membuat fungsi lagi maka bisa langsung dipanggil
    function __construct()
    {
        //notasi dasar kelas databse
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    function tampil_mahasiswa()
    {
        $data = mysqli_query($this->koneksi, "select * from mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_mhs($nim, $nama, $alamat)
    {
        mysqli_query($this->koneksi, "insert into mahasiswa (nim,nama,alamat) values ('$nim','$nama','$alamat')");
    }
    function edit($id)
    {
        $data = mysqli_query($this->koneksi, "select * from mahasiswa where id='$id' ");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($id, $nim, $nama, $alamat)
    {
        mysqli_query($this->koneksi, "update mahasiswa set nim='$nim', nama='$nama',alamat='$alamat' where id='$id'");
    }
    function hapus($id)
    {
        mysqli_query($this->koneksi, "delete from mahasiswa where id='$id'");
    }
    function tampil_dosen()
    {
        $data = mysqli_query($this->koneksi, "select * from dosen");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
    function tambah_dsn($nidn, $nama, $agama, $alamat)
    {
        mysqli_query($this->koneksi, "insert into dosen (nidn,nama,agama,alamat) values ('$nidn','$nama','$agama','$alamat')");
    }
    function editdosen($id)
    {
        $data = mysqli_query($this->koneksi, "select * from dosen where id='$id' ");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
    function updatedosen($id, $nidn, $nama, $agama, $alamat)
    {
        mysqli_query($this->koneksi, "update dosen set nidn='$nidn', nama='$nama',agama='$agama',alamat='$alamat' where id='$id'");
    }
    function hapusdosen($id)
    {
        mysqli_query($this->koneksi, "delete from dosen where id='$id'");
    }
}
