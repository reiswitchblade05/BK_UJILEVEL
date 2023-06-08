<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    <link href="https://fonts.cdnfonts.com/css/graphik" rel="stylesheet">
</head>

<body>

    <body>
        <div class="container" id="container">
            <div class="form-container sign-in-container">
                <form action="{{route('postlogin')}}" method="POST">
                    {{ csrf_field() }}
                    <h1>SIGN IN</h1>
                    <input type="email" placeholder="Email" name="email" />
                    <input type="password" placeholder="Password" name="password" />
                    <button style="margin-top: 20px;">Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">
                        <img src="{{ asset('/images/logo.png') }}" style="width: 250px; margin-bottom: 30px;" alt="">
                        <h1>Welcome Back!</h1>
                        <p>Hello there! Glad to see you back! Hope you're still in touch with us :).</p>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>