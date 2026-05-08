<?php 


$pdo = new PDO("mysql:host=localhost;dbname=meu_banco","root","");
if(!$pdo) die("A Conexao com o banco falhou");


echo"<h3>Lista de usuários</h3><br>";


$sql = "INSERT INTO usuarios(nome, email) VALUES(:nome, :email)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ":nome" => "Jubileu",
    ":email" => "jubileu@email.com"
]);

$identificador = 1;
$sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ":nome" => "Gabriel",
    ":email" => "gabriel@email.com",
    ":id" => $identificador
]);


$identificador = 5;
$sql = "DELETE FROM usuarios WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ":id" => $identificador
]);

$sql = "SELECT * FROM usuarios";
$stmt = $pdo->prepare($sql);
$stmt->execute();

foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row){
    echo "Nome: ". $row["nome"] . "<br>";
    echo "Email: ". $row["email"] . "<br>";
}

?>