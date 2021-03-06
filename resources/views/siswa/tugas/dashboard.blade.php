@extends('layouts.template')

@section('content')

<div class="row">
<div class="col-lg-8">
    <div class="card"  style="background-color: white; margin-left: 65px; width: 800px">
        <div class="card-header">
            <h4> Tampilan Tugas</h4>
        </div>
      
        <div class="card-body" style="background-color: white;">

            <div class="container">
            @foreach($materi as $materi)
                <div class="card" style="height: 50px">
                <i class="far fa-file-alt" style="margin-left: 10px; margin-top: 20px"></i>
                <div class="container">
                    <div class="card-header" style="margin-top: -50px;">
                        <h4>{{ $materi->name }} menugaskan "{{ $materi->judul}}"</h4>
                        <a href="/tugas/{{ $materi->id }}" class="stretched-link"></a>
                    </div>
                    <div class="card-body" style="margin-top: -45px;">
                        This is some text within a card body.
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
            
           
            <canvas id="myChart" height="158"></canvas>
        </div>
    </div>
    </div>
    

            
 

    @endsection