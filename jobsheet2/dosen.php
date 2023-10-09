<?php
class Dosen
{
    //menuliskan properti
    var $nidn;
    var $nama;
    var $prodi;

    //method untuk menampilkan nama
    function tampilkan_nama()
    {
        //isi method
        return "Hallo nama saya adalah Lintang Ayu Kinasih";
    }
    function tampilkan_prodi()
    {
        //isi method
    }
}
//membuat objek nama dosen
$nama_dosen = new Dosen;
//menampilkan objek
echo $nama_dosen->tampilkan_nama();
