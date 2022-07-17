@extends('front.root')

@section('css')
    <link rel="stylesheet" href="css/admin/login.css">
@endsection

@section('content')
    <div id="app">
        <div class="center logo">
            <img src="storage/site/banner.png" alt="ロゴ画像">
        </div>
        <div class="center">
            <form method="post" action="{{ route('admin.top.login') }}">
                @csrf
                <div class="item">
                    <input class="field" type="number" name="id" required value="{{ old('id') }}" placeholder="ID">
                </div>
                <div class="item">
                    <input class="field" type="text" name="password" required value="{{ old('password') }}" placeholder="password">
                </div>
                <div class="item">
                    <label for="keep">ログインを保持する</label><input type="checkbox" name="keep" id="keep" value="1" checked>
                </div>
                <input class="button" type="submit">
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="js/app.js" defer></script>
@endsection
