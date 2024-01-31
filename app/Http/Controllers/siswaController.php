<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'nis' => 'required',
            'nama_siswa' => 'required',
            'jurusan' => 'required',
            'tempat_pkl' => 'required',
            'alamat_pkl' => 'required'
        ]);

        $siswa = new Siswa;

        $siswa->nis = $request->input('nis');
        $siswa->nama_siswa = $request->input('nama_siswa');
        $siswa->jurusan = $request->input('jurusan');
        $siswa->tempat_pkl = $request->input('tempat_pkl');
        $siswa->alamat_pkl = $request->input('alamat_pkl');

        $siswa->save();

        return redirect('/siswa')->with('success', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, Siswa $siswa)
    {
        $validateData = $request->validate([
            'nis' => 'required',
            'nama_siswa' => 'required',
            'jurusan' => 'required',
            'tempat_pkl' => 'required',
            'alamat_pkl' => 'required',
        ]);
    
        Siswa::where('nis', $siswa->nis)->update($validateData);
    
        return redirect('/siswa')->with('success', 'Data telah diupdate');  
    }

    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->nis);
        return redirect('/siswa')->with('success', 'Data Telah Dihapus');
    }
}
