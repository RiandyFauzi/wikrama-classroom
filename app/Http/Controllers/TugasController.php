<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materi;
use App\Tugas;

class TugasController extends Controller
{


    public function tugas($id)
    {
        
        $tugas = Tugas::find($id);
       return view('siswa.tugas.index', compact('tugas'));
    }


    public function home()
    {
    
        return view('home');
    }

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

    

    public function create(Request $request)
    {
        $request->validate([

            'nis' => 'required',
            'name' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'file_siswa' => 'required',
            'keterangan'=> 'required',
            
                
        ]);

        
                   
            $file = $request->file_siswa;
            $namafile = $file->getClientOriginalName();
            $file->move(public_path()."/siswa", $namafile);
             Tugas::create([
              
            'nis' => $request->nis,
            'name' => $request->name,            
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,
            'file_siswa' => $request->file_siswa,
            'keterangan' => $request->keterangan,
            
        ]);
      


      
        return back();
    }
    public function show($id)
    {
        return view('siswa.tugas.index',[
            'materi' =>  Materi::find($id),
            'tugas' => Tugas::find($id),
        
  
          ]);
      
    }

    public function show2($id)
    {
        $materi = Materi::find($id);
       return view('siswa.tugas.laporan', compact('materi'));
    }
}
