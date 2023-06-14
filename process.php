<?php
//Aqui analisa e encaminha as tarefas adicionadas para o banco de dados ems na coleçao tarefas

$host = 'localhost';  
$port = 27017;  // 


$uri = "mongodb://$host:$port";
$manager = new MongoDB\Driver\Manager($uri);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $data = $_POST["data"];
        $tempo = $_POST["tempo"];
        $modelo = $_POST["modelo"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $obs = $_POST["obs"];

    
    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->insert($data);
    $bulk->insert($tempo);
    $bulk->insert($modelo);
    $bulk->insert($nome);
    $bulk->insert($email);
    $bulk->insert($obs);

    
    $manager->executeBulkWrite('carros.carros', $bulk);



	
	    
header("Location: index.php");
    exit();


}
?>