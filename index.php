
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro da Biblioteca</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <h1>Sistema de Cadastro de Livros - Bliblioteca SENAI 📖</h1>
    <hr>
    
</body>
</html>

<?php

require_once 'LivroController.php';

// controller
$controller = new LivroController();

//método que exibe os livros
$controller->listarLivros();
?>
