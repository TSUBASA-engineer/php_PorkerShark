<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index_style.css') }}">

    <title>トップページ</title>
</head>
<body>
    <nav class="site-header sticky-top py-1">
        <div class="container d-frex-colm flex-md-row text-center">
            <a href="#">ロゴ</a>
        </div>
    </nav>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md3 text-center bg-light">
        <h1 class="display-4 font-weight-nomal">PorkerShark</h1>
        <p class="lead font-weight-nomar">これからPorkerで周りとの差をつける準備は出来てるか？</p>
        <a class="btn btn-outline-secondary">ログイン</a>
        <a class="btn btn-outline-secondary">新規登録</a>
    </div>

    <div class="intro d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md5 text-center text-white overflow-hidden ">
            <div class="my-3 py-3">
                <h2 class="display-5"> ①まずは自分のレンジ（参加手札）を確認してみよう！</h2>
            </div>
        </div>
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden border">
            <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden ">
                <h2>②参加率をしっかり確認しよう！</h2>
            </div>
        </div>
    </div>

    <footer class="container py-5 text-center overflow-hidden">フッター情報</footer>
    
</body>
</html>