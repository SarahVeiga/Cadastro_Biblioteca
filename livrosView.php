<?php

function exibirLivros($livros) {
    echo "<ul>";
    foreach ($livros as $livro) {
        echo "<li>";
        echo "Título: " . $livro['titulo'] . " - Autor: " . $livro['autor'] . " de " . $livro['ano'];
        echo "</li>";
    }
    echo "</ul>";
}
?>
