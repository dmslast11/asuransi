<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('asetlog/css/style.css') }}">
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="{{asset('asetlog/images/Logo.jpg')}}" alt="">
        </div>
        <div class="text-center mt-4 name">
            Log In
        </div>
        <form action="{{ route('postlogin') }}" method="POST" class="p-3 mt-3">
			{{ csrf_field() }}
            <div class="form-field d-flex align-items-center">
                <span class="fa fa-user"></span>
                <input type="text" name="nis" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fa fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
