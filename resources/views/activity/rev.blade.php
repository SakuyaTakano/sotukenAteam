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

<a href="/acti">トロフィー</a>
<div class="current"><a href="./rev">レビュー</a></div>
  

<hr>
<!--コメント表示させている-->
@component('components.message')
    @slot('msg_title')
    先週
    @endslot

    @slot('msg_content')
    先週より多く走っています。その調子！
    @endslot
@endcomponent

@component('components.message')
    @slot('msg_title')
    先月
    @endslot

    @slot('msg_content')
    先月より多く走っています。その調子！
    @endslot
@endcomponent
  
@component('components.message')
    @slot('msg_title')
    去年
    @endslot

    @slot('msg_content')
    去年より多く走っています。その調子！
    @endslot
@endcomponent
<!--コメント表示させているここまで-->


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
</div>
@endsection
