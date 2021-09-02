<!DOCTYPE html>
<html>
<head>
<title>@yield('title')Laravel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
    <header>
        <h1>Laravel</h1>
    </header>
    <hr/><hr/>
    <session>
        @yield('content')
    </session>
    <hr/><hr/>
    <footer>
        Rodapé
    </footer>
</body>
</html> 