<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positions</title>
</head>
<body>
<div class="">

    <div>
        <a href="{{route('home')}}">На Главную</a>
    </div>

    <h1>Positions</h1>
    <table class="">
        <thead>
        <tr>
            <th>ID</th>
            <th>Должность</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($positions as $position)
            <tr>
                <td>{{ $position->id }}</td>
                <td>{{ $position->title }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
