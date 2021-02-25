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
            <a href="my_page"><img  class="logo" src="{{asset('/images/logo.png')}}" alt="ロゴ" style="widht: 70px; height: 70px;"></a>
            <form action="/my_page" method="GET">
                <button type="submit" class="btn btn-primary" >ホーム</button>
            </form>
            <form action="/" method="GET">
                <button type="submit" class="btn btn-primary" id="btn_logout">ログアウト</button>
            </form>
        </div>
    </nav>

    
    
    
    <div class="form_wrapper clearfix d-frex-colm flex-md-row  border">
            <div class="comment">
                <p class="text-center">ティルト（感情的）になるのを防ぐためにあえてボタンを小さくしてます！</p>
                <p class="text-center">参加しない時・ブラインド（SB・BB）では何も入力せずハンド登録を押してください。</p>
                @if(session('commit')) 
                <p class="text-danger d-flex align-items-center justify-content-center">
                {{session('commit')}}
                </p>  
                @endif 
                <div class="preview" style="text-align: center; padding-bottom: 15px; contant: ''; "></div>
            </div>
            <form action="/hand_put" method="GET">
            <table class="mx-auto">
                <tr>
                    @for ($i = 1; $i <= 13; $i++)
                    <td>
                        <input type="checkbox" name={{$i}} id={{$i}}>
                            <img src= "{{asset(sprintf('/images/cards/%s.png',$i)) }}" style="widht: 100px; height: 100px;">
                        </input>
                    </td>
                    @endfor
                </tr>
            
                <tr>
                    @for ($i = 14; $i <= 26; $i++)
                    <td>
                        <input type="checkbox" name={{$i}} id={{$i}}>
                                <img type="image" src= "{{asset(sprintf('/images/cards/%s.png',$i)) }}" name={{$i}} id=1 style="widht: 100px; height: 100px;">
                        </input>
                    </td>
                    @endfor
                </tr>

                <tr>
                    @for ($i = 27; $i <= 39; $i++)
                    <td>
                        <input type="checkbox" name={{$i}} id={{$i}}>
                            <img type="image" src= "{{asset(sprintf('/images/cards/%s.png',$i)) }}" name={{$i}} id={{$i}} style="widht: 100px; height: 100px;">
                        </input>
                    </td>
                    @endfor
                </tr>

                <tr>
                    @for ($i = 40; $i <= 52; $i++)
                    <td>
                        <input type="checkbox" name={{$i}} id={{$i}}>
                            <img type="image" src= "{{asset(sprintf('/images/cards/%s.png',$i)) }}" name={{$i}} id={{$i}} style="widht: 100px; height: 100px;">
                        </input>
                    </td>
                    @endfor
                </tr>
            </table>
            <div class="btn_wrapper">
                <button type="submit" class="btn_store btn-primary ">ハンド登録</button>
            </div>
        </form>
            <div class="btn_wrapper">
                <form action="/hand_store_reload" method="GET">
                    <button type="submit" class="btn_store btn-primary ">チェック解除</button>
                </form>
            </div>    
    </div>

<footer class="container text-center overflow-hidden">©︎2021 Animus</footer>    



<script>

document.getElementById("btn_logout").onclick =　function(){
    if(window.confirm('ログアウトでよろしいですか？')){
        return true
    } else {
        return false
    }
}

$("input[type=checkbox]").click(function(){
    var $count = $("input[type=checkbox]:checked").length;
    var $not = $('input[type=checkbox]').not(':checked')

    if($count >= 2) {
        $not.attr("disabled",true);
    }else{
        $not.attr("disabled",false);
    }
});

$('input[type=checkbox]').click(function () {
            var id = $(this).attr('id');
            console.log(id)
            $('.preview').append(
             '<img style="width:80px; height: 80px; " src=images/cards/'+ id + '.png>'
            )
        });




</script>
</body>
</html>