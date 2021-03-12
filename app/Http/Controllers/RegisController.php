<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Alert;
class RegisController extends Controller
{
    public function index()
    {
        $register =  User::where('level', 'siswa')->get();
        return view('siswa.register.index', compact('register'));
    }
    public function create(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'level' => 'required',
            'nis' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
                
        ]);

        User::create([
                     
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => $request->level,
            'nis' => $request->nis,
            'rombel' => $request->isi_trombelitle,
            'rayon' => $request->rayon,
            
        ]);
      


      Alert::success('Succes','Data Siswa berhasil dibuat');
        return redirect('/register');
    }
    public function edit($id)
    {
        $register =  User::find($id);
        return view('siswa.register.edit', compact('register'));
    }
    public function update(Request $request, $id)
   
    {
      
       $register = User::find($id);
       $register->update([
           
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'level' => $request->level,
            'nis' => $request->nis,
            'rombel' => $request->rombel,
            'rayon' => $request->rayon,
          
        ]);
        return redirect('/register');
   
    }
    public function destroy($id)
    {
        $register = User::find($id);
        $register->delete($register);
        
        Alert::success('Succes','Data Dihapus');
        return redirect('/register');
    }

}
