<?php
include 'functions.php';
include 'conexao.php';

if (isset($_POST['email']) || isset($_POST['senha'])) {
    
    if(strlen($_POST['email']) == 0){
        echo "Preencha o campo de email.";
    }
    
    else if(strlen($_POST['senha']) == 0) {
        echo "Preencha o campo de senha.";
    }
    
    else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();
            
            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: activities.php");
        }
        else {
            echo "Falha ao fazer login. E-mail ou senha incorretos.";
        }
    }

}

?>

<?=template_header('JavaLearners')?>

<div class="content">
	<h2>Início</h2>
	<p>Seja bem-vindo ao Java Learners!</p>
</div>



<div class="content read">
	<h2>Acesse a Sua Conta</h2>
	<form action="" method="POST">
        
        <p>
            <label>Email</label>
            <input type="text" placeholder = "Email" name="email">
        </p>

        <p>
            <label>Senha</label>
            <input type="password" name="senha">
        </p>

        <p>
            <button type="submit">Entrar</button>
        </p>

        <h2>
        Não possui conta?
        </h2>
	
        <a href="create.php" class="create-contact">Cadastre-se</a>
	
</div>
