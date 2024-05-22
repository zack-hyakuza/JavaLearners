<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'phpcrud';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}


$faviconUrl = 'javalearners-logo.svg';
$faviconPath = 'C:\xampp\htdocs\phpcrud\\'. $faviconUrl;

function template_header($title) 
{
echo <<<EOT
<!DOCTYPE html>

<html>
<link rel="icon" href="javalearners-logo.svg" type="image/x-icon">

	<head>
	
		<meta charset="utf-8">
<link rel="icon" href="<?php echo 'javalearners-logo.svg';?>" type="image/x-icon">
	
		<title>JavaLearners</title>
		
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
	
    <nav class="navtop">
    	<div>
    		<h1>Java Learners</h1>
            <a href="index.php"><i class="fas fa-home"></i>Ínicio</a>
			<a href="activities.php"><i class="fas fa-book"></i>Atividades</a>
    		<a href="read.php"><i class="fas fa-address-book"></i>Contatos</a>
    	</div>
		
    </nav>
EOT;}
function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
?>