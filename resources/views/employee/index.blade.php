<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список сотрудников</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100">

<div class="container mx-auto p-4 bg-white shadow-md rounded-lg">

    <div class="mb-4 flex justify-between">
        <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            На Главную
        </a>
        <a href="{{ route('employees.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Добавить сотрудника
        </a>
    </div>

    <h1 class="text-2xl font-bold mb-4">Список сотрудников</h1>

    @if(session('success'))
        <div class="bg-green-500 text-white p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="table-auto w-full border-collapse">
        <thead>
        <tr class="bg-gray-200 text-left">
            <th class="border px-4 py-2">ID</th>
            <th class="border px-4 py-2">Фамилия</th>
            <th class="border px-4 py-2">Имя</th>
            <th class="border px-4 py-2">Отчество</th>
            <th class="border px-4 py-2">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr class="hover:bg-gray-100">
                <td class="border px-4 py-2">{{ $employee->id }}</td>
                <td class="border px-4 py-2">{{ $employee->last_name }}</td>
                <td class="border px-4 py-2">{{ $employee->first_name }}</td>
                <td class="border px-4 py-2">{{ $employee->middle_name }}</td>
                <td class="border px-4 py-2 flex justify-around">
                    <a href="{{ route('employees.show', $employee->id) }}" class="text-blue-500 px-2">Просмотр</a>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="text-yellow-500 px-2">Редактировать</a>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="inline-block px-2"
                          onsubmit="return confirm('Вы уверены, что хотите удалить этого сотрудника?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Удалить</button>
                    </form>
                    <a href="{{ route('vacations.index', $employee->id) }}" class="text-green-500">Отпуска</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
