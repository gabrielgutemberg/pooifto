<?php 


$pdo = new PDO("mysql:host=localhost;dbname=meu_banco","root","");
if(!$pdo) die("A Conexao com o banco falhou");


echo"<h3>Lista de usuários</h3><br>";

$identificador = 2;
$sql = "SELECT * FROM usuarios where id = id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    "id"=> $identificador,
]);

foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row){
    echo "Nome: ". $row["nome"] . "<br>";
    echo "Email: ". $row["email"] . "<br>";
}
?>