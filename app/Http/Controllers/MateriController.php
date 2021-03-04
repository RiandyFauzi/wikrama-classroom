<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materi;

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



        Materi::create([

            'kelas' => $request->kelas,
            'name' => $request->name,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file' => $request->file,


        ]);
        return redirect('/materi');
    }
    public function edit($id)
    {
        $materi =  Materi::find($id);
        return view('guru.materi.edit', compact('materi'));
    }
    public function update(Request $request, $id)
    {
        $materi = Materi::find($id);
        $materi->update([

            'kelas' => $request->kelas,
            'name' => $request->name,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file' => $request->file,



        ]);
        return redirect('/materi');
    }
    public function destroy($id)
    {
        $materi = \App\Materi::find($id);
        $materi->delete($materi);
        return redirect('/materi')->with('sukses', 'Materi Dihapus!');
    }
}
