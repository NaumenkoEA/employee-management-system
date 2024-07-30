<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Командировки</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="container mx-auto p-4">

    <div class="mb-4">
        <a href="{{ route('businessTrip.create', $employee->id) }}"
           class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Назначить командировку</a>
        <a href="{{ route('employees.index', $employee->id) }}"
           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Назад</a>
    </div>

    <h1 class="text-2xl font-bold mb-4">Командировки
        сотрудника: {{ $employee->first_name }} {{ $employee->last_name }}</h1>

    <table class="table-auto w-full border-collapse">
        <thead>
        <tr class="bg-gray-200 text-left">
            <th class="border px-4 py-2">ID</th>
            <th class="border px-4 py-2">Дата начала</th>
            <th class="border px-4 py-2">Дата окончания</th>
            <th class="border px-4 py-2">Цель командировки</th>
            <th class="border px-4 py-2">Страна</th>
            <th class="border px-4 py-2">Город</th>
            <th class="border px-4 py-2">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employee->businessTrips as $businessTrip)
            <tr class="hover:bg-gray-100">
                <td class="border px-4 py-2">{{ $businessTrip->id}}</td>
                <td class="border px-4 py-2">{{ $businessTrip->start_date}}</td>
                <td class="border px-4 py-2">{{ $businessTrip->end_date}}</td>
                <td class="border px-4 py-2">{{ $businessTrip->goal_business_trip}}</td>
                <td class="border px-4 py-2">{{ $businessTrip->country}}</td>
                <td class="border px-4 py-2">{{ $businessTrip->city}}</td>
                <td class="border px-4 py-2 flex justify-around">
                    <a href="{{ route('businessTrip.edit', [$employee->id, $businessTrip->id]) }}"
                       class="text-yellow-500 px-2">Редактировать</a>
                    <form
                        action="{{ route('businessTrip.destroy', ['employee_id' => $employee->id, 'business_trip_id' => $businessTrip->id]) }}"
                        method="POST" onsubmit="return confirm('Вы уверены, что хотите отменить командировку?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Отменить</button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
