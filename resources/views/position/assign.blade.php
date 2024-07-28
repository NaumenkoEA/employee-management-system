<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Назначение должности</title>

</head>
<body>
<div class="container mt-5">

    <div>
        <a href="{{route('home')}}">На Главную</a>
    </div>

    <h1>Назначение должности сотруднику</h1>

    <form action="{{ route('employees.index') }}" method="GET">
        @csrf
        <div class="form-group">
            <label for="employeeName">Employee Name:</label>
            <input type="text" id="employeeName" class="form-control"
                   value="{{ $employee->first_name }} {{ $employee->middle_name }} {{ $employee->last_name }}"
                   disabled>
        </div>
        <div class="form-group">
            <label for="position">Assigned Position:</label>
            <input type="text" id="position" class="form-control" value="{{ $employee->position->title }}" disabled>
        </div>
        <button type="submit" class="btn btn-primary">Back to Employees</button>
    </form>
</div>

</body>
</html>
