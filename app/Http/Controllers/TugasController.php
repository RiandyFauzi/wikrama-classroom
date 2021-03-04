<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materi;
use App\Tugas;

class TugasController extends Controller
{
    public function rombel($rombel)
    {
        $materi = Materi::where('kelas', $rombel)->get();
       return view('siswa.tugas.dashboard', compact('materi'));
    }

    public function dashboard($rombel)
    {
        return view('siswa.tugas.dashboard',[
            
            'materi' => Materi::where('kelas',$rombel)->get(),
            // 'tugas' => Tugas::where('',$rayon)->get(),
          ]);
      
    }

    public function dashboard2($rayon)
    {
        return view('siswa.tugas.dashboard',[
            
            'materi' => Materi::where('kelas',$rayon)->get(),
            // 'tugas' => Tugas::where('',$rayon)->get(),
          ]);
      
    }

    public function index()
    {
        return view('siswa.tugas.index',[
            'materi' => Materi::where('kelas',auth()->user()->rombel)->get(),
            
            // 'tugas' => Tugas::all(),
          ]);
      
    }
    public function show($id)
    {
        $materi = Materi::find($id);
       return view('siswa.tugas.index', compact('materi'));
    }
}
