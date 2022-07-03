@extends('front.root')

@section('css')
    <link rel="stylesheet" href="css/login.css">
@endsection

@section('content')
    <div id="app">
        <div class="center logo">
            <img src="storage/site/banner.png" alt="ロゴ画像">
        </div>
        <div class="center">
            <form method="post" action="{{ route('front.top.login') }}">
                @csrf
                <div class="item">
                    <input class="field" type="email" name="email" required value="{{ old('email') }}" placeholder="example@example.com">
                </div>
                <div class="item">
                    <input class="field" type="text" name="password" required value="{{ old('password') }}" placeholder="password">
                </div>
                <input class="button" type="submit">
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="js/app.js" defer></script>
@endsection
