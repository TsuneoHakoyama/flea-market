@extends('layouts.app')

@section('page-title')
会員登録
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('logo')
<img src="{{ asset('storage/image/logo.svg') }}" alt="">
@endsection

@section('content')
<main class="main-board">
    <div class="title">
        <p>会員登録</p>
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
        <div class="page-link">
            <a href="">ログインはこちら</a>
        </div>
    </form>
</main>
@endsection