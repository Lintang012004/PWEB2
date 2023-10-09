<?php
//membuat class mahasiswa
class Mahasiswa
{
    //menuliskan properti
    var $nim;
    var $nama;
    var $alamat;

    //yang akan dibaca pertama kali dari classnya
    function __construct()
    {
        echo "Saya Mahasiswa Teknik Informatika" . "</br>";
    }
    //yang akan dibaca terakhir
    function __destruct()
    {
        echo "Politeknik Negeri Cilacap";
    }
    //method untuk menampilkan nama
    function tampil_nama()
    {
        //isi method
        return "Nama saya adalah Lintang" . "</br>";
    }

    function tampil_mahasiswa()
    {
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah </br>";
    }

    //method untuk menampilkan alamat
    function tampil_alamat()
    {
        //isi method
    }
}

//membuat objek nama mahasiswa
$nama_mahasiswa = new Mahasiswa;
//menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_mahasiswa();
