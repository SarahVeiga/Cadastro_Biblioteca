<?php

class Livro {
    // Armazenando os lovros
    private $livros;


    public function __construct() {
        $this->livros = [
            ['titulo' => 'Dom Casmurro', 'autor' => 'Machado de Assis', 'ano' => 1899],
            ['titulo' => 'É Assim Que Acabaa', 'autor' => 'Colleen Hoover', 'ano' => 2016],
            ['titulo' => 'O Primo Basílio', 'autor' => 'José de Alencar', 'ano' => 1857],
            ['titulo' => 'Crepúsculo', 'autor' => 'Stephenie Meyer', 'ano' => 2007],
            ['titulo' => 'Memórias Póstumas de Brás Cubas', 'autor' => 'Machado de Assis', 'ano' => 1881],
            ['titulo' => 'O Menino do Pijama Listrado', 'autor' => 'John Boyne', 'ano' => 2007],
            ['titulo' => 'A Moreninha', 'autor' => 'Joaquim Manuel de Macedo', 'ano' => 1844],
            ['titulo' => 'Extraordinário', 'autor' => 'R. J. Palacio', 'ano' => 2012],
            ['titulo' => 'Senhora', 'autor' => 'José de Alencar', 'ano' => 1875]
        ];
    }

    // Método para retornar todos livros cadastrados
    public function listarLivros() {
        return $this->livros;
    }
}
?>
