<?php

include 'functions.php';
include 'conexao.php';
include 'protect.php';

$activePage = 'Biblioteca';

?>

<?=template_header('Biblioteca', $activePage)?>

<div class="atividades">
    <h2>Conteúdo Disponível</h2>
    <p>Bem-vindo a sua biblioteca de conhecimento Java, <?php echo $_SESSION['nome']; ?>! Aqui estão seus pacotes disponíveis.</p>

    <h3>Pacote Java Learner - Sledge</h3>
    <ul>
        <li><a href="#">Aula 1: #.</a></li>
		<li><a href="#">Desafio 1: #</a></li>
        <li><a href="#">Aula 2: #.</a></li>
		<li><a href="#">Desafio 2: #</a></li>
        <li><a href="#">Aula 3: #.</a></li>
		<li><a href="#">Desafio 3: #</a></li>
    </ul>

    <hr>
	
	<h3>Pacote Java Learner - Jäger</h3>
    <ul>
        <li><a href="#">Aula 1: #.</a></li>
		<li><a href="#">Desafio 1: #</a></li>
        <li><a href="#">Aula 2: #.</a></li>
		<li><a href="#">Desafio 2: #</a></li>
        <li><a href="#">Aula 3: #.</a></li>
		<li><a href="#">Desafio 3: #</a></li>
    </ul>

    <hr>

    <h3>Pacote Java Learner - Maestro</h3>
    <ul>
        <li><a href="#">Aula 1: #</a></li>
		<li><a href="#">Desafio 1: #</a></li>
        <li><a href="#">Aula 2: #</a></li>
		<li><a href="#">Desafio 2: #</a></li>
        <li><a href="#">Aula 3: #.</a></li>
		<li><a href="#">Desafio 3: #</a></li>
    </ul>

    <hr>

    <h3>Pacote Java Learner - Maverick</h3>
    <ul>
	<li><a href="#">Aula 1: #</a></li>
		<li><a href="#">Desafio 1: #</a></li>
        <li><a href="#">Aula 2: #</a></li>
		<li><a href="#">Desafio 2: #</a></li>
        <li><a href="#">Aula 3: #.</a></li>
		<li><a href="#">Desafio 3: #</a></li>
    </ul>
</div>

<div class="encerrar-acesso">
    <p>
        <a href="logout.php" class="btn-encerrar-acesso">Encerrar acesso</a>
    </p>
</div>


<?=template_footer()?>
