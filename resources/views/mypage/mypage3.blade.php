@extends('layouts.mypageapp')

<input type="button" class="button4" onclick="history.back()" value="< 戻る">

@section('content')
<!DOCTYPE HTML>
<html>
  <head>
   <meta charset="UTF-8">
  </head>
    <body><br>
        消費Kcalなどのデータを取るにはあなたの情報が必要です。<br>
        より高いパフォーマンスのためにこまめに入力しましょう。
        <table>
        <form action="/hello/mypage3" method="post">
            @csrf
            <tr><th>性別  <input type="text" name="sex" ></th></tr>
            <tr><th>身長  <input type="number" name="height" ></th></tr>
            <tr><th>体重  <input type="number" name="weight" ></th></tr>
        </form>
        </table>  
    </body>
</html>
@endsection
