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

    <table class="table-auto w-full border-collapse">
        <tbody>
        <tr class="border-t border-gray-200">
            <th class="text-left p-2">ID:</th>
            <td class="p-2">{{ $employee->id }}</td>
        </tr>
        <tr class="border-t border-gray-200">
            <th class="text-left p-2">Имя:</th>
            <td class="p-2">{{ $employee->first_name }}</td>
        </tr>
        <tr class="border-t border-gray-200">
            <th class="text-left p-2">Отчество:</th>
            <td class="p-2">{{ $employee->middle_name }}</td>
        </tr>
        <tr class="border-t border-gray-200">
            <th class="text-left p-2">Фамилия:</th>
            <td class="p-2">{{ $employee->last_name }}</td>
        </tr>
        <tr class="border-t border-gray-200">
            <th class="text-left p-2">Пол:</th>
            <td class="p-2">{{ $employee->gender == 'male' ? 'Мужчина' : 'Женщина' }}</td>
        </tr>
        <tr class="border-t border-gray-200">
            <th class="text-left p-2">Должность:</th>
            <td class="p-2">{{ $employee->position ? $employee->position->title : 'Не указана' }}</td>
        </tr>
        <tr class="border-t border-gray-200">
            <th class="text-left p-2">Отдел:</th>
            <td class="p-2">{{ $employee->department ? $employee->department->name : 'Не указан' }}</td>
        </tr>
        <tr class="border-t border-gray-200">
            <th class="text-left p-2">Дата приема на работу:</th>
            <td class="p-2">{{ $employee->hire_date }}</td>
        </tr>
        <tr class="border-t border-gray-200">
            <th class="text-left p-2">Зарплата:</th>
            <td class="p-2">{{ $employee->salary }}</td>
        </tr>
        <tr class="border-t border-gray-200">
            <th class="text-left p-2">Телефон:</th>
            <td class="p-2">{{ $employee->phone }}</td>
        </tr>
        <tr class="border-t border-gray-200">
            <th class="text-left p-2">Email:</th>
            <td class="p-2">{{ $employee->email }}</td>
        </tr>
        <tr class="border-t border-gray-200">
            <th class="text-left p-2">Дата рождения:</th>
            <td class="p-2">{{ $employee->birth_date }}</td>
        </tr>
        <tr class="border-t border-gray-200">
            <th class="text-left p-2">Адрес:</th>
            <td class="p-2">{{ $employee->address }}</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
