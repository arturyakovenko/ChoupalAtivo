<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Receber dados
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $pt_escolhido = $_POST['pt_escolhido'];
    $data_aula = $_POST['data_aula'];
    $hora_aula = $_POST['hora_aula'];

    // 1. VERIFICAR DISPONIBILIDADE
    $check_sql = "SELECT id FROM reservas_pt WHERE pt_escolhido = '$pt_escolhido' AND data_aula = '$data_aula' AND hora_aula = '$hora_aula'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        // CASO DE ERRO (JÁ OCUPADO) - Pop-up de erro e volta para trás
        echo "<script>
            alert('Lamentamos, mas esse horário já está ocupado!\\n\\nO/A PT $pt_escolhido já tem aula marcada no dia $data_aula às $hora_aula.\\n\\nPor favor, escolhe outra hora.');
            window.history.back();
        </script>";
        
    } else {
        // CASO DE SUCESSO (LIVRE) - Gravar
        $sql = "INSERT INTO reservas_pt (nome_cliente, idade, email, telefone, pt_escolhido, data_aula, hora_aula) 
                VALUES ('$nome', '$idade', '$email', '$telefone', '$pt_escolhido', '$data_aula', '$hora_aula')";

        if ($conn->query($sql) === TRUE) {
            // AQUI ESTÁ A MUDANÇA: Pop-up de sucesso e redireciona para o index
            echo "<script>
                alert('Marcação Confirmada com Sucesso! ✅\\n\\nObrigado $nome.\\nAula com: $pt_escolhido\\nDia: $data_aula às $hora_aula\\n\\nEntraremos em contacto brevemente.');
                window.location.href = 'index.php';
            </script>";
        } else {
            echo "Erro na base de dados: " . $conn->error;
        }
    }
}
$conn->close();
?>