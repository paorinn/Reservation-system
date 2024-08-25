@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
<div class="login-container">  
  <div class="login-header">Registration</div>
  <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group">  
        <label for="name">Name</label>  
        <input type="text" id="name" name="name" placeholder="Username" value="{{ old('name') }}" required>
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>  
        <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>  
    <div class="form-group">  
      <label for="password">Password</label>  
      <input type="password" id="password" name="password" placeholder="Password" required>
        @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>  
    <button type="submit" class="login-btn">登録</button>  
  </form>  
</div>
@endsection