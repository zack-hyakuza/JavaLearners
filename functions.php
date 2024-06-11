<?php

function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
<link rel="icon" href="javalearners-logo.svg" type="image/x-icon">
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>

	 <nav class="navtop">
    	<div>
    		<h1>Java Learners</h1>
            <a href="index.php"><i class="fas fa-home"></i>Início</a>
			<a href="activities.php"><i class="fas fa-book"></i>Atividades</a>
    	</div>
		
    </nav>
EOT;
}
function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
?>
