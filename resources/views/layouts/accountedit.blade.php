<html>
<head>
    <style>
    body {font-size:16pt; color:black; margin: 0px; }
    h1 { font-size:60pt; text-align:center; color:blue;
    margin:90px 0px 30px 0px; letter-spacing:-4pt; font-family: 'Londrina Shadow', cursive;}
    h2 {font-size:30pt; text-align:center; color:white;
    margin:-40px 0px 30px 0px; letter-spacing:-4pt;}
    ul { font-size:12pt; }
    hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
    .menutitle {font-size:14pt; font-weight:bold; margin: 0px; }
    .content {margin:50px; text-align:center;}
    .footer { text-align:right; font-size:10pt; margin:10px;
    border-bottom:solid 1px #ccc; color:#ccc; }
    tr {margin:20px 0px -30px 0px;}
    th {background-color:#3498db; color:#fff; padding:5px 10px; padding-color:black;}
    td {border: solid 1px #aaa; color:black; padding:5px 10px; font-size:13pt;
        background-color: white;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all  0.3s ease;
    }

    body{
    background-image:url('../images/background138.jpg');
    }

    .click{
      text-align:center;
      font-size: 30px;
    }
}
    </style>
  </head>
  <body>
      <h1 aria-label="CodePen">
      <span data-text="パ">パ</span>
      <span data-text="ス">ス</span>
      <span data-text="変">変</span>
      <span data-text="更">更</span>
      <span data-text="ぺ">ぺ</span>
      <span data-text="ー">ー</span>
      <span data-text="ジ">ジ</span>
      </h1>
      
      <h2>@yield('sub_title')</h2>
      <div class="content">
          @yield('content')
      </div>
  </body>
</html>
