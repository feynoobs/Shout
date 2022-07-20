@extends('admin.root')

@section('css')
    <link rel="stylesheet" href="/css/admin/login.css">
@endsection

@section('content')
    <div id="app">
        <banner banner='{{ asset('storage/site/banner.png') }}'></banner>
        <div class="flex">
            <div class="sidemenu">
                <sidemenu sidemenu='@json($sideMenu)'></sidemenu>
            </div>
            <div class="main"></div>
        </div>
    </div>
@endsection

@section('js')
    <script src="/js/admin/admin.js" defer></script>
@endsection
