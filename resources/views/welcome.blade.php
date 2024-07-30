<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=" ">

<div class="flex flex-col justify-center items-center h-screen  ">
    <div class=" mb-5">
        <a href="{{ route('employees.index') }}"
           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Список сотрудников</a>
    </div>

    <div class="mb-5">
        <a href="{{ route('departments.index') }}"
           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Список отделов</a>
    </div>

    <div class="mb-5">
        <a href="{{ route('positions.index') }}"
           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Список должностей</a>
    </div>

</div>


</body>
</html>
