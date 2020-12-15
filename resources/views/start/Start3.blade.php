@extends('layouts.start3')

@section('content')
<!DOCTYPE HTML>
<html>
  <head>
   <td><button class="mypage" href=""></button></td>
   <meta charset="UTF-8">
  </head>
  <body>
  <div class="title">
         <h2>今日のラン<h2>
         </div>
         <div class="data">
         <div class="data1">
         <p>平均ペースを表示</p>
         <?php
         $kcal = 0; 
         $km = 10;  //仮の数値
         $weight = 50;//仮の数値
          echo "平均ペースを表示" ;
          echo "時間表示";
          //1時間走った場合のカロリー
          $kcal = 1.05 * 8.3  * $weight ; //消費エネルギー（kcal) ＝1.05×エクササイズ（METs・時）×体重(kg)
          echo "{$kcal}kcal";
          ?>
          <span class="br">平均ペース</span>
           <p>時間<p>
           <p>消費カロリー</p>
           <span class="br">Km</span>
           <p>平均ペース</p>
           <span class="br">1</span>
           <p>平均ペースを表示</p>
           <span class="br">2</span>
           <p>平均ペースを表示</p>
           <span class="br">3</span>
           <p>平均ペースを表示</p>
           </div>
           </div>
  </body>
  <body>
      <main>
      <a href="./start" class="btn btn-radius-solid btn--shadow">終了<i class="fas fa-angle-right fa-position-right"></i></a>
      </main>
  </body>
</html>
</div>
@endsection