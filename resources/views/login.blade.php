<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">

    <title>ログイン</title>
</head>
<body>
    <nav class="site-header sticky-top py-1">
        <div class="container d-frex-colm flex-md-row text-center">
            <a href="/"><img  src="{{asset('/images/logo.png')}}" alt="ロゴ" style="widht: 70px; height: 70px;"></a>
        </div>
    </nav>
    <div class="form_wrapper mx-auto">
        <h1>ログイン</h1>
        @if(session('err_msg')) 
            <p class="text-danger d-flex align-items-center justify-content-center">
        {{session('err_msg')}}
            </p>  
        @endif 
        <form action="{{ url('/input_login')}}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="Input_Email">メールアドレス</label>
                <input type="email" class="form-control" name="Input_Email" id="Input_Email"  placeholder="メールアドレスを入力してください">
            </div>
            <div class="form-group">
                <label for="InputPassword">Password</label>
                <input type="password" class="form-control" name="InputPassword" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary" id="btn_check">ログイン</button>
        </form>
    </div>

    <footer class="container text-center overflow-hidden">©︎2021 Animus</footer>
</body>
</html>