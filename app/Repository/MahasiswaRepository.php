<?php
namespace App\Repository;

interface MahasiswaRepository{

    public function getAllMahasiswa();

    //create and take in the array of data
    public function createMahasiswa(array $data);

    public function get($id);
    
    public function editMahasiswa($id, $data);
    
    public function deleteMahasiswa($id);
    
}
