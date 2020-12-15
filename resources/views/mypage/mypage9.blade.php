@extends('layouts.mypageapp')

<input type="button" class="button4" onclick="history.back()" value="< 戻る">
@section('content')
<!DOCTYPE HTML>
<html>
  <head>
   <meta charset="UTF-8">
  </head>
  <body>
  お問い合わせ入力フォーム<ol>
<table>
<form action="/hello/mypage9" method="post">
    @csrf
    <textarea name="example" cols="50" rows="10"></textarea><br>
    以下の内容で送信します。
    よろしいですか?
</form>
</table>
<input type="button" class="button3" onclick="location.href='/mypage'" value="送信">
  </body>
</html>
</div>
@endsection
