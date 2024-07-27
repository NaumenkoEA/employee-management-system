<!DOCTYPE html>
<html>
<head>
    <title>Employees</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <h1>Employees</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Должность</th>
            <th>Дата приема на работу</th>
            <th>Зарплата</th>
            <th>Телефон</th>
            <th>EMail</th>
            <th>Дата Рождения</th>
            <th>Пол</th>
            <th>Адрес</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->middle_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->position}}</td>
                <td>{{ $employee->hire_date }}</td>
                <td>{{ $employee->salary }}</td>
                <td>{{ $employee->phone}}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->birth_date}}</td>
                <td>{{ $employee->gender}}</td>
                <td>{{ $employee->address}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
