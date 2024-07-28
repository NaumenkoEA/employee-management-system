<!DOCTYPE html>
<html>
<head>
    <title>Departments</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">

    <div>
        <a href="{{route('home')}}">На Главную</a>
    </div>

    <h1>Отделы</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Отделы</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($departments as $department)
            <tr>

                <td>{{ $department->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>
