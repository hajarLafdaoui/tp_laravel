<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
    <form action="/calculer" method="post">
        @csrf
        <input type="number" name="number1" required>
        <select name="operation">
            <option value="addition">+</option>
            <option value="soustraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select>
        <input type="number" name="number2" required>
        <input type="submit" value="Ok">
    </form>

    @if (isset($res))
        <p>Result: {{ $res }}</p>
    @endif
    
</body>
</html>
