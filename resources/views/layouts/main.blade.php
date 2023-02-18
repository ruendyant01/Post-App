<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d561733e28.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/d561733e28.css" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
    <title>Home</title>
</head>
<body>
    <div class="flex w-1/3 mx-auto flex-col justify-center items-center space-y-6 border border-black">
        @yield("content")
    </div>
    @livewireScripts
</body>
</html>