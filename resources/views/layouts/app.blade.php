<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}" type="png">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title') - EspecializaTi</title>
</head>
<body class="bg-gray-50">
    
     <div class="container mx-auto px-4 py-8">
            @yield('content')
     </div>

</body>
</html>