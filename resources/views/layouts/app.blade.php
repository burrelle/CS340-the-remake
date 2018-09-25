<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <title>CS340 - The Remake</title>
</head>
<body class="container mx-auto antialiased">
    <nav class="flex list-reset mb-4 pt-2">
        <li><a class="mr-4 no-underline text-black font-semibold hover:text-blue-dark hover:font-bold" href="/">Home</a></li>
        <li><a class="mr-4 no-underline text-black font-semibold hover:text-blue-dark hover:font-bold" href="/teams">Teams</a></li>
        <li><a class="mr-4 no-underline text-black font-semibold hover:text-blue-dark hover:font-bold" href="/players">Players</a></li>
    </ul>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>
