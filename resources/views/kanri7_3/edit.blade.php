@extends('layouts.kanri0')

@section('title', 'Kanri')

@section('menu_title')
会員情報更新画面
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
   <form action="/Kanri7_3/update" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>名前: </th><td><input type="text" name="name"
         value="{{$item->name}}"></td></tr>
      <tr><th>性別: </th><td><input type="text" name="sex"
         value="{{$item->sex}}"></td></tr>
      <tr><th>体重: </th><td><input type="text" name="weight"
         value="{{$item->weight}}"></td></tr>
         <tr><th>誕生日: </th><td><input type="text" name="birthday"
         value="{{$item->birthday}}"></td></tr>
      <tr><th>住所: </th><td><input type="text" name="address"
         value="{{$item->address}}"></td></tr>
      <tr><th>Eメール: </th><td><input type="text" name="email"
         value="{{$item->email}}"></td></tr>
         <tr><th>郵便番号: </th><td><input type="text" name="postal_code"
         value="{{$item->postal_code}}"></td></tr>
      <tr><th></th><td><input type="submit"
         value="更新"></td></tr>
   </table>
   </form>
   <a href="/Kanri7_3">戻る</a>
@endsection

@section('footer')
copyright 2020 管理者
@endsection 
