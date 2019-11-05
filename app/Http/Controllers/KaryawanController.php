<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;

class KaryawanController extends Controller
{
    function index(){
        $data=Karyawan::all();
        foreach($data as $tampil);
        echo 'nama : '.$tampil->nama;      
        echo '<br/>jabatan : '.$tampil->jabatan;   
        echo '<br/>umur : '.$tampil->umur;      
        echo '<br/>alamat : '.$tampil->alamat;    
        echo '<br/>foto : '.$tampil->foto;
    }

    function store(Request $request){
        Karyawan::create([
            'nama'      => $request->nama,      
            'jabatan'   => $request->jabatan,   
            'umur'      => $request->umur,      
            'alamat'    => $request->alamat,    
            'foto'      => $request->foto      
        ]);
    }

    function delete($id){
        Karyawan::where('id', $id)->delete();
    }

    function update(Request $request, $id){
        $data=[
            'nama'      => $request->nama,      
            'jabatan'   => $request->jabatan,   
            'umur'      => $request->umur,      
            'alamat'    => $request->alamat,    
            'foto'      => $request->foto      
        ];
        Karyawan::where('id', $id)->update($data);
    }
}
