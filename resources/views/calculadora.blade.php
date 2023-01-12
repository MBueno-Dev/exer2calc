<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calculadora</title>
    </head>
    <body>
        <form action="/calcular" method="POST">
            @csrf
            <input name="num1" placeholder="Número 1">
            <select name="operador">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input name="num2" placeholder="Número 2">
            <button type="submit">Calcular</button>
        </form>
    </body>
</html>
