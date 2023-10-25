<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata - @yield('nama_title')</title>
</head>
<body>
    <div>
    <h1>@yield('nama_lengkap')</h1>
</div>
<div id="biodata">
    <p>@yield('biodata')</p>
</div>
<div id="biodata">
    <div>
        Hobby:
    </div>
    <div> 
           @yield('hobby')
</div>
</body>
</html>