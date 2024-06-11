<?php
include 'functions.php';
include 'conexao.php';
$msg = '';

?>

<?=template_header('Cadastro')?>

<div class="content update">
    <h2>Cadastro</h2>
    <form action="create.php" method="post">
        <div class="input-group">
            <label for="name">Nome</label>
<div>
            <input type="text" name="name" id="name" placeholder="Davi Araujo"><br>
</div>
        <div class="input-group">
            <label for="email">Email</label>
<div>
            <input type="text" name="email" id="email" placeholder="davi@gmail.com"><br>
</div>
        <div class="input-group">
            <label for="senha">Senha</label>
<div>
            <input type="text" name="senha" id="senha" placeholder="exemplo: r6$nprIgl"><br>
</div>
        <input type="submit" value="Criar">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>

    <h2>Ja possui uma conta ?</h2>
    <a href="index.php"> Fazer login</a>
</div>

<?=template_footer()?>
