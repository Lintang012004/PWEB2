<?php

include_once '../models/Mahasiswa.php';

class MahasiswaController{
    private $model; //untuk return di construct

    public function __construct($db)
    {
        $this->model=new Mahasiswa($db);
    }

    public function getAllMahasiswa()
    {
        return $this->model->getAllMahasiswa();//menarik field field dari mahasiswa
    }
}