<?php

function template_header($title, $activePage) {
    echo <<<EOT
<!DOCTYPE html>
<html>
<link rel="icon" href="javalearners-logo.svg" type="image/x-icon">
<head>

    <meta charset="utf-8">
    <title>$title</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>

<header>
    <nav class="navtop" role="navigation" aria-label="Main navigation">
        <div>
            <h1>Java Learners</h1>
            <p><a href="index.php" class="<?= $activePage === 'home' ? 'active' : '' ?>"><i class="fas fa-home"></i> Início</a></p>
            <p><a href="activities.php" class="<?= $activePage === 'activities' ? 'active' : '' ?>"><i class="fas fa-book"></i> Atividades</a></p>
        </div>
    </nav>
</header>
EOT;
}
function template_footer() {
    echo <<<EOT
    </body>
</html>
EOT;
}
?>

