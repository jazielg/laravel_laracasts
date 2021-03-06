<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        .is-completed {
            text-decoration: line-through;
        }
    </style>
</head>
<body>

    <div class="container">
        @yield('content')
    </div>

<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ mix('js/vendor.js') }}"></script>
<script src="{{ mix('js/manifest.js') }}"></script>
    
</body>
</html>