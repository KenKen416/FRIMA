@extends('layouts.app_logo_only')
@section('css')
<link rel="stylesheet" href="{{asset('css/auth.css')}}">
@endsection
@section('title', 'ログイン')
@section('content')
<div class="login">
  <h1 class="login__title">ログイン</h1>
  <form action="" method="POST" class="login__form">
    @csrf
    <div class="form-group">
      <label for="email">メールアドレス</label>
      <input type="email" name="email" id="email" class="input" value="{{old('email')}}">
    </div>
    @error('email')
    <span class="error-message">{{ $message }}</span>
    @enderror
    <div class="form-group">
      <label for="password">パスワード</label>
      <input type="password" name="password" id="password" class="input">
    </div>
    @error('password')
    <span class="error-message">{{ $message }}</span>
    @enderror
    </div>
    <button type="submit" class="btn">ログインする</button>
  </form>
  <div class="register-link">
    <a href="{{route('register')}}">会員登録はこちら</a>
  </div>
  @endsection