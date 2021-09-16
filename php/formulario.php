<?php

$tipo_atendimento_Os = $_POST['Tipo'];
$data_Os = $_POST['Data'];
$cliente_Os = $_POST['Cliente'];
$endereco_Os = $_POST['Endereco'];
$bairro_Os = $_POST['Bairro'];
$elevador_Os = $_POST['Elevador'];
$mecanico_Os = $_POST['Mecanico'];
$defeito_Os = $_POST['Defeito'];
$solucao_Os = $_POST['Solucao'];
$material_Os = $_POST['Material'];
$imagens_Os = $_FILES['Imagens'];


//conecta com a base de dados
$conect = include 'conect.php';

//comando sql de inserir valor na tabela
$sql = "INSERT INTO atendimento_os(
tipo_atendimento_Os ,
data_Os ,
cliente_Os ,
endereco_Os ,
bairro_Os ,
elevador_Os ,
mecanico_Os ,
defeito_Os ,
solucao_Os ,
material_Os ,
imagens_Os 
) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";


//cria um stament um estado antes de ser usado o  sql
$prepare = $conect->prepare($sql);

$prepare->bindParam(1, $tipo_atendimento_Os);
$prepare->bindParam(2, $data_Os);
$prepare->bindParam(3, $cliente_Os);
$prepare->bindParam(4, $endereco_Os);
$prepare->bindParam(5, $bairro_Os);
$prepare->bindParam(6, $elevador_Os);
$prepare->bindParam(7, $mecanico_Os);
$prepare->bindParam(8, $defeito_Os);
$prepare->bindParam(9, $solucao_Os);
$prepare->bindParam(10, $material_Os);
$prepare->bindParam(11, $imagens_Os);

$prepare-> execute();


$form = "<p>Tipo de atendimento: $tipo_atendimento_Os</p><br><p>Data: 
$data_Os/p><br><p>Cliente: $cliente_Os</p><br><p>Endereço: 
$endereco_Os </p><br><p>Nome do mecânico:  $mecanico_Os</p><br>
<p>Defeito encontrado : $defeito_Os</p><br>
<p>Solução: $solucao_Os</p>" ;

if ($prepare->rowCount()) {

    echo "<h3>Cadastro realizado com sucesso!</h3><br>".$form;
    include 'index.html';
}

