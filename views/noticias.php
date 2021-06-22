<title>Noticias - MRR-Racing</title>

<?php

for ($i=0; $i < count($this->dadosPag); $i++) { 
    echo $this->dadosPag[$i]['descricao'].'<br><br>';
}