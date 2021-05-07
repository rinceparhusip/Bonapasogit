
<!-- Sing in  Form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="col-md-4 offset-md-4 mt-5">
        <div class="card">
        <div class="card-header">
            <h6 class="text-center">Selamat Datang di Aplikasi Ujian Online</h6>
            <h6 class="text-center">Silahkan Login</h6>
        </div>
                
        <form action="{{ route('login') }}" method="post">

        @csrf

        <div class="card-body">
            <label for="your_name"><strong>Username</strong><i class="zmdi zmdi-account material-icons-name"></i></label>
            <input id="email" type="email" placeholder="Username" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <br>
  
            <label for="your_pass"><strong>Password</strong><i class="zmdi zmdi-lock"></i></label>
            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class = "card-footer">    
        <p class="text-center">Belum punya akun? daftar <a href="">disini</a></p>
            <button type="submit" class="btn btn-success btn-block">Sign In</button>
        </div>
        
        </form>
        </div>
    </div>
    </div>
</body>
</html>
