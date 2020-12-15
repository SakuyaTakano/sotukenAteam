@extends('layouts.kanri0')

@section('title', 'Kanri')

@section('menu_title')
企業情報更新画面
@endsection

@section('content')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <form action="/Kanri7_6/update" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>会社名: </th><td><input type="text" name="name"
         value="{{$item->name}}"></td></tr>
      <tr><th>Eメール: </th><td><input type="text" name="email"
         value="{{$item->email}}"></td></tr>
      <tr><th></th><td><input type="submit"
         value="更新"></td></tr>
   </table>
   </form>
   <a href="/Kanri7_6">戻る</a>
@endsection

@section('footer')
copyright 2020 管理者
@endsection 