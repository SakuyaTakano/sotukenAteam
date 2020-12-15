@extends('layouts.kanri0')

@section('title', 'Kanri')

@section('menu_title')
企業情報削除画面
@endsection

@section('content')
   <form action="/Kanri7_6/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>会社名: </th><td>{{$item->name}}</td></tr>
      <tr><th>Eメール: </th><td>{{$item->email}}</td></tr>
      <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   </form>
   <a href="/Kanri7_6">戻る</a>
@endsection

@section('footer')
copyright 2020 管理者.
@endsection
