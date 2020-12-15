@extends('layouts.kanri6')
<style>
.pagination { font-size:10pt; }
.pagination li { display:inline-block }
tr th a:link { color: white; }
tr th a:visited { color: white; }
tr th a:hover { color: white; }
tr th a:active { color: white; }
</style>
@section('title', 'Kanri')

@section('menu_title')
企業情報一覧画面
@endsection
<h1><a href="Kanri7_2">管理者ページ</a></h1>
@section('content')
   <table>
   <tr><th><a href="Kanri7_3?sort=id">ID</th><th>会社名</th><th>Eメール</th><th>パスワード</th><th>更新</th><th>削除</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
           <td>{{$item->password}}</td>
           <td><a href="/Kanri7_6/edit?id={{$item->id}}">更新</a></td>
           <td><a href="/Kanri7_6/del?id={{$item->id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
   {{ $items->appends(['sort' => $sort])->links() }}
@endsection

@section('footer')
copyright 2020 管理者.
@endsection

