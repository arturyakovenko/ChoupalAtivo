<?php
// 1. CORREÇÃO DO CAMINHO: Usar ../ para ir buscar o db.php à pasta includes
include '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 2. RECEBER OS DADOS DO FORMULÁRIO (Iguais à sua imagem)
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    
    // O formulário envia o 'value' do select (ex: 'caminhada', 'plantacao')
    $evento = isset($_POST['evento']) ? $_POST['evento'] : 'Geral';

    try {
        // 3. INSERIR NA NOVA TABELA 'inscricoes'
        // A tabela agora tem as colunas: nome, email, telefone, evento
        $sql = "INSERT INTO inscricoes (nome, email, telefone, evento) VALUES (?, ?, ?, ?)";
        
        // Usamos $pdo (que vem do db.php)
        $stmt = $pdo->prepare($sql);
        
        if ($stmt->execute([$nome, $email, $telefone, $evento])) {
            // Sucesso: Mostra mensagem e volta à página inicial
            echo "<script>
                    alert('Inscrição confirmada com sucesso!');
                    window.location.href = '../index.php';
                  </script>";
        } else {
            echo "Erro ao tentar inscrever.";
        }
    } catch (PDOException $e) {
        echo "Erro de Base de Dados: " . $e->getMessage();
    }

} else {
    // Se tentarem aceder diretamente ao ficheiro, manda de volta para o formulário
    header("Location: ../inscricao.php");
    exit();
}
?>