<?php

class Manusia
{
    public $nama_saya;
    protected $umur="19";

    //method
    public function panggil_nama($saya)
    {
        $this->nama_saya = $saya;
    }
    public function panggil_umur()
    {
        return  $this->umur;
    }
}

//subclass dari manusia
class Mahasiswa extends Manusia
{
    public $nama_mahasiswa;
    private $prodi="Teknik Informatika";

    public function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }
    public function panggil_prodi ()
    {
        return $this->prodi;
    }
}

//instansiasi class mahasiswa
$informatika = new Mahasiswa();
$informatika->panggil_nama("Lintang Ayu ");
$informatika->panggil_mahasiswa("Kinasih Azzahro");

//tampilkan isi dari properti
echo "Nama Depan Saya : " . $informatika->nama_saya . "</br>";
echo "Nama Belakang : " . $informatika->nama_mahasiswa . "</br>";
echo "Umur Saya : " . $informatika->panggil_umur() . "</br>";
echo "Prodi Saya : " . $informatika->panggil_prodi() . "</br>";
