<?php

$search = $_REQUEST['search'] ?? '';

$Livros = (new Livro)->getLivros($search);

view('index', compact('Livros'));
