<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/hand_prevew_style.css') }}">
    <title>ハンド履歴</title>
</head>
<body>
    <nav class="site-header sticky-top py-1">
        <div class="container clearfix d-frex-colm flex-md-row text-center">
            <a href="my_page"><img  class="logo" src="{{asset('/images/logo.png')}}" alt="ロゴ" style="widht: 70px; height: 70px;"></a>
            <form action="/my_page" method="GET">
                <button type="submit" class="btn btn-primary" >ホーム</button>
            </form>
            <form action="/" method="GET">
                <button type="submit" class="btn btn-primary" id="btn_logout">ログアウト</button>
            </form>
        </div>
    </nav>
    <div class="hand_view">
        <table class="mx-auto">
                @foreach($card as $key => $value)
                <tr>
                    <td>
                        <p>{{$key + 1}}ハンド目</p>
                        <img src= "{{asset(sprintf('/images/cards/%s.png',$value[0])) }}" style="widht: 100px; height: 100px;">
                        <img src= "{{asset(sprintf('/images/cards/%s.png',$value[1])) }}" style="widht: 100px; height: 100px;">
                    </td>
                </tr>
                @endforeach
        </table>
    </div>

    <div class="hand_range">

    </div>

    <footer class="container text-center overflow-hidden">©︎2021 Animus</footer>

</body>
</html>