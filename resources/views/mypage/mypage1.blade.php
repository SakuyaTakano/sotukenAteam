@extends('layouts.mypageapp')
<input type="button" class="button4" onclick="location.href='HomePage'" value="< 戻る">
@section('content')
<!DOCTYPE HTML>
<html>
  <head>
   <meta charset="UTF-8">
  </head>
  <body>
  <td><input type="button" class="mypage" onclick="location.href='/mypage/mypage7'"></button></td>
  <p>現在保有ポイント ( )</p>
    <table>
    <form action="/hello/mypage" method="post">
        @csrf
        <input type="button" class="button" onclick="location.href='/mypage/mypage2'" value="設定の変更">
        <input type="button" class="button" onclick="location.href='/mypage/mypage10'" value="ヘルプ">
        <input type="button" class="button" onclick="location.href='/mypage/mypage6'" value="お問い合わせ">
    </form>
    </table>
    <input type="button" class="button" onclick="location.href='/login'" 
    value="ログアウト">
  </body>
</html>
</div>
@endsection
