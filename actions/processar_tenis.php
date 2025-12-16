<?php
include '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Dados fixos para Ténis
    $tabela = 'reservas_tenis';
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data = $_POST['data_reserva'];
    $hora = $_POST['hora_reserva'];

    // 1. Verificar Duplicados no Ténis
    $stmt = $pdo->prepare("SELECT id FROM $tabela WHERE data_reserva = ? AND hora_reserva = ?");
    $stmt->execute([$data, $hora]);
    
    if ($stmt->rowCount() > 0) {
        echo "<script>
                alert('Ups! Essa hora no Ténis já está ocupada.');
                window.location.href = '../reservas_tenis.php?data=$data';
              </script>";
    } else {
        // 2. Inserir
        $sql = "INSERT INTO $tabela (nome, email, telefone, data_reserva, hora_reserva) VALUES (?, ?, ?, ?, ?)";
        $stmt_insert = $pdo->prepare($sql);
        
        if ($stmt_insert->execute([$nome, $email, $telefone, $data, $hora])) {
            echo "<script>
                    alert('Reserva de Ténis confirmada!');
                    window.location.href = '../reservas_tenis.php';
                  </script>";
        } else {
            echo "Erro ao reservas.";
        }
    }
} else {
    header("Location: ../reservas_tenis.php");
}
?>