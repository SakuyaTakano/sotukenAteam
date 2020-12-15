@extends('layouts.kanri0')

@section('title', 'Kanri')

@section('menu_title')
管理者情報変更
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
   <form action="/Kanri7_8/update" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>Eメール: </th><td><input type="text" name="email" value="{{$item->email}}"></td></tr>
      <tr><th>パスワード: </th><td><input type="text" name="password" value="{{$item->password}}"></td></tr>
      <tr><th></th><td><input type="submit" value="変更"></td></tr>
   </table>
   </form>
<a href="/Kanri7_8">戻る</a>
@endsection

@section('footer')
copyright 2020 管理者.
@endsection 
