<!DOCTYPE html>
<html>

<head>
    <title>title</title>
    <meta charset="UTF-8" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        {{ $slot }}
    </section>
</body>

</html>
