<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/mypage_style.css') }}">
    <title>マイページ</title>
</head>
<body>
    <nav class="site-header sticky-top py-1">
        <div class="container clearfix d-frex-colm flex-md-row text-center">
            <a href="my_page"><img  class="logo" src="{{asset('/images/logo.png')}}" alt="ロゴ" style="widht: 70px; height: 70px;"></a>
            <form action="/delete" method="GET">
                <button type="submit" class="btn btn-primary" id="btn_delete" style="margin-left: 40px;">アカウント削除</button>
            </form>
            <form action="/hand_store" method="GET">
                <button type="submit" class="btn btn-primary">ハンド登録</button>
            </form>
            <form action="/hand_prevew" method="GET">
                <button type="submit" class="btn btn-primary">ハンド履歴</button>
            </form>
            <form action="/" method="GET">
                <button type="submit" class="btn btn-primary" id="btn_logout">ログアウト</button>
            </form>
        </div>
    </nav>

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md3 text-center bg-light">
            <p class="d-flex align-items-center justify-content-center">
                ログイン：{{$name}}
            </p>
            <h1 class="display-4 font-weight-nomal">PorkerShark</h1>
            <p class="lead font-weight-nomar">さあこれから戦いに挑もう！</p>
                <h1>これまでのVPIP：{{$count}}％</h1>
                <h2>    通算ハンド：{{$all_count}}</h2>
                <h2>    参加ハンド：{{$all_join}}</h2>
                <p>※VPIPとはブラインド（BB・SB）以外で自主的なポットへの参加率</p>
        </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="footer_container">
            <span class="text-muted"> ©︎2021 Animus</span>
        </div>
    </footer>

<script>
    document.getElementById("btn_logout").onclick =　function(){
        if(window.confirm('ログアウトでよろしいですか？')){
            return true
        } else {
            return false
        }
    }

    document.getElementById("btn_delete").onclick =　function(){
        if(window.confirm('全ての情報が削除されますがよろしいですか？')){
            return true
        } else {
            return false
        }
    }
</script>
</body>
</html>