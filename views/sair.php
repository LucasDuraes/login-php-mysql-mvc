<title>Sair - MRR-Racing</title>
<?php
echo 'Saindo';
session_destroy();
header('Location: http://localhost/login-php-mysql-mvc/inicio');
?>