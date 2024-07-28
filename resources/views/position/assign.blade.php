<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Назначение должности</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="container mx-auto p-4">

    <div class="mb-4">
        <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            На Главную
        </a>
    </div>

    <h1 class="text-2xl font-bold mb-4">Назначение должности сотруднику</h1>

    <form action="{{ route('positions.assign', ['employee_id' => $employee->id]) }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="employeeName" class="block text-gray-700">Имя сотрудника:</label>
            <input type="text" id="employeeName" class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md p-2"
                   value="{{ $employee->first_name }} {{ $employee->middle_name }} {{ $employee->last_name }}"
                   disabled>
        </div>
        <div class="mb-4">
            <label for="position" class="block text-gray-700">Выберите должность:</label>
            <select id="position" name="position_id" class="mt-1 block w-full bg-white border border-gray-300 rounded-md p-2">
                @foreach($positions as $position)
                    <option value="{{ $position->id }}">{{ $position->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Назначить
        </button>
    </form>
</div>

</body>
</html>
