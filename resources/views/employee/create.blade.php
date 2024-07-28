<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить сотрудника</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="container mx-auto p-4">

    <div class="mb-4">
        <a href="{{ route('employees.index') }}"
           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Назад</a>
    </div>

    <h1 class="text-2xl font-bold mb-4">Добавить сотрудника</h1>

    <form action="{{ route('employees.store') }}" method="POST" class="grid grid-cols-4 gap-4">
        @csrf

        <div class="m-2 ">
            <label for="last_name" class="block text-gray-700">Фамилия:</label>
            <input type="text" name="last_name" id="last_name"
                   class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md p-2">
        </div>

        <div class="m-2 ">
            <label for="first_name" class="block text-gray-700">Имя:</label>
            <input type="text" name="first_name" id="first_name"
                   class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md p-2">
        </div>

        <div class="m-2 ">
            <label for="middle_name" class="block text-gray-700">Отчество:</label>
            <input type="text" name="middle_name" id="middle_name"
                   class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md p-2">
        </div>

        <div class="m-2 ">
            <label for="gender" class="block text-gray-700">Пол:</label>
            <select name="gender" id="gender"
                    class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md p-2">
                <option value="male">Мужчина</option>
                <option value="female">Женщина</option>
            </select>
        </div>

        <div class="m-2 ">
            <label for="position_id" class="block text-gray-700">Должность:</label>
            <select name="position_id" id="position_id"
                    class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md p-2">

                @foreach($positions as $position)
                    <option value="{{ $position->id }}">{{ $position->title }}</option>
                @endforeach

            </select>
        </div>

        <div class="m-2 ">
            <label for="department_id" class="block text-gray-700">Отдел:</label>
            <select name="department_id" id="department_id"
                    class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md p-2">
                @foreach($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="m-2 ">
            <label for="hire_date" class="block text-gray-700">Дата приема на работу:</label>
            <input type="date" name="hire_date" id="hire_date"
                   class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md p-2">
        </div>

        <div class="m-2 ">
            <label for="salary" class="block text-gray-700">Зарплата:</label>
            <input type="number" name="salary" id="salary"
                   class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md p-2">
        </div>

        <div class="m-2 ">
            <label for="phone" class="block text-gray-700">Телефон:</label>
            <input type="text" name="phone" id="phone"
                   class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md p-2">
        </div>

        <div class="m-2 ">
            <label for="email" class="block text-gray-700">Email:</label>
            <input type="email" name="email" id="email"
                   class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md p-2">
        </div>

        <div class="m-2 ">
            <label for="birth_date" class="block text-gray-700">Дата рождения:</label>
            <input type="date" name="birth_date" id="birth_date"
                   class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md p-2">
        </div>

        <div class="m-2 ">
            <label for="address" class="block text-gray-700">Адрес:</label>
            <input type="text" name="address" id="address"
                   class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md p-2">
        </div>

        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Добавить
        </button>
    </form>
</div>
</body>
</html>
