<h1 class="mt-6 font-bold text-lg">Explorar Livros</h1>

<form action="" class="w-full space-x-2">
    <input type="text" class="border-stone-800 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" placeholder="Pesquisar..." name="search">
    <button type="submit">Buscar🔎</button>
</form>

<section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

    <?php foreach ($Livros as $livro): ?>
        <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
            <div class="flex">
                <div class="w-1/3">Imagem</div>
                <div class="space-y-1">
                    <a href="/livro?id=<?= $livro['id'] ?>" class="font-semibold hover:underline"><?= $livro['titulo'] ?></a>
                    <div class="text-xs italic"><?= $livro['autor'] ?></div>
                    <div class="text-xs italic">⭐⭐⭐⭐⭐ (3 Avaliação)</div>
                </div>
            </div>
            <div class="text-sm mt-2"><?= $livro['descricao'] ?></div>
        </div>
    <?php endforeach; ?>
</section>