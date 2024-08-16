<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\UserRequest;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function profilemahasiswa(){
        $mahasiswas = Mahasiswa::where('user_id', auth()->user()->id)->get();
        // $mahasiswas = Mahasiswa::with('kelas' )->get();
        $kelasList = Kelas::all();

        return view('mahasiswa.profilemahasiswa', compact('mahasiswas', 'kelasList'));
    }
    
    public function store(Request $request)
    {
        // Ambil data dari request
        $data = [
            'mahasiswa_id' => $request->input('mahasiswa_id'),
            'kelas_id' => $request->input('kelas_id'),
            'keterangan' => $request->input('keterangan'),
        ];

        // Menyimpan permintaan ke dalam tabel requests
        UserRequest::create($data);

        // Update status request_edit pada tabel mahasiswa
        $mahasiswa = Mahasiswa::findOrFail($request->input('mahasiswa_id'));
        $mahasiswa->update(['request_edit' => true]);

        return redirect()->route('mahasiswa.index')->with('success', 'Permintaan edit telah dikirim.');
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        
        // Pastikan ini adalah ID (integer)
        $mahasiswa->kelas_id = $request->kelas_id; // $request->kelas seharusnya ID dari kelas

        $mahasiswa->tempat_lahir = $request->tempat_lahir;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->edit = 0; // Set edit to 0 after update
        $mahasiswa->save();

        // Hapus entri request terkait mahasiswa
        UserRequest::where('mahasiswa_id', $id)->delete();
        
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui');
    }
}
