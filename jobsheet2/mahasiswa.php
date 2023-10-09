<?php
//membuat class mahasiswa
class Mahasiswa
{
    //menuliskan properti
    var $nim;
    var $nama;
    var $alamat;

    //method untuk menampilkan nama
    function tampil_nama()
    {
        //isi method
        return "Nama saya adalah Lintang";
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
echo $nama_mahasiswa->tampil_nama() . "</br>";
