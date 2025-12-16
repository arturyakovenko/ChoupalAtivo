<?php
// Captura o evento vindo do URL (ex: ?evento=caminhada)
$evento_selecionado = isset($_GET['evento']) ? $_GET['evento'] : '';
?>

<!DOCTYPE html>
<html lang="pt-pt" class="font-['Poppins']">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choupal Ativo - Inscrição</title>
    <link rel="shortcut icon" href="imgs/logo.png">
    <script src="js/tailwind4.1.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">
    <style>
        .bg-neon { background-color: #ADFF2F; }
        .focus-neon:focus { border-color: #ADFF2F; ring-color: #ADFF2F; }
    </style>
</head>
<body class="bg-gray-100 text-black">

    <?php include 'includes/navbar.php'; ?>

    <main class="min-h-screen flex items-center justify-center py-20 px-4">
        <div class="bg-white p-8 md:p-12 rounded-2xl shadow-xl w-full max-w-2xl">
            
            <div class="text-center mb-10">
                <h1 class="text-4xl font-extrabold mb-2">Junta-te a <span class="text-[#ADFF2F] bg-black px-2 text-white">nós.</span></h1>
                <p class="text-gray-500">Preenche o formulário para garantires o teu lugar.</p>
            </div>

            <form action="actions/processar_inscricao.php" method="POST" class="space-y-6">
                
                <div>
                    <label class="block text-sm font-bold mb-2">Nome Completo</label>
                    <input type="text" name="nome" required placeholder="O teu nome" 
                           class="w-full p-4 bg-gray-50 rounded-lg border border-gray-200 focus:outline-none focus:border-[#ADFF2F] focus:ring-2 focus:ring-[#ADFF2F]/50 transition-all">
                </div>

                <div>
                    <label class="block text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email" required placeholder="exemplo@email.com" 
                           class="w-full p-4 bg-gray-50 rounded-lg border border-gray-200 focus:outline-none focus:border-[#ADFF2F] focus:ring-2 focus:ring-[#ADFF2F]/50 transition-all">
                </div>

                <div>
                    <label class="block text-sm font-bold mb-2">Telefone</label>
                    <input type="tel" name="telefone" placeholder="912 345 678" 
                           class="w-full p-4 bg-gray-50 rounded-lg border border-gray-200 focus:outline-none focus:border-[#ADFF2F] focus:ring-2 focus:ring-[#ADFF2F]/50 transition-all">
                </div>

                <div>
                    <label class="block text-sm font-bold mb-2">Qual o evento?</label>
                    <div class="relative">
                        <select name="evento" required 
                                class="w-full p-4 bg-gray-50 rounded-lg border border-gray-200 focus:outline-none focus:border-[#ADFF2F] focus:ring-2 focus:ring-[#ADFF2F]/50 transition-all appearance-none cursor-pointer">
                            
                            <option value="" disabled <?php echo $evento_selecionado == '' ? 'selected' : ''; ?>>Escolhe uma opção...</option>
                            
                            <option value="plantacao" <?php echo $evento_selecionado == 'plantacao' ? 'selected' : ''; ?>>Grande Plantação (15 Out)</option>
                            <option value="caminhada" <?php echo $evento_selecionado == 'caminhada' ? 'selected' : ''; ?>>Caminhada Noturna (22 Out)</option>
                            <option value="limpeza" <?php echo $evento_selecionado == 'limpeza' ? 'selected' : ''; ?>>Limpeza do Parque (29 Out)</option>
                        </select>
                        
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </div>
                    </div>
                </div>

                <button type="submit" class="w-full bg-black text-white font-bold py-4 rounded-lg text-lg hover:bg-[#ADFF2F] hover:text-black transition-colors transform hover:scale-[1.02] duration-200 shadow-lg">
                    CONFIRMAR INSCRIÇÃO
                </button>

            </form>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

</body>
</html>