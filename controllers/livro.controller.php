<?php

require 'dados.php';

$id = ($_REQUEST['id']);

$filtrado = array_filter($Livros, fn($livro) => $livro['id'] == $id);

$livro = array_pop($filtrado);

$view = 'livro';
require "views/template/app.view.php";
