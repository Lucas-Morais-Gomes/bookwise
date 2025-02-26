<?php

class Livro
{
    public $id;
    public $titulo;
    public $autor;
    public $ano_lancamento;
    public $descricao;

    public static function make($item)
    {
        $livro = new self();
        $livro->id = $item['id'];
        $livro->titulo = $item['titulo'];
        $livro->autor = $item['autor'];
        $livro->ano_lancamento = $item['ano_lancamento'];
        $livro->descricao = $item['descricao'];

        return $livro;
    }

    public function getLivros($search = null)
    {

        $db = new PDO('sqlite:database.sqlite');

        $prepare = $db->prepare("SELECT * FROM livros WHERE usuario_id = 1 AND titulo LIKE :search OR autor LIKE :search OR descricao LIKE :search");
        $prepare->bindValue('search', "%$search%");
        $prepare->setFetchMode(PDO::FETCH_CLASS, Livro::class);
        $prepare->execute();

        return $prepare->fetchAll();
    }


    public function getLivroById($id)
    {
        $db = new PDO('sqlite:database.sqlite');

        $prepare = $db->prepare("SELECT * FROM livros WHERE id = :id");
        $prepare->bindValue('id', $id);
        $prepare->setFetchMode(PDO::FETCH_CLASS, Livro::class);
        $prepare->execute();

        return $prepare->fetch();
    }
}
