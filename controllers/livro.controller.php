<?php

$livros = (new Livro)->getLivros($_REQUEST['id']);

view('livro', compact('livro'));
