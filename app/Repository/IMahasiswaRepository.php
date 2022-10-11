<?php
namespace App\Repository;

interface IMahasiswaRepository{

    public function getAllMahasiswa();

    //create and take in the array of data
    public function createMahasiswa(array $data);

    
}
