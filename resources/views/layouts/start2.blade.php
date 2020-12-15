<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Londrina+Shadow" rel="stylesheet">
    <style>
    body {font-size:16pt; color:black; margin: 0px; }
    h1 { font-size:60pt; text-align:center; color:white;
    margin:-10px 0px 30px 0px; letter-spacing:-4pt; font-family: 'Londrina Shadow', cursive;}
    h2 {font-size:30pt; text-align:center; color:#000;}
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
    table {border-collapse: collapse; width:1390px; text-align:center; margin:10px 8px 10px; table-layout: fixed;}
    table th, table td {border: solid 1px black;}
    .box1 {padding: 0.5em 0.5em ;margin: 0px 0px; width: auto;  border: solid 3px #000000; }
    .box1 p {margin: 0px 5px 0px -5px; padding: 0; width: auto 10;}
    
    .button_wrapper remodal-bg{font-size: 1.4em;
font-weight: bold;
padding: 10px 30px;
color: #fff;
border-style: none;
box-shadow: 2px 2px 3px 1px #666;
-moz-box-shadow: 2px 2px 3px 1px #666;
-webkit-box-shadow: 2px 2px 3px 1px #666;
text-shadow: 1px 1px 2px #000;
background: -moz-linear-gradient(bottom, #36d, #248 50%, #36d);
background: -webkit-gradient(linear, left bottom, left top, from(#36d), color-stop(0.5, #248), to(#36d));
-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
/* ここまで学校*/

/*ここから各ボタン */

.button {
  display      : inline-block;
  border-radius: 50%;                  /* 角丸 */
  box-shadow   : 5px 5px 3px #666666;  /* 影の設定 */
  cursor       : pointer;              /* カーソル形状 */
  transition   : .3s;                  /* なめらか変化 */
}
.button:hover {
  box-shadow   : none;                 /* 影の設定 */
  border-radius: 0;                    /* 角丸 */
}

.box{
    display:  inline-block; 
}

.box > li {
    display:  inline-block;     /* インラインブロック要素にする */
    width: 190px;               /* 幅指定 */
    vertical-align:  middle;    /* 要素を上下中央で揃える */
}

.mypage{
        font-size: 1.2em;/*文字の大きさ*/
        font-weight: normal;　/*文字の太さ*/
        border-radius: 500px; /*ボタンの丸み*/
        width:125; /*ボタンの横の長さ*/
        height:100; /*ボタンの縦の長さ*/
        margin:50px 1000px 10px 0px;
        opacity: 0.7;
        background-image:url('../images/people.png');
    }

.home{
        font-size: 1.2em;/*文字の大きさ*/
        font-weight: normal;　/*文字の太さ*/
        border-radius: 500px; /*ボタンの丸み*/
        width:125; /*ボタンの横の長さ*/
        height:125; /*ボタンの縦の長さ*/
        margin:50px 1000px 10px 0px;
        opacity: 0.7;
        background-image:url('../images/home.png');
    }

.activity{
    font-size: 1.2em;/*文字の大きさ*/
    font-weight: normal;　/*文字の太さ*/
    border-radius: 500px; /*ボタンの丸み*/
    width:125; /*ボタンの横の長さ*/
    height:125; /*ボタンの縦の長さ*/
    margin:50px 1000px 10px 0px;
    opacity: 0.7;
    background-image:url('../images/data.png');
}

.start{
    font-size: 1.2em;/*文字の大きさ*/
    font-weight: normal;　/*文字の太さ*/
    border-radius: 500px; /*ボタンの丸み*/
    width:125; /*ボタンの横の長さ*/
    height:125; /*ボタンの縦の長さ*/
    margin:50px 1000px 10px 0px;
    opacity: 0.7;
    background-image:url('../images/run.png');
}

.store{
    font-size: 1.2em;/*文字の大きさ*/
    font-weight: normal;　/*文字の太さ*/
    border-radius: 500px; /*ボタンの丸み*/
    width:125; /*ボタンの横の長さ*/
    height:125; /*ボタンの縦の長さ*/
    margin:50px 1000px 10px 0px;
    opacity: 0.7;
    background-image:url('../images/store.png');
}
.data{text-align:center;}
    .data2 p{display: inline-block;}
  display: inline-block;
  padding: 0.5em 1em;
  text-decoration: none;
  background: #668ad8;/*ボタン色*/
  color: #FFF;
  border-bottom: solid 4px #627295;
  border-radius: 3px;
}
.btn-square:active {
  /*ボタンを押したとき*/
  -webkit-transform: translateY(4px);
  transform: translateY(4px);/*下に動く*/
  border-bottom: none;/*線を消す*/
}
/*ここまで各ボタン */
  .start0{width:125; /*ボタンの横の長さ*/height:125; /*ボタンの縦の長さ*/margin:left;text-align:left;opacity: 0.7; background-image:url('../images/move.png');}
  .stop{width:125; /*ボタンの横の長さ*/height:125; /*ボタンの縦の長さ*/margin:left;text-align:left;opacity: 0.7; background-image:url('../images/stop.png');}
  .end{width:125; /*ボタンの横の長さ*/height:125; /*ボタンの縦の長さ*/margin:right;text-align:right;opacity: 0.7; background-image:url('../images/end.png');}
  button{
display:inline-block;
}
div{
text-align:center;
}
.running{text-align:center;}
</style>
</head>

<body>
    <h2>@yield('sub_title')</h2>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
