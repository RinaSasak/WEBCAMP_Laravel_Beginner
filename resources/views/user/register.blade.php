@extends('layout')

{{-- メインコンテンツ--}}
@section('contents')
        <h1>会員登録</h1>
        @if ($errors->any())
            <div>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
            </div>
        @endif
        <form action="/user/register" method="post">
            @csrf
            名前：<input name="name" type="text"><br>
            email：<input name="email" type="email"><br>
            パスワード：<input name="password" type="password"><br>
            <button type="submit">登録</button><br>
        </form>
@endsection