<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
class siswaController extends Controller
{
    public function index()
    {
        $siswa=siswa::all();
    return view('siswa.index',compact("siswa"));
    }

    public function store(Request $request)
    {
        $data_validasi = $request->validate([
            "nik" => 'required', 
            "nama_siswa" => 'required', 
            "jurusan" => 'required',  
            "nama_tempat_pkl" => 'required',
            "alamat_pkl" => 'required', 
        ]);
        siswa::create($data_validasi);
        return redirect()->route('siswa.index');
    
       
    }
    
    
    public function create()
    {
        $siswa = siswa::all();
        return view("siswa.create",compact("siswa"));
    
    }
    public function destroy(siswa $siswa)
    {
        
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
    public function edit(siswa $siswa)
    {  

        return view("siswa.edit")->with([
         
            'siswa' => $siswa,
          
        ]);
    }
    public function update(Request $request, siswa $siswa)
    {
        $siswa->update($request->all());
        return redirect()->route('siswa.index');
    }
    
}
