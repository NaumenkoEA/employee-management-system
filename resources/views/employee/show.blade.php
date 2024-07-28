<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Просмотр сотрудника</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="container mx-auto p-4">
    <div class="mb-4">
        <a href="{{ route('employees.index') }}"
           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Назад</a>
    </div>
    <h1 class="text-2xl font-bold mb-4">Просмотр сотрудника</h1>
    <table class="table-auto w-full">
        <tr>
            <th>ID:</th>
            <td>{{ $employee->id }}</td>
        </tr>
        <tr>
            <th>Имя:</th>
            <td>{{ $employee->first_name }}</td>
        </tr>
        <tr>
            <th>Отчество:</th>
            <td>{{ $employee->middle_name }}</td>
        </tr>
        <tr>
            <th>Фамилия:</th>
            <td>{{ $employee->last_name }}</td>
        </tr>
        <tr>
            <th>Должность:</th>
            <td>{{ $employee->position_id }}</td>
        </tr>
        <tr>
            <th>Отдел:</th>
            <td>{{ $employee->department_id }}</td>
        </tr>
        <tr>
            <th>Дата приема на работу:</th>
            <td>{{ $employee->hire_date }}</td>
        </tr>
        <tr>
            <th>Зарплата:</th>
            <td>{{ $employee->salary }}</td>
        </tr>
        <tr>
            <th>Телефон:</th>
            <td>{{ $employee->phone }}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{ $employee->email }}</td>
        </tr>
        <tr>
            <th>Дата рождения:</th>
            <td>{{ $employee->birth_date }}</td>
        </tr>
        <tr>
            <th>Адрес:</th>
            <td>{{ $employee->address }}</td>
        </tr>
    </table>
</div>
</body>
</html>
