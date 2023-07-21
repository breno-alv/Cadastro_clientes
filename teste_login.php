<?php

    session_start(); // startando uma sessão

    // print_r($_REQUEST);
   if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) // para que o acesso seja validado o campo email e senha não pode esta vazia.
   {
        //Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM tb_clientes where email='$email' and senha='$senha'"; // para que o acesso seja validado o campo email precisa ser email e senha precisar igual a senha
        $result = $conexao->query($sql); //essa linha é executada no banco

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1) // se o resultado for menor que 1 não validar o acesso
        {
        // print_r('Não existe');
        unset($_SESSION['email']); // se não existe nenhum registro com o e-mail e senha destrua qualuqer variavel
        unset($_SESSION['senha']);
        header('Location: tela_login.php'); 
        }
        else 
        { // se o resultado for maior que 0 valide o acesso. 
        // print_r('existe');
        $_SESSION['email'] = $email; //se existir a o email na variavel iniciar a sessão
        $_SESSION['senha'] = $senha; // se existir a osenha na variavel iniciar a sessão
        header('Location: sistema.php');
        }

   } 
   else {
    header('Location: tela_login.php');
   }
?>