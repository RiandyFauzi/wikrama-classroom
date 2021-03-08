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
						<div>
                            <form action="{{route('register.update')}}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="form-group">
                                    <label for="exampleInputPassword1">name</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukan Nama Siswa">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukan Email Siswa">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukan Password Siswa">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">level</label>
                                    <input name="level" type="textarea" class="form-control" id="level" value="Siswa" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">nis</label>
                                    <input name="nis" type="nis" class="form-control" id="exampleInputPassword1" placeholder="Masukan NIS Siswa">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">rombel</label>
                                    <select name="kelas" class="form-control">
                                        <option disabled selected>Masukan Rombel Siswa</option>
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
                                        <option value="TKJ X-1">TKJ X-1</option>
                                        <option value="TKJ X-2">TKJ X-2</option>
                                        <option value="TKJ X-3">TKJ X-3</option>
                                        <option value="TKJ X-4">TKJ X-4</option>
                                        <option value="TKJ XI-1">TKJ XI-1</option>
                                        <option value="TKJ XI-2">TKJ XI-2</option>
                                        <option value="TKJ XI-3">TKJ XI-3</option>
                                        <option value="TKJ XI-4">TKJ XI-4</option>
                                        <option value="TKJ XII-1">TKJ XII-1</option>
                                        <option value="TKJ XII-2">TKJ XII-2</option>
                                        <option value="TKJ XII-3">TKJ XII-3</option>
                                        <option value="TKJ XII-4">TKJ XII-4</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">rayon</label>
                                    <select name="kelas" class="form-control">
                                        <option disabled selected>Masukan Rombel Siswa</option>
                                        <option value="Cicurug 1">Cicurug 1</option>
                                        <option value="Cicurug 2">Cicurug 2</option>
                                        <option value="Cicurug 3">Cicurug 3</option>
                                        <option value="Cicurug 4">Cicurug 4</option>
                                    </select>
                                </div>
                        </div>
                        
					</div>
					<canvas id="myChart" height="158"></canvas>
				</div>
			</div>
		</div>
	</section>
	@endsection