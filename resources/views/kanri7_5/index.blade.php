@extends('layouts.kanri5')
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
リンク一覧
@endsection
<h1><a href="Kanri7_2">管理者ページ</a></h1>
@section('content')
   <table>
   <tr><th><a href="Kanri7_3?sort=site_id">ID</th><th>サイト名</th><th>画像</th><th>Url</th><th>変更</th>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->site_id}}</td>
           <td>{{$item->site_name}}</td>
           <td>{{$item->site_ig}}</td>
           <td>{{$item->site_url}}</td>
           <td><a href="/Kanri7_5/edit?site_id={{$item->site_id}}">変更</a></td>
       </tr>
   @endforeach
   </table>
   {{ $items->appends(['sort' => $sort])->links() }}
@endsection

@section('footer')
copyright 2020 管理者.
@endsection