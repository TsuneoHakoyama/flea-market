@extends('layouts.app')

@section('page-title')
ログイン
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('logo')
<img src="{{ asset('storage/image/logo.svg') }}" alt="">
@endsection

@section('content')
<main class="main-board">
    <div class="title">
        <p>ログイン</p>
    </div>
    <form class="input-form">
        <div class="input-email">
            メールアドレス<br>
            <input type="email" name="email">
        </div>
        <div class="input-password">
            パスワード<br>
            <input type="text" name="password">
        </div>
        <div class="submit">
            <button type="submit">登録する</button>
        </div>
    </form>
    <div class="page-link">
        <a href="">会員登録はこちら</a>
    </div>
</main>
@endsection