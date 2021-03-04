<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selamat Datang! | Register</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="template_login/assets/css/login.css">
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 login-section-wrapper">
                    <div class="brand-wrapper">
                        <img src="template_login/assets/images/logowk.png" alt="logo" class="logo">
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="login-wrapper my-auto">
                            <h1 class="login-title">Wikrama Classroom</h1>
                            <form action="#!">
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukan Nama Anda">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukan Email Anda">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="form-group mb-4">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Masukan Password Anda">
     
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="password">Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="Masukan Kembali Password Anda">
                                </div>

                                <div class="form-group">
                                    <label for="level">Level</label>
                                    <select name="level" class="form-control">                                  
                                        <option value="siswa">Siswa</option>
                                        <option value="guru">Guru</option>
                                    </select>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="nis">Nis</label>
                                    <input id="nis" type="text" class="form-control" name="nis" value="" placeholder="Masukan Nis Anda">
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="mapel">Mapel</label>
                                    <input id="mapel" type="text" class="form-control" name="mapel"  value="" placeholder="Masukan Mapel Anda">
                                </div>

                              

                                <div class="form-group">
                                    <label for="rombel">Rombel</label>
                                    <select name="rombel" class="form-control">
                                        <option value=""></option>
                                        <option value="RPL XII-1">RPL XII-1</option>
                                        <option value="RPL XII-2">RPL XII-2</option>
                                        <option value="RPL XII-1">RPL XII-3</option>
                                        <option value="RPL XII-2">RPL XII-4</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="rayon">Rayon</label>
                                    <select name="rayon" class="form-control">
                                        <option value=""></option>
                                        <option value="Cicurug 2">Cicurug 1</option>
                                        <option value="Cicurug 2">Cicurug 2</option>
                                        <option value="Cicurug 2">Cicurug 3</option>
                                        <option value="Cicurug 3">Cicurug 4</option>

                                    </select>
                                </div>

                                <div>

                                    <div class="">
                                        <button type="submit" class="btn btn-block login-btn" href="{{ route('login') }}">{{ __('Register') }}
                                        </button>
                                    </div>


                                </div>
                        </div>
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <br><br><br><br>
                    </form>
                    <img src="template_login/assets/images/login.jpeg" alt="login image" class="regist-img">
                </div>
            </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>