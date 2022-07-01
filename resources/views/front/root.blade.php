<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="aaa">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <title>lll</title>
    <meta property="og:title" content="タイトル">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    @yield('css')
</head>
<body>
    @yield('content')
    @yield('js')
</body>
</html>
