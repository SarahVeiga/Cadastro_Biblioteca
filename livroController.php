<?php

require_once 'Livro.php';
require_once 'livrosView.php';

class LivroController {
    private $livroModel;

    // instância do modelo dos livros
    public function __construct() {
        $this->livroModel = new Livro();
    }

    // Método para listar todos os livros
    public function listarLivros() {
        $livros = $this->livroModel->listarLivros();
        exibirLivros($livros);  //
    }
}
?>
