@extends('layouts.simple')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="cards">
<div class="card">
  <div class="card__img">
    <img src="{{ asset('img/sushi.jpg') }}" alt="" />
  </div>
  <div class="card__content">
    <h2>仙人</h2>
    <div class="card__content-tag">
      <p class="card__content-tag-item">#東京都</p>
      <p class="card__content-tag-item">#寿司</p>
    </div>
    <button type="submit" class="detail-btn">詳しくみる</button>
  </div>
</div>
<div class="card">
  <div class="card__img">
    <img src="{{ asset('img/yakiniku.jpg') }}" alt="" />
  </div>
  <div class="card__content">
    <h2>牛助</h2>
    <div class="card__content-tag">
      <p class="card__content-tag-item">#大阪府</p>
      <p class="card__content-tag-item">#焼肉</p>
    </div>
    <button type="submit" class="detail-btn">詳しくみる</button>
  </div>
</div>
<div class="card">
  <div class="card__img">
    <img src="{{ asset('img/izakaya.jpg') }}" alt="" />
  </div>
  <div class="card__content">
    <h2>戦慄</h2>
    <div class="card__content-tag">
      <p class="card__content-tag-item">#福岡県</p>
      <p class="card__content-tag-item">#居酒屋</p>
    </div>
    <button type="submit" class="detail-btn">詳しくみる</button>
  </div>
</div>
<div class="card">
  <div class="card__img">
    <img src="{{ asset('img/italian.jpg') }}" alt="" />
  </div>
  <div class="card__content">
    <h2>ルーク</h2>
    <div class="card__content-tag">
      <p class="card__content-tag-item">#東京都</p>
      <p class="card__content-tag-item">#イタリアン</p>
    </div>
    <button type="submit" class="detail-btn">詳しくみる</button>
  </div>
</div>
</div>
@endsection