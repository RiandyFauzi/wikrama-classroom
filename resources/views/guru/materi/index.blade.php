@extends('layouts.template')

@section('content')

<div class="row">
  <div class="col-lg-8">
    <div class="card">
      <div class="card-header">
        <h4>Buat Tugas</h4>
      </div>
      <div class="card-body">

        <div>
          <form action="{{route('materi.create')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}


            <div class="form-group">
              <label for="exampleInputPassword1">kelas</label>
              <select name="kelas" class="form-control">
                <option value="RPL XII-1">RPL X-1</option>
                <option value="RPL XII-2">RPL X-2</option>
                <option value="RPL XII-3">RPL X-3</option>
                <option value="RPL XII-4">RPL X-4</option>
                <option value="RPL XII-1">RPL XI-1</option>
                <option value="RPL XII-2">RPL XI-2</option>
                <option value="RPL XII-3">RPL XI-3</option>
                <option value="RPL XII-4">RPL XI-4</option>
                <option value="RPL XII-1">RPL XII-1</option>
                <option value="RPL XII-2">RPL XII-2</option>
                <option value="RPL XII-3">RPL XII-3</option>
                <option value="RPL XII-4">RPL XII-4</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">nama guru</label>
              <input name="name" type="text" class="form-control" id="name" value="{{Auth::user()->name}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">judul</label>
              <input name="judul" type="text" class="form-control" id="judul">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">deskripsi</label>
              <input name="deskripsi" type="textarea" class="form-control" id="deskripsi">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">file</label>
              <input name="file" type="text" class="form-control" id="file">
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>


        <table class="table">
          <thead class="thead-light">
            <tr>

              <th scope="col">id</th>
              <th scope="col">kelas</th>
              <th scope="col">name</th>
              <th scope="col">judul</th>
              <th scope="col">deskripsi</th>
              <th scope="col">file</th>


            </tr>
          </thead>
          <tbody>
            @foreach ($materi as $materi)
            <tr>
              <td>{{$materi->id}}</td>
              <td>{{$materi->kelas}}</td>
              <td>{{$materi->name}}</td>
              <td>{{$materi->judul}}</td>
              <td>{{$materi->deskripsi}}</td>
              <td>{{$materi->file}}</td>
              <td>
                <a class="btn btn-primary" href="{{ route('materi.edit', $materi->id)}}">Edit</a>
                <a class="btn btn-primary" href="{{ route('materi.delete', $materi->id)}}" onclick="return confirm('yakin akan di hapus?')">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <canvas id="myChart" height="158"></canvas>
      </div>
    </div>
  </div>



  @endsection