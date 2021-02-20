<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/store_fin_style.css') }}">

    <title>登録完了</title>
</head>
<body>
    <nav class="site-header sticky-top py-1">
        <div class="container d-frex-colm flex-md-row text-center">
            <a href="/"><img  src="{{asset('/images/logo.png')}}" alt="ロゴ" style="widht: 70px; height: 70px;"></a>
        </div>
    </nav>

    <h1>登録完了</h1>
    <div class="check_wrapper">
        <div class="row">
            <label class="col-sm-2">名前：</label>
            <div class="col-sm-10">{{$data['name']}}</div>
            <label class="col-sm-2">メールアドレス：</label>
            <div class="col-sm-10">{{$data['email']}}</div>
        </div>
    </div>
</body>
</html>