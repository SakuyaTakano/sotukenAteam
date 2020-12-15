@extends('layouts.mypageapp')

<input type="button" class="button4" onclick="history.back()" value="< 戻る">
@section('content')
<!DOCTYPE HTML>
<html>
  <head>
   <meta charset="UTF-8">
  </head>
  <body>
  <tr><th>お問い合わせ入力フォーム</th></tr><br>
    <table>
    <form action="/hello/mypage6" method="post">
        @csrf
        <textarea name="example" cols="50" rows="10"></textarea>
    </form>
    </table>
    <input type="button" class="button3" onclick="location.href='/mypage/mypage9'" value="確認">
  </body>
</html>
</div>
@endsection
