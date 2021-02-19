<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index_style.css') }}">

    <title>Document</title>
</head>
<body>
    <nav class="site-header sticky-top py-1">
        <div class="container d-frex-colm flex-md-row text-center">
            <a href="#">ロゴ</a>
        </div>
    </nav>

    <h1>新規登録</h1>

    <form>
        <div class="form-group">
            <label for="Input_Email">メールアドレス</label>
            <input type="email" class="form-control" id="Input_Email" aria-describedby="emailHelp" placeholder="メールアドレスを入力してください">
            <label id="emailHelp" class="form-text text-muted">入力頂いたメールアドレスは他所では使用致しません</label>
        </div>
    </form>
</body>
</html>