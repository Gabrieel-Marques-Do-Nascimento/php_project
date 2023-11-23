<?php 


$dbHost = 'Localhost';
$dbusername ='root';
$dbpassword = '';
$dbname = 'cadastro-web';

$conexao = new mysqli($dbHost,$dbusername,$dbpassword,$dbname );


if($conexao->connect_error) {      //text de conexão com banco de dados
    echo "erro";
}
else{
    echo  "sucesso";
}

?>