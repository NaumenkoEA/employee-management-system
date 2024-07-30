<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование командировки</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="container mx-auto p-4">

    <div class="mb-4">
        <a href="{{ route('businessTrip.index', $employee->id) }}"
           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Назад</a>
    </div>

    <h1 class="text-2xl font-bold mb-4">Редактирование командировки
        для: {{ $employee->first_name }} {{ $employee->last_name }}</h1>

    <form action="{{ route('businessTrip.update', [$employee->id, $businessTrip->id]) }}" method="POST"
          class="grid grid-cols-2 gap-4">
        @csrf
        @method('PUT')

        <div class="m-2">
            <label for="start_date" class="block text-gray-700">Начало командировки:</label>
            <input type="date" name="start_date" id="start_date"
                   class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md p-2"
                   value="{{ $businessTrip->start_date }}" required>
        </div>

        <div class="m-2">
            <label for="end_date" class="block text-gray-700">Конец командировки:</label>
            <input type="date" name="end_date" id="end_date"
                   class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md p-2"
                   value="{{ $businessTrip->end_date }}" required>
        </div>

        <div class="m-2 col-span-2">
            <label for="goal_business_trip" class="block text-gray-700">Цель командировки:</label>
            <textarea name="goal_business_trip" id="goal_business_trip"
                      class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md p-2"></textarea>
        </div>

        <div class="m-2 col-span-2">
            <label for="country" class="block text-gray-700">Страна:</label>
            <textarea name="country" id="country"
                      class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md p-2"></textarea>
        </div>

        <div class="m-2 col-span-2">
            <label for="city" class="block text-gray-700">Город:</label>
            <textarea name="city" id="city"
                      class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md p-2"></textarea>
        </div>

        <button type="submit" class="col-span-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Обновить
        </button>
    </form>
</div>
</body>
</html>
