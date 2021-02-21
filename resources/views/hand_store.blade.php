<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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

    
    

    <div class="form_wrapper mx-auto border">
        <table>
            <tr>
                @for ($i = 1; $i <= 13; $i++)
                <td><img src= "{{asset(sprintf('/images/card_s/s_%s.png',$i)) }}" style="widht: 80px; height: 80px;"></td>
                @endfor
            </tr>
            
            <tr>
                 @for ($i = 1; $i <= 13; $i++)
                <td><img src= "{{asset(sprintf('/images/card_h/h_%s.png',$i)) }}" style="widht: 80px; height: 80px;"></td>
                @endfor
            </tr>

            <tr>
                <td>ハート</td>
            </tr>

            <tr>
                <td>ダイヤ</td>
            </tr>
        </table>
    </div>



    <div class="btns_box">
    </div>

    <button type="submit" class="btn btn-primary" id="button_test">読み込み</button>



<footer class="container text-center overflow-hidden">©︎2021 Animus</footer>    

<script>

document.getElementById("btn_logout").onclick =　function(){
    if(window.confirm('ログアウトでよろしいですか？')){
        return true
    } else {
        return false
    }
}


$(function(){
  
  $('#button_test').on('click', function(){
    $('.btns_box').append(
      "<img src='images/logo.png'>"
    );
  });
});

</script>
</body>
</html>