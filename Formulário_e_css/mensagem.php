<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $turma = $_POST['turma'];
    $numero = $_POST['numero'];
    
    echo "Olá $nome $sobrenome da turma $turma, do número $numero seja bem-vindo!";
}
?>