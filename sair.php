<?php   // essa logica é para quando o usuario clicar no botão sair
        session_start();
        unset($_SESSION['email']); // Alem de voltar para a tela de login destrua qualquer variavel com email e senha. 
        unset($_SESSION['senha']);
        header('Location: tela_login.php')
?>