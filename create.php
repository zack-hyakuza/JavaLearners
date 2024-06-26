<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';

// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
    
    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO contacts (name, email, phone, title, created) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$name, $email, $phone, $title, $created]);
    
    // Output message
    $msg = 'Conta Criada com Sucesso!';
}
?>

<?=template_header('Create')?>

<div class="content update">
    <h2>Crie sua Conta</h2>
    <form action="create.php" method="post">
        <div class="input-group">
            <label for="name">Nome</label>
<div>
            <input type="text" name="name" id="name" placeholder="Davi Araujo"><br>
        </div>
        <div class="input-group">
            <label for="email">Email</label>
<div>
            <input type="text" name="email" id="email" placeholder="davi41@gmail.com"><br>
        </div>
        <div class="input-group">
            <label for="phone">Telefone</label>
<div>
            <input type="text" name="phone" id="phone" placeholder="11921151619"><br>
        </div>
        <div class="input-group">
            <label for="title">Cargo</label>
<div>
            <input type="text" name="title" id="title" placeholder="Auxiliar de Informática"><br>
        </div>
        <div class="input-group">
            <label for="created">Criado</label>
<div>
            <input type="datetime-local" name="created" id="created" value="<?=date('Y-m-d\TH:i')?>"><br>
        </div>
        <input type="submit" value="Criar">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>
