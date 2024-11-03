<?php
include 'functions.php';
include 'conexao.php';

$activePage = 'pginicial';

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

        $sql_code = "SELECT * FROM contatos WHERE email = '$email' AND senha = '$senha'";
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

<?=template_header('Java Learners', $activePage)?>
<div class="bloco-principal-pginicial">
    <div class="bloco-lateral-pginicial">
        <div class="bv-pginicial">
            <h2>Início</h2>
            <p>Seja bem-vindo ao Java Learners!</p>
        </div>

        <div class="login-pginicial">
            <h2>Acesse a Sua Conta</h2>
            <form action="" method="POST">
                <p>
                    <label>Email</label>
                    <input type="text" placeholder="Email" name="email">
                </p>

                <p>
                    <label>Senha</label>
                    <input type="password" name="senha">
                </p>

                <p>
                    <button type="submit" class="btn-entrar-pginicial">Entrar</button>
                </p>

                <h2>Não possui conta?</h2>
                <a href="create.php" class="btn-cadastro-pginicial">Cadastre-se</a>
            </form>
        </div>

        <div class="bloco-promocao-pginicial">
            <h2>PROMOÇÃO DE FIM DE ANO!</h2>
            <p>Todos os pacotes que forem comprados até dia 31/12/2024 acompanharão junto dele o <strong>Pacote Java Learner - Sledge</strong>, não percam a oportunidade!</p>
        </div>
    </div>

    <div class="bloco-central-pginicial">
        <h2>Pacotes disponíveis</h2>
        
        <div class="conteudo-central-pginicial">
            <h3>Pacote Java Learner - Jäger</h3>
            <p>O pacote Java Learner - Jäger é um pacote crucial para aquele que deseja conhecer além do básico a respeito da linguagem java e se tornar um Jager da programação.</p>
            <p>Conteúdos disponíveis no Pacote Java Learner - Jager:</p>
            <ul>
                <li>- Pacote Java Learner - Sledge, o fundamento do mundo Java</li>
                <li>- Estrutura de dados</li>
                <li>- Tratamento de exceções</li>
                <li>- Manipulação de arquivos e dados</li>
                <li>- Coleções</li>
                <li>- Introdução à interface gráfica</li>
                <li>- Projeto Final: Gerenciador de tarefas simples</li>
            </ul>

            <a href="#" class="btn-comprar-pct-pginicial">Comprar Pacote</a>

        </div>

        <div class="conteudo-central-pginicial">
            <h3>Pacote Java Learner - Maestro</h3>
            <p>O Pacote Java Learner - Maestro é para você, que já possui um conhecimento prévio a respeito da linguagem Java, porém, deseja aperfeiçoá-lo e se tornar um verdadeiro Maestro da codificação.</p>
            <p>Conteúdos disponíveis no Pacote Java Learner - Maestro:</p>
            <ul>
                <li>- Pacote Java Learner - Sledge, o fundamento do mundo Java</li>
                <li>- Threads e programação concorrente</li>
                <li>- Introdução a banco de dados usando JDBC</li>
                <li>- Boas práticas de design de software</li>
                <li>- Integração com APIs externas</li>
                <li>- Testes automatizados</li>
                <li>- Projeto Final: Software de Agenda conectado a um banco de dados</li>
            </ul>

            <a href="#" class="btn-comprar-pct-pginicial">Comprar Pacote</a>

        </div>

        <div class="conteudo-central-pginicial">
            <h3>Pacote Java Learner - Maverick</h3>
            <p>O Pacote Java Learner - Maverick é o ultimato. Esse pacote é para quem já domina a linguagem Java, mas deseja novos desafios para expandir ainda mais seu conhecimento, para que assim se torne um soberano da programação, um legítimo Maverick.</p>
            <p>Conteúdos disponíveis no Pacote Java Learner - Maverick:</p>
            <ul>
                <li>- Pacote Java Learner - Sledge, o fundamento do mundo Java</li>
                <li>- Gerenciamento de memória e otimização de desempenho</li>
                <li>- Metaprogramação</li>
                <li>- Desenvolvimento de aplicações Multithreaded</li>
                <li>- Integração com bancos de dados e boas práticas de persistência</li>
                <li>- Implementação de padrões de projeto na prática</li>
                <li>- Ferramentas de teste e TDD (Test-Driven Development)</li>
                <li>- Introdução ao uso de frameworks (Spring Boot)</li>
                <li>- Projeto Final: Sistema de gestão empresarial com login e relatórios dinâmicos</li>
            </ul>

            <a href="#" class="btn-comprar-pct-pginicial">Comprar Pacote</a>

        </div>
    </div>
</div>



