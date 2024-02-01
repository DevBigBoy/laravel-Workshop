<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('receive', ['id' => 1231]) }}" method="post">
        @csrf
        <input type="submit" value="send data">
    </form>

    {{-- {{ to_route('receive', ['id' => 1231]) }} --}}
</body>

</html>
