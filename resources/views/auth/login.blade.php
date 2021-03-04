<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selamat Datang! | Login</title>
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
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="login-wrapper my-auto">
                            <h1 class="login-title">Wikrama Classroom</h1>
                            <form action="#!">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input placeholder="Username" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password">Password</label>

                                    <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror <span class="lnr lnr-phone-handset"></span>
                                </div>

                                <div class="container-login100-form-btn m-t-17">
                                <button type="submit" class="btn btn-block login-btn">
                                    Login
                                </button>
                            </div>

                            <center>
                                <p class="login-wrapper-footer-text"><a href="/register" class="text-reset">Register here</a></p>
                            </center>
                          
                        </div>
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <br><br><br><br>
                    </form>
                    <img src="template_login/assets/images/login.jpeg" alt="login image" class="login-img">
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>