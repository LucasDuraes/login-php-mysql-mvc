<title>Inicio - MRR-Racing</title>

<?php

    if (isset($_SESSION['usuario'])) {
        echo session_id();
        echo '<br>';
        echo $_SESSION['usuario'].'<br>';
        echo $_SESSION['email'];
        echo '<br>';
    }
?>