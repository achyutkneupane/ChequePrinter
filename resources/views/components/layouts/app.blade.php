<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config("app.name") }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-[#F2F2F2] dark:bg-[#453F3C]">
{{ $slot }}
@vite('resources/js/app.js')
@livewireScripts
<div class="absolute b-0 w-full text-center text-gray-500 text-sm">
    Developed by: <a href="https://achyut.com.np" class="text-blue-500" target="_blank">Achyut</a>
</div>
</body>
</html>
