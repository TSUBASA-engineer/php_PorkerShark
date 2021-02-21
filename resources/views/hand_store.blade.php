<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/hand_store_style.css') }}">
    <title>ハンド登録</title>
</head>
<body>
<nav class="site-header sticky-top py-1">
        <div class="container clearfix d-frex-colm flex-md-row text-center">
            <a href="#"><img  class="logo" src="{{asset('/images/logo.png')}}" alt="ロゴ" style="widht: 70px; height: 70px;"></a>
            <form action="/my_page" method="GET">
                <button type="submit" class="btn btn-primary" >ホーム</button>
            </form>
            <form action="/" method="GET">
                <button type="submit" class="btn btn-primary" id="btn_logout">ログアウト</button>
            </form>
        </div>
    </nav>

<script>
document.getElementById("btn_logout").onclick =　function(){
    if(window.confirm('ログアウトでよろしいですか？')){
        return true
    } else {
        return false
    }
}
</script>
</body>
</html>