@extends('layouts.kanri7')
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
イベント一覧
@endsection<h1><a href="Kanri7_2">管理者ページ</a></h1>
@section('content')
   <table>
   <tr><th><a href="Kanri7_3?sort=event_id">ID</th><th>イベント名</th><th>期間</th><th>変更</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->event_id}}</td>
           <td>{{$item->event}}</td>
           <td>{{$item->period}}</td>
           <td><a href="/Kanri7_7/edit?event_id={{$item->event_id}}">変更</a></td>
       </tr>
   @endforeach
   </table>
   {{ $items->appends(['sort' => $sort])->links() }}
@endsection

@section('footer')
copyright 2020 管理者.
@endsection