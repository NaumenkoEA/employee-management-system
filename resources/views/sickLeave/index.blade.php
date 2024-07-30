<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список больничных</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="container mx-auto p-4">

    <div class="mb-4">
        <a href="{{ route('vacations.create', $employee->id) }}"
           class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Отправить на больничный</a>
        <a href="{{ route('employees.index', $employee->id) }}"
           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Назад</a>
    </div>

    <h1 class="text-2xl font-bold mb-4">Больничные
        сотрудника: {{ $employee->first_name }} {{ $employee->last_name }}</h1>

    <table class="table-auto w-full border-collapse">
        <thead>
        <tr class="bg-gray-200 text-left">
            <th class="border px-4 py-2">ID</th>
            <th class="border px-4 py-2">Дата заболевания</th>
            <th class="border px-4 py-2">Дата выздоровления</th>
            <th class="border px-4 py-2">Болезнь</th>
            <th class="border px-4 py-2">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employee->sickLeaves as $sickLeave)
            <tr class="hover:bg-gray-100">
                <td class="border px-4 py-2">{{ $sickLeave->id }}</td>
                <td class="border px-4 py-2">{{ $sickLeave->start_date }}</td>
                <td class="border px-4 py-2">{{ $sickLeave->end_date }}</td>
                <td class="border px-4 py-2">{{ $sickLeave->reason }}</td>
                <td class="border px-4 py-2 flex justify-around">
                    <a href="{{ route('sickLeave.edit', [$employee->id, $sickLeave->id]) }}"
                       class="text-yellow-500 px-2">Редактировать</a>
                    <form
                        action="{{ route('sickLeave.destroy', ['employee_id' => $employee->id, 'sickLeave_id' => $sickLeave->id]) }}"
                        method="POST" onsubmit="return confirm('Вы уверены, что хотите удалить этот больничный?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Удалить</button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
