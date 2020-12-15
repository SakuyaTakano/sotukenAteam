@extends('layouts.kanri0')

@section('title', 'Kanri')

@section('menu_title')
イベント編集
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
   <form action="/Kanri7_7/update" method="post">
   <table>
      @csrf
      <input type="hidden" name="event_id" value="{{$item->event_id}}">
      <tr><th>イベント名: </th><td><input type="text" name="event" value="{{$item->event}}"></td></tr>
      <tr><th>期間: </th><td><input type="text" name="period" value="{{$item->period}}"></td></tr>
      <tr><th></th><td><input type="submit" value="変更"></td></tr>
   </table>
   </form>
   <a href="/Kanri7_7">戻る</a>
@endsection

@section('footer')
copyright 2020 管理者.
@endsection 
