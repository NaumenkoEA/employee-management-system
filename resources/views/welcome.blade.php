<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased ">

<div class="m-4">
    <a href="{{ route('employees.index') }}"
       class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Перейти к сотрудникам</a>
</div>

<div class="m-4">
    <a href="{{ route('departments.index') }}"
       class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Список отделов</a>
</div>

<div class="m-4">
    <a href="{{ route('positions.index') }}"
       class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Перейти к должностям</a>
</div>
</body>
</html>
