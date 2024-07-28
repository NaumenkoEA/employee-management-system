<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Сотрудники</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="container mx-auto p-4">

    <div class="mb-4">
        <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            На Главную
        </a>
    </div>

    <h1 class="text-2xl font-bold mb-4">Сотрудники</h1>
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
        <tr>
            <th class="py-2 px-4 border-b">ID</th>
            <th class="py-2 px-4 border-b">Фамилия</th>
            <th class="py-2 px-4 border-b">Имя</th>
            <th class="py-2 px-4 border-b">Отчество</th>
            <th class="py-2 px-4 border-b">Должность</th>
            <th class="py-2 px-4 border-b">Отдел</th>
            <th class="py-2 px-4 border-b">Дата приема на работу</th>
            <th class="py-2 px-4 border-b">Зарплата</th>
            <th class="py-2 px-4 border-b">Телефон</th>
            <th class="py-2 px-4 border-b">EMail</th>
            <th class="py-2 px-4 border-b">Дата Рождения</th>
            <th class="py-2 px-4 border-b">Пол</th>
            <th class="py-2 px-4 border-b">Адрес</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($employees as $employee)
            <tr>
                <td class="py-2 px-4 border-b">{{ $employee->id }}</td>
                <td class="py-2 px-4 border-b">{{ $employee->first_name }}</td>
                <td class="py-2 px-4 border-b">{{ $employee->middle_name }}</td>
                <td class="py-2 px-4 border-b">{{ $employee->last_name }}</td>
                <td class="py-2 px-4 border-b">{{ $employee->position->title }}</td>
                <td class="py-2 px-4 border-b">{{ $employee->department->name }}</td>
                <td class="py-2 px-4 border-b">{{ $employee->hire_date }}</td>
                <td class="py-2 px-4 border-b">{{ $employee->salary }}</td>
                <td class="py-2 px-4 border-b">{{ $employee->phone }}</td>
                <td class="py-2 px-4 border-b">{{ $employee->email }}</td>
                <td class="py-2 px-4 border-b">{{ $employee->birth_date }}</td>
                <td class="py-2 px-4 border-b">{{ $employee->gender }}</td>
                <td class="py-2 px-4 border-b">{{ preg_replace('/^\d{6}, /', '', $employee->address) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
