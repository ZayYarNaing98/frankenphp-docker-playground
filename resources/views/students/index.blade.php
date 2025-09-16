<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
</head>
<body>
    <div>
        <h1>Students List</h1>
        {{-- <ul>
            <li>Bob</li>
            <li>Alice</li>
        </ul> --}}
        @foreach ($students as $data)
            {{-- {{ dd($data) }} --}}
            <li>{{ $data['name'] }}</li>
        @endforeach
    </div>
</body>
</html>
