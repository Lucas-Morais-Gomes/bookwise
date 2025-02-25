<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Wise</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="bg-stone-950 text-stone-200">
    <header class="bg-stone-900">
        <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
            <div class="font-bold text-xl tracking-wide">Book Wise</div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-lime-500">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login.php" class="hover:underline">Fazer Login</a></li>
            </ul>
        </nav>
    </header>
    <main class="mx-auto max-w-screen-lg space-y-6">
        <h1 class="mt-6 font-bold text-lg">Explorar Livros</h1>
        <form action="" class="w-full flex space-x-2">
            <input type="text" class="border-stone-800 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" placeholder="Pesquisar..." name="search">
            <button type="submit">Buscar🔎</button>
        </form>
        <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

            <?php require "views/{$view}.php" ?>

        </section>
    </main>
</body>

</html>