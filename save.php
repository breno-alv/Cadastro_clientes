<?php 

    include_once('config.php');
     var_dump($_POST);
    
    if(isset($_POST['update']))
   
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nascimento = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        $senha = $_POST['senha'];

        $sqlUpdate = "UPDATE tb_clientes SET  nome='$nome', email='$email', telefone='$telefone', sexo='$sexo', data_nascimento='$data_nascimento', 
        cidade='$cidade', estado='$estado', endereco='$endereco', senha='$senha' WHERE id = '$id'";

        $result = $conexao->query($sqlUpdate);

    }

    header('Location: sistema.php');

?> 