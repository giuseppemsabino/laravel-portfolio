<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>
    <div class="container my-4">
        <h1>
            @yield("title")
        </h1>

        @yield("content")
    </div>
</body>
</html>