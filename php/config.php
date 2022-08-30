<?php

    $dbHost = 'Localhost';
    $dbUsername = 'CCT';
    $dbPassword =  '';
    $dbName = 'camila_db';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

   /* if ($conexao->connect_errno)
   {
   echo "Erro";
   }
   else {
       echo "Conexão estabelecida!";
   }*/
?>