<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materi;
use Alert;

class MateriController extends Controller
{
    public function index()
    {
        $materi =  Materi::all();
        return view('guru.materi.index', compact('materi'));
    }
    public function create(Request $request)
    {
        $request->validate([

            'kelas' => 'required',
            'name' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'file' => 'required',

        ]);


        $file = $request->file;
        $namafile = $file->getClientOriginalName();
        $file->move(public_path()."/img", $namafile);
         Materi::create([
          
           
            'kelas' => $request->kelas,
            'name' => $request->name,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file' =>  $namafile,
           
        ]);
        
      Alert::success('Succes','Tugas berhasil dibuat');
        return redirect('/materi');
    }
    public function edit($id)
    {
        $materi =  Materi::find($id);
        return view('guru.materi.edit', compact('materi'));
    }
    public function update(Request $request, $id)
   
    {
        $materi = Materi::where('id',$id)->first();
        $materi->kelas = request('kelas');
        $materi->name = request('name');
        $materi->judul = request('nama_berita');
        $materi->deskripsi = request('deskripsi');
        if(request()->file('file') == "")
        {
            $materi->file = $materi->file;
        } else {
            if(request()->hasFile('file'))
            {
                $file = 'img'.$materi->file;
                if(is_file($file))
                {
                    unlink($file);
                }
                $file = request()->file('file');
                $filename = time().rand(100,999).".".$file->getClientOriginalName();
                request()->file('file')->move('img', $filename);
                $materi->file = $filename;
            }
        }

        $materi->save();
        session()->flash('status', 'Data Berhasil Diupdate');
        
                
              
   
          return redirect('/materi');
   
    }
    public function destroy($id)
    {
        $materi = \App\Materi::find($id);
        $materi->delete($materi);
        return redirect('/materi')->with('delete', 'Materi Dihapus!');
    }
}
