<?php
namespace App\Repository;
use App\Models\Mahasiswa;
use App\Repository\MahasiswaRepository;

class EloquentMahasiswaRepository implements MahasiswaRepository{

    public function getAllMahasiswa(){
        //changes 1, get the db into the repository Mahasiswa Model
        return Mahasiswa::all();
    }

    public function createMahasiswa($data){
        Mahasiswa::create($data);
    }

    public function get($id){
        return Mahasiswa::find($id);
    }

    public function editMahasiswa($id, $data){

        Mahasiswa::where('id', $id)->update($data);
        // $mahasiswa = Mahasiswa::find($id);

        // $mahasiswa->name = $data['name'];
        // $mahasiswa->nim = $data['nim'];
        // $mahasiswa->fakultas = $data['fakultas'];

        // return $mahasiswa->save();
        
    }

    public function deleteMahasiswa($id){
        return Mahasiswa::find($id)->delete();
    }

}
