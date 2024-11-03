<?php

include 'functions.php';
include 'conexao.php';
$msg = '';

$activePage = 'Cadastro';

date_default_timezone_set('America/Sao_Paulo');

if (!empty($_POST)) {

    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
    $registro = date('Y-m-d H:i:s');

    $stmt = $mysqli->prepare('INSERT INTO contatos (nome, email, telefone, registro, senha) VALUES(?, ?, ?, ?, ?)');
    if ($stmt) {

        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        $stmt->bind_param('sssss', $nome, $email, $telefone, $registro, $senha_hash);

        if ($stmt->execute()) {
            $msg = 'Cadastro realizado com sucesso!';
            header("Location: index.php");
        } else {
            $msg = 'Falha ao realizar cadastro, tente novamente mais tarde.';
        }

        $stmt->close();

    } else {
        $msg = 'Falha no processo de cadastro.';
    }

}

?>

<?=template_header('Cadastro', $activePage)?>

<div class="cadastro">
    <h2>Cadastro</h2>
    <form action="create.php" method="post">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="James Gosling"><br>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="usuario@gmail.com"><br>
        </div>
        <div>
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" placeholder="11992345678"><br>
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="r6$nprIgl"><br>
        </div>
        <input type="submit" value="Criar">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>

    <h2>Já possui uma conta?</h2>
    <a href="index.php" class="btn-login-cadastro">Login</a>
</div>


<?=template_footer()?>
