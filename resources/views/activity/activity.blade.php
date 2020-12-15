@extends('layouts.activity')

@section('content')

<!DOCTYPE HTML>
<html>
  <head>
   <td><button class="mypage" href=""></button></td>
   <meta charset="UTF-8">
  </head>

  



<!--折れ線グラフのプログラム-->
  <body>
  <h1>消費カロリー・走行距離</h1>
  <canvas id="myLineChart"></canvas>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

  <script>
  var ctx = document.getElementById("myLineChart");
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['8月1日', '8月2日', '8月3日', '8月4日', '8月5日', '8月6日', '8月7日'],
      datasets: [
        {
          label: '消費カロリー(kcal)',
          data: [260,150,245,154,112,112,84,5],
          borderColor: "rgba(255,0,0,1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
        {
          label: '走行距離(Km)',
          data: [10.4,2.8,4.7,2.9,2.1,2.1,1.6,0.09],
          borderColor: "rgba(0,0,255,1)",
          backgroundColor: "rgba(0,0,0,0)"
        }
      ],
    },
    options: {
      title: {
        display: true,
        text: '消費カロリー・走行距離（8月1日~8月7日）'
      },
      scales: {
        yAxes: [{
          ticks: {
            suggestedMax: 300,
            suggestedMin: 0,
            stepSize: 10,
            callback: function(value, index, values){
              return  value +  ''
            }
          }
        }]
      },
    }
  });
  </script>
<!--折れ線グラフのプログラムここまで-->


<hr>

   





<!--ハンバーガーメニューのプログラム-->
<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
  <header>
    <div class="menu-drawer">
      <input type="checkbox" id="chk" />
      <label class="btn" for="chk"></label>
      <label class="other" for="chk"></label>
      <div class="content">
        <h2>メニュー</h2>
        <div class="menu">
          <a href="/activity/toro"><i class="">
          </i>トロフィー</a>
          <a href="/activity/ren"><i class="">
          </i>連続記録</a>
          <a href="/activity/kon"><i class=" ">
          </i>今月の走行</a>
          <a href="/activity/kozin"><i class="">
          </i>個人記録  </a>
          
        </div>
      </div>
    </div>
  </header>
<!--ハンバーガーメニューのプログラムここまで-->


<!--遷移のボタンプログラム-->
<div class="current"><a href="acti">トロフィー</a></div>
  <a href="/activity/rev">レビュー</a>
<!--遷移のボタンプログラムここまで-->
<hr>

<!--トロフィー、一覧プログラム-->
  <div class="h1"><h1>全てのトロフィー</h1></div>
  <hr>
  <br>
  <br>
  <h3>トロフィー</h3>
  <br>
    <div class="sample">
  <div class="item"><img src="../images/image8.png" ><p>シルバートロフィー</p></div>
  <div class="item"><img src="../images/image6.png"　><p>ゴールドトロフィー</p></div>
  <div class="item"><img src="../images/image7.png"><p>ブロンズトロフィー</p></div>
</div>
    <hr>
    <br>
    <br>
    <h3>連続記録</h3>
    <br>
    <div class="sample">
  <div class="item"><img src="../images/image17.jpg" ><p>3週連続ラン達成</p></div>
  <div class="item"><img src="../images/image17.jpg"　 ><p>4週連続ラン達成</p></div>
  <div class="item"><img src="../images/image17.jpg"><p>5週連続ラン達成</p></div>
</div>
  <hr>
  <br>  
  <br>
    <h3>今月の走行</h3>
    <br>
    <div class="sample">
  <div class="item"><img src="../images/image9.jpg" ><p>3Km達成</p></div>
  <div class="item"><img src="../images/image9.jpg"　 ><p>5Km達成</p></div>
  <div class="item"><img src="../images/image9.jpg"><p>10Km達成</p></div>
</div>

    <hr>

    <br>
  <br>
    <h3>個人記録</h3>
    <br>
    <div class="sample">
  <div class="item"><img src="../images/image18.jpg" ><p>最長距離達成</p></div>
  <div class="item"><img src="../images/image18.jpg"　 ><p>最長時間達成</p></div>
  <div class="item"><img src="../images/image18.jpg"><p>1Km最速達成</p></div>
</div>
  <hr>
  <br>
  <br>
<!--トロフィー、一覧プログラムここまで-->
  
<body>
    <main>
      <div class="box">
        <li><button class="home" onclick="location.href='HomePage'"></button></li>
         <li><button class="activity" onclick="location.href='acti'"></button></li>
         <li><button class="start" onclick="location.href='start'"></button></li>
         <li><button class="store" onclick="location.href='reco'"></button></li>
      </div>
      </main>
  </body>
</html>
@endsection

