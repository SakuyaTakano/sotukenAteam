@extends('layouts.mypageapp')

@section('content')
<!DOCTYPE HTML>
<html>
  <head>
   <meta charset="UTF-8">
  </head>
  <body>
  <table>
<form action="/mypage/mypage7" method="post">
    @csrf
    購入詳細
    <tr><th>注文日時</th></tr><td></td>
    <tr><th>合計金額</th></tr><td></td>
    <tr><th>支払方法</th></tr><td></td>
    <tr><th>配達時間</th></tr><td></td>
    <tr><th>送付先</th></tr><td></td>
    <tr><th>備考</th></tr><td></td>
</form>
</table>
<table>
<form>
    @csrf
    購入内約
    <tr><th>商品名</th></tr><td></td>
    <tr><th>注文個数</th></tr><td></td>
    <tr><th>価格</th></tr><td></td>
    <tr><th>代金小計</th></tr><td></td>
</form>
</table>
<input type="button" class="button" onclick="location.href='/mypage/mypage8'" value="購入履歴">
<input type="button" class="button" onclick="location.href='/mypage/mypage1'" value="マイページに戻る">
  </body>
</html>
</div>
@endsection
