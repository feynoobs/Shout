<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="@if ($pageData->is_index === 1) index @else noindex @endif">
    <meta name="description" content="{{ $pageData->description }}">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="canonical" href="{{ $pageData->canonical }}">
    <title>{{ $pageData->title }}</title>
    <meta property="og:title" content="{{ $pageData->title }}">
    <meta property="og:description" content="{{ $pageData->description }}">
    <meta property="og:type" content="{{ $pageData->ogp_type }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:url" content="{{ $pageData->ogp_url }}">

    @yield('css')
</head>
<body>
    @yield('content')
    @yield('js')
</body>
</html>
