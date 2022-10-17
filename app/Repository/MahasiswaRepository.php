<?php
namespace App\Repository;

interface MahasiswaRepository{

    public function getAllMahasiswa();

    public function createMahasiswa($data);

<<<<<<< HEAD
        //changes 1, get the db into the repository Mahasiswa Model
        return Mahasiswa::latest()-> get();
    }

    public function createMahasiswa(array $data){

        // bisa sprt ini $mahasiswa = new Mahasiswa();
        Mahasiswa::insert([
            'nim' => $data['nim'], //request dari store function
            'name' => $data['name'],
            'fakultas' => $data['fakultas']
        ]);

    }
=======
    public function get($id);
    
    public function editMahasiswa($id, $data);
    
    public function deleteMahasiswa($id);
    
>>>>>>> 5f2c9e4c770ad4174878d37215b618b38cfc6ef3
}
