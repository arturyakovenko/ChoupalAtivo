<?php
include 'includes/db.php';

// 1. Lógica Específica para TÉNIS
$tabela = 'reservas_tenis';
$data_selecionada = isset($_GET['data']) ? $_GET['data'] : date('Y-m-d');

// Ir buscar as horas ocupadas no TÉNIS
$stmt = $pdo->prepare("SELECT hora_reserva FROM $tabela WHERE data_reserva = ?");
$stmt->execute([$data_selecionada]);
$horas_ocupadas = $stmt->fetchAll(PDO::FETCH_COLUMN);

$horarios = ['09:00', '10:00', '11:00', '12:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00'];
?>

<!DOCTYPE html>
<html lang="pt-pt" class="font-['Poppins']">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar Ténis - Choupal Ativo</title>
    <link rel="shortcut icon" href="imgs/logo.png">
    <script src="js/tailwind4.1.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">
    <style>
        .bg-neon { background-color: #ADFF2F; }
        .text-neon { color: #ADFF2F; }
    </style>
</head>
<body class="bg-gray-100 text-black">

    <?php include 'includes/navbar.php'; ?>

    <div class="relative h-[40vh] bg-black flex items-center justify-center overflow-hidden">
        <img src="fts/index-tenis.jpeg" class="absolute inset-0 w-full h-full object-cover opacity-50">
        <div class="relative z-10 text-center px-4">
            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-2">Reservar <span class="text-neon">Ténis.</span></h1>
            <p class="text-gray-300 text-lg">Campos de Terra Batida e Padel</p>
        </div>
    </div>

    <main class="py-20 px-6 md:px-20 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <div>
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold">Verificar Horários</h2>
                    <a href="reservas_basket.php" class="text-sm font-bold text-gray-500 hover:text-black underline">Queres Basket?</a>
                </div>
                
                <form action="reservas_tenis.php" method="GET" class="bg-white p-6 rounded-xl shadow-lg mb-8">
                    <label class="block text-sm font-bold mb-2">Escolhe a Data</label>
                    <input type="date" name="data" value="<?php echo $data_selecionada; ?>" onchange="this.form.submit()" 
                           class="w-full p-3 bg-gray-50 border rounded-lg focus:outline-none focus:border-[#ADFF2F]">
                </form>

                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <h3 class="font-bold mb-4 text-gray-500 uppercase text-sm">Disponibilidade Ténis (<?php echo date('d/m/Y', strtotime($data_selecionada)); ?>)</h3>
                    <div class="grid grid-cols-3 md:grid-cols-4 gap-3">
                        <?php foreach($horarios as $hora): ?>
                            <?php 
                                $esta_ocupada = false;
                                foreach($horas_ocupadas as $h_ocupada) {
                                    if(substr($h_ocupada, 0, 5) == $hora) { $esta_ocupada = true; break; }
                                }
                            ?>
                            <?php if($esta_ocupada): ?>
                                <div class="p-3 rounded-lg bg-red-100 text-red-500 font-bold text-center border border-red-200 cursor-not-allowed opacity-60">
                                    <?php echo $hora; ?><br><span class="text-xs">Ocupado</span>
                                </div>
                            <?php else: ?>
                                <button onclick="selecionarHora('<?php echo $hora; ?>')" 
                                        class="p-3 rounded-lg bg-green-50 text-green-700 font-bold text-center border border-green-200 hover:bg-[#ADFF2F] hover:text-black hover:border-black transition-all">
                                    <?php echo $hora; ?><br><span class="text-xs">Livre</span>
                                </button>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-3xl font-bold mb-6">Finalizar Reserva</h2>
                <form action="actions/processar_tenis.php" method="POST" class="bg-white p-8 rounded-xl shadow-2xl border-t-4 border-[#ADFF2F]">
                    
                    <input type="hidden" name="data_reserva" value="<?php echo $data_selecionada; ?>">

                    <div class="space-y-4">
                        <div class="p-4 bg-gray-50 rounded-lg border border-gray-200 mb-6">
                            <p class="text-sm text-gray-500">A reservar Ténis para:</p>
                            <p class="font-bold text-lg">
                                Dia <?php echo date('d/m/Y', strtotime($data_selecionada)); ?> às <span id="mostrador-hora" class="text-red-500">--:--</span>
                            </p>
                        </div>

                        <div>
                            <label class="block text-sm font-bold mb-2">Hora Selecionada</label>
                            <input type="time" name="hora_reserva" id="input-hora" required readonly
                                   class="w-full p-4 bg-gray-100 text-gray-500 rounded-lg border border-gray-200 cursor-not-allowed">
                        </div>

                        <div>
                            <label class="block text-sm font-bold mb-2">Nome Completo</label>
                            <input type="text" name="nome" required placeholder="O teu nome" class="w-full p-4 bg-gray-50 rounded-lg border border-gray-200 focus:border-[#ADFF2F] focus:outline-none">
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-bold mb-2">Telefone</label>
                                <input type="tel" name="telefone" required placeholder="910..." class="w-full p-4 bg-gray-50 rounded-lg border border-gray-200 focus:border-[#ADFF2F] focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-bold mb-2">Email</label>
                                <input type="email" name="email" required placeholder="email@..." class="w-full p-4 bg-gray-50 rounded-lg border border-gray-200 focus:border-[#ADFF2F] focus:outline-none">
                            </div>
                        </div>

                        <button type="submit" class="w-full bg-black text-white font-bold py-4 rounded-lg text-lg hover:bg-[#ADFF2F] hover:text-black transition-all mt-6 shadow-lg">
                            CONFIRMAR TÉNIS
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script>
        function selecionarHora(hora) {
            document.getElementById('input-hora').value = hora;
            const mostrador = document.getElementById('mostrador-hora');
            mostrador.innerText = hora;
            mostrador.classList.remove('text-red-500');
            mostrador.classList.add('text-[#ADFF2F]', 'bg-black', 'px-2', 'rounded');
            if(window.innerWidth < 1024) document.getElementById('input-hora').scrollIntoView({behavior: "smooth"});
        }
    </script>
</body>
</html>