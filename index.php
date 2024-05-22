<?php
include 'functions.php';
// Your PHP code here.
$faviconUrl = 'javalearners-logo.svg';
$faviconPath = 'C:\xampp\htdocs\phpcrud\\'. $faviconUrl;
// Home Page template below.
?>
<link rel="icon" href="<?php echo $faviconPath;?>" type="image/x-icon">
<?=template_header('Home')?>
<link rel="icon" href="<?php echo 'javalearners-logo.svg';?>" type="image/x-icon">

<div class="content">
	<h2>Bem Vindo!</h2>
	<p>Aprenda java do básico.</p>
	<p>Um site com o objetivo de ensinar Java de maneira acessível e dinâmica!</p>
</div>

<?=template_footer()?>