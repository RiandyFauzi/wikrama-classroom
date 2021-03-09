@extends('layouts.template')

@section('content')



<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Selamat Datang {{Auth::user()->name}}</h1>
    </div>

    @include('sweetalert::alert')
    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif

    @if (session('delete'))
    <div class="alert alert-danger">
      {{ session('delete') }}
    </div>
    @endif

    <div class="row">
      <div class="col-lg-12">
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
                    <option value="RPL XII-4">Cicurug 3</option>
                    <option value="RPL XII-4">Cicurug 2</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">nama guru</label>
                  <input name="name" type="text" class="form-control" id="name" value="{{Auth::user()->name}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">mapel</label>
                  <input name="mapel" type="text" class="form-control" id="name" value="{{Auth::user()->mapel}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">judul</label>
                  <input name="judul" type="text" class="form-control" id="judul">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Upload</label>
                  <input name="tgl_upload" type="date" class="form-control" id="name" value="{{Auth::user()->name}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Deadline</label>
                  <input name="tgl_deadline" type="date" class="form-control" id="name" value="{{Auth::user()->name}}">
                </div>
                <div textarea class="form-group">
                  <label for="exampleInputPassword1">deskripsi</label>
                  <textarea name="deskripsi" cols="150" rows="5"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">file</label>
                  <input name="file" type="file" class="form-control" id="exampleInputPassword1">
                </div>

           
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>



            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">


                  <div class="section-title">Table Tugas</div>
                  <div class="table-responsive">
                    <table class="table table-sm">
                      <thead>
                        <tr>
                          <th scope="col">id</th>
                          <th scope="col">kelas</th>
                          <th scope="col">name</th>
                          <th scope="col">mapel</th>
                          <th scope="col">judul</th>
                          <th scope="col">tgl_upload</th>
                          <th scope="col">tgl_deadline</th>
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
                          <td>{{$materi->mapel}}</td>
                          <td>{{$materi->judul}}</td>
                          <td>{{$materi->tgl_upload}}</td>
                          <td>{{$materi->tgl_deadline}}</td>
                          <td>{!! Str::limit($materi->deskripsi, 20) !!}</td>
                          <td>{{$materi->file}}</td>
                          <td>
                            <a class="btn btn-info" href="{{ route('materi.edit', $materi->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{ route('materi.delete', $materi->id)}}" onclick="return confirm('yakin akan di hapus?')">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>

              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>
</div>


<canvas id="myChart" height="158"></canvas>
</div>
</div>
</div>



@endsection