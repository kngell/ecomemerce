<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello city</title>
</head>

<body>
    <h1>Hello from quebec</h1>

    <p>Its current {{date('h:m:A')}} PM.</p>
    <footer>
        <p>&copy;Copyright {{date('Y')}} &middot;<a href="#">About us</a></p>
    </footer>
</body>

</html>