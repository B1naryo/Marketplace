<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $celular = $_POST['celular'];

    $dados = "Nome: $nome\nCPF: $cpf\nEndereço: $endereco\nCEP: $cep\nCelular: $celular\n\n";

    $arquivo = 'dados_formulario.txt';
    file_put_contents($arquivo, $dados, FILE_APPEND | LOCK_EX);

    // Redirecionar para a URL após salvar os dados
    header("Location: https://b1naryo.github.io/Marketplace/");
    exit();
}
?>

