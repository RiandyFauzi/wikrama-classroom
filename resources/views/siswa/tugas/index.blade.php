@extends('layouts.template')

@section('content')


<div class="row">
  <div class="col-lg-8">
    <div class="card" style="background-color: white;">
      <div class="card-header">
        <h4>{{ $materi->judul }}</h4>
      </div>
      <div class="card-body">
        <div class="container">
          <p>{{ $materi->deskripsi }}</p>
          <p>{{ $materi->file }}</p>
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
      <div class="card-body" id="top-5-scroll">

      
      <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Input Tugas
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
        

        </ul>
      </div>
      <div class="card-footer pt-3 d-flex justify-content-center">
       
      
      </div>
    </div>
  </div>



  @endsection