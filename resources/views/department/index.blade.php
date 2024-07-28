<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Отделы</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="mx-20 p-4 ">

    <div class="mb-4">
        <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            На Главную
        </a>
    </div>

    <h1 class="text-2xl font-bold mb-4">Отделы</h1>

    <table class="min-w-full bg-white border border-gray-300">
        <thead>
        <tr>
            <th class="py-2 px-1 border-b">Отделы</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($departments as $department)
            <tr>

                <td class="py-2 px-1 border-b">{{ $department->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>
