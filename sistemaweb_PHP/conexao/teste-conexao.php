<?php

require 'conecta.php';

$pdo=new Conexao();
//cho 'Conectou com Sucesso';
echo $pdo->selecionar();

?>
