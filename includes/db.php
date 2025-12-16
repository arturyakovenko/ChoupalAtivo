<?php
$host = 'localhost';
$db   = 'choupal_db'; // Nome da base de dados (igual ao seu HeidiSQL)
$user = 'root';       // Utilizador padrão do Laragon
$pass = '';           // Senha padrão (vazia)

try {
    // Cria a ligação e guarda na variável $pdo
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Se der erro, mostra a mensagem
    die("Erro na ligação à base de dados: " . $e->getMessage());
}
?>