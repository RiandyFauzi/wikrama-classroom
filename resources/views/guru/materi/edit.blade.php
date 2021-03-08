@extends('layouts.template')

@section('content')

<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Selamat Datang {{Auth::user()->name}}</h1>
		</div>

		<div class="col-lg-8">
			<div class="card">
				<div class="card-header">
					<h4>Edit Tugas</h4>
				</div>
				<div class="card-body">

					<div>

						<div class="row" style="margin-left: -150px;">
						</div>

						<div class="row" style="margin-left: -150px;">
							<div class="col-md-8 offset-sm-2">
								<form action="{{url('materi.update', $materi->id)}}" method="POST">
									{{csrf_field()}}

									<div class="form-group">
										<label for="exampleInputPassword1">kelas</label>
										<select name="kelas" class="form-control" value="{{$materi->kelas}}">
											<option value="RPL XII-1">RPL XII-1</option>
											<option value="RPL XII-2">RPL XII-2</option>
											<option value="RPL XII-3">RPL XII-3</option>
											<option value="RPL XII-4">RPL XII-4</option>


										</select>

										<div class="form-group">
											<label for="exampleInputPassword1">judul</label>
											<input name="judul" type="text" class="form-control" id="exampleInputPassword1" value="{{$materi->judul}}">
										</div>

										<div class="form-group">
											<label for="exampleInputPassword1">deskripsi</label>
											<input name="deskripsi" type="text" class="form-control" id="exampleInputPassword1" value="{{$materi->deskripsi}}">
										</div>

										<div class="form-group">
											<label for="thumb">Update Image</label>
											<input type="file" name="file" id="thumb" class="form-control">
										</div>



									</div>
							</div>


							<button type="submit" style="margin-left: 70%;" class="btn btn-primary mb-3">save</button>
							</form>

						</div>
					</div>
					<canvas id="myChart" height="158"></canvas>
				</div>
			</div>
		</div>
	</section>
	@endsection