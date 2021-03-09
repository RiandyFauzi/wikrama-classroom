@extends('layouts.template')

@section('content')

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Selamat Datang {{Auth::user()->name}}</h1>
    </div>

    <div class="row">
      <div class="col-lg-8">
        <div class="card" style="background-color: white;">
          <div class="card-header">
            <h4>{{ $materi->judul }}</h4>
          </div>
          <div class="card-body">
            <div class="container">
              <p>{{ $materi->deskripsi }}</p>


              <div class="card" style="width:300px; height:35px; margin-top: 40px">
                <i class="far fa-file-alt" style="margin-left: 7px; margin-top: 10px; width:100px"></i>

                <div class="card-header" style="margin-top: -40px;">
                  <a target="_blank" href="/tugas/laporan/{{ $materi->id }}" class="stretched-link">{{$materi->file}}</a>
                </div>


              </div>




            </div>
            <canvas id="myChart" height="158"></canvas>
          </div>
        </div>
      </div>


      <div class="col-lg-4">
        <div class="card gradient-bottom">
          <div class="card-header">
            <h4>Kumpulkan Tugas</h4>
          </div>



          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Input Tugas
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

              <div>
                <form action="{{route('tugas.create')}}" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}


                  <div class="container">
                    
                      <input name="nis" type="text" class="form-control" id="level" value="111" hidden>
                     
                      <input name="name" type="text" class="form-control" id="level" value="siswa" hidden>
                  
                      <input name="rombel" type="text" class="form-control" id="level" value="siswa" hidden>
                 
                      <input name="rayon" type="text" class="form-control" id="exampleInputPassword1"  value="siswa" hidden>
                
                    <div class="form-group">
                      <label for="exampleInputPassword1">file</label>
                      <input name="file_siswa" type="file" class="form-control" id="exampleInputPassword1" placeholder="Masukan NIS Siswa">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">keterangan</label>
                      <input name="keterangan" type="nis" class="form-control" id="exampleInputPassword1" placeholder="Masukan NIS Siswa">
                    </div>

                    <button type="submit" href="{{ route('tugas.index', $materi->id)}}" class="btn btn-primary">Submit</button>
                  </div>


              </div>

            </div>
          </div>


          <div class="card-body" id="top-5-scroll">
            <div class="table-responsive">
              <table class="table table-sm">
                <thead>
                  <tr>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ $tugas->file_siswa}}</td>
                    <td> <a class="btn btn-danger" href="{{ route('materi.delete', $materi->id)}}" onclick="return confirm('yakin akan di hapus?')">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="table-responsive">
              <table class="table table-sm">
                <thead>
                  <tr>



                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ $tugas->keterangan}}</td>
                    <td> <a class="btn btn-danger" href="{{ route('materi.delete', $materi->id)}}" onclick="return confirm('yakin akan di hapus?')">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>






            </ul>
          </div>
          <div class="card-footer pt-3 d-flex justify-content-center">


          </div>
        </div>
      </div>
  </section>
</div>



@endsection