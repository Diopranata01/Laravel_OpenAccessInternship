<?php
namespace App\Repository;

use App\Models\Mahasiswa;

class MahasiswaRepository implements IMahasiswaRepository{

    public function getAllMahasiswa(){

        return Mahasiswa::all();
    }
}
