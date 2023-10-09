<?php
//membuat class mahasiswa



class Mahasiswa
{
    //property public dan private
    public $nama;
    private $nim = "220203039";

    //public method
    public function tampilkan_nama()
    {
        //nilai kembalian
        return "Nama saya Lintang </br>";
    }

    //private method
    function tampilkan_nim()
    {
        return "NIM saya " . $this->nim;
    }
}
//instansiasi objek mahasiswadalam variabel $mahasiswa
$mahasiswa = new Mahasiswa();

//memanggil method tampilkan nama
echo $mahasiswa->tampilkan_nama();
echo $mahasiswa->tampilkan_nim();
