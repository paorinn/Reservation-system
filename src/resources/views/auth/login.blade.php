@extends('layouts.simple')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
<div class="login-container">  
  <div class="login-header">Login</div>
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">  
        <label for="email">Email</label>  
        <input type="email" id="email" name="email" placeholder="Email" required>  
    </div>  
    <div class="form-group">  
      <label for="password">Password</label>  
      <input type="password" id="password" name="password" placeholder="Password" required>  
    </div>  
    <button type="submit" class="login-btn">ログイン</button>  
  </form>  
</div>