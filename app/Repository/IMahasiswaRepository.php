<?php
namespace App\Repository;

interface IMahasiswaRepository{

    public function getAllMahasiswa();

    public function createMahasiswa(array $data);

    
}
