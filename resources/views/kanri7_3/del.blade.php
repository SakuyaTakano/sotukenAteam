@extends('layouts.kanri0')

@section('title', 'Kanri')

@section('menu_title')
会員情報削除画面
@endsection

@section('content')
   <form action="/Kanri7_3/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>名前: </th><td>{{$item->name}}</td></tr>
      <tr><th>性別: </th><td>{{$item->sex}}</td></tr>
      <tr><th>体重: </th><td>{{$item->weight}}</td></tr>
      <tr><th>誕生日: </th><td>{{$item->birthday}}</td></tr>
      <tr><th>住所: </th><td>{{$item->address}}</td></tr>
      <tr><th>Eメール: </th><td>{{$item->email}}</td></tr>
      <tr><th>郵便番号: </th><td>{{$item->postal_code}}</td></tr>
      <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   </form>
   <a href="/Kanri7_3">戻る</a>
@endsection

@section('footer')
copyright 2020 管理者.
@endsection
