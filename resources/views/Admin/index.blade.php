<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>后台界面</title>
    <style>
        H1{
            color : green;
        }
    </style>
</head>
<body>
    <H1>欢迎来到后台界面</H1>
    <div id="app"></div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
