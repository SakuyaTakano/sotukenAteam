@extends('layouts.Ateam')

@section('content')
<!DOCTYPE HTML>
<html>
  <head>
   <td><button class="mypage" href=""></button></td>
   <title>お知らせ</title>
  </head>
  <body>
  <table>
  <tr>
    <th>内容: </th><td>{{$item -> content}}</td>
  </tr>
  </body>

  
  <body>
      <main>
      <div class="box">
         <li><button class="home" href="homepage.blade.php"></button></li>
         <li><button class="activity" href=""></button></li>
         <li><button class="start" href=""></button></li>
         <li><button class="store" href=""></button></li>
      </div>
      </main>
  </body>
</html>
</div>
@endsection

