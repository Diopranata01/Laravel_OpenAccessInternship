<?php
namespace App\Repository;

interface MahasiswaRepository{

    public function getAllMahasiswa();

    public function createMahasiswa($data);

    public function get($id);
    
    public function editMahasiswa($id, $data);
    
    public function deleteMahasiswa($id);
    
}
