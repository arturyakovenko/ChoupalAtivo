<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choupal Ativo - Personal Trainers</title>
    <link rel="shortcut icon" href="imgs/logo.png">
   <script src="js/tailwind4.1.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">
    <style> 
        html { scroll-behavior: smooth; font-family: 'Poppins', sans-serif; } 
        /* Efeito suave nas imagens */
        .pt-card:hover img { transform: scale(1.05); }
    </style>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    <?php include 'includes/navbar.php'; ?>

    <div class="flex-grow py-20 px-6">
        <div class="max-w-6xl mx-auto"> 
            
            <div class="text-center mb-20">
                <h1 class="text-5xl md:text-6xl font-extrabold mb-4">A nossa <span class="text-[#ADFF2F]">Equipa.</span></h1>
                <p class="text-xl text-gray-600">Profissionais dedicados a transformar a tua saúde.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-10 mb-20">
                
                <div class="pt-card bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 text-center flex flex-col items-center">
                    <div class="w-64 h-64 mb-6 overflow-hidden rounded-2xl shadow-md">
                        <img src="fts/pt-rui.jpg" class="w-full h-full object-cover transition-transform duration-500" alt="Rui">
                    </div>
                    <h3 class="text-3xl font-extrabold mb-2">Rui Pedro</h3>
                    <span class="bg-black text-[#ADFF2F] font-bold text-sm uppercase px-3 py-1 rounded-full mb-6 tracking-wide">Musculação</span>
                    <div class="relative">
                        <p class="text-gray-600 italic text-lg leading-relaxed">
                            "A verdadeira força não vem de levantar pesos, mas de levantar-se sempre que a vida pesa."
                        </p>
                    </div>
                </div>

                <div class="pt-card bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 text-center flex flex-col items-center">
                    <div class="w-64 h-64 mb-6 overflow-hidden rounded-2xl shadow-md">
                        <img src="fts/pt-ana.jpg" class="w-full h-full object-cover transition-transform duration-500" alt="Ana">
                    </div>
                    <h3 class="text-3xl font-extrabold mb-2">Ana Estevão</h3>
                    <span class="bg-black text-[#ADFF2F] font-bold text-sm uppercase px-3 py-1 rounded-full mb-6 tracking-wide">Pilates & Yoga</span>
                    <div class="relative">
                        <p class="text-gray-600 italic text-lg leading-relaxed">
                            "O equilíbrio do corpo começa quando a mente encontra silêncio. Respira e transforma-te."
                        </p>
                    </div>
                </div>

                <div class="pt-card bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 text-center flex flex-col items-center">
                    <div class="w-64 h-64 mb-6 overflow-hidden rounded-2xl shadow-md">
                        <img src="fts/pt-teresa.jpg" class="w-full h-full object-cover transition-transform duration-500" alt="Teresa">
                    </div>
                    <h3 class="text-3xl font-extrabold mb-2">Teresa Wang</h3>
                    <span class="bg-black text-[#ADFF2F] font-bold text-sm uppercase px-3 py-1 rounded-full mb-6 tracking-wide">Crossfit</span>
                    <div class="relative">
                        <p class="text-gray-600 italic text-lg leading-relaxed">
                            "O teu único limite és tu mesmo. Transforma o 'não consigo' em 'já consegui' a cada repetição."
                        </p>
                    </div>
                </div>

            </div>

            <div class="bg-black text-white p-10 md:p-16 rounded-[2.5rem] shadow-2xl relative overflow-hidden">
                <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-[#ADFF2F] rounded-full opacity-10 blur-3xl"></div>
                
                <h2 class="text-4xl md:text-5xl font-bold mb-2 text-center relative z-10">Reserva a tua Sessão</h2>
                <p class="text-gray-400 text-center mb-10 relative z-10">O primeiro passo para a tua mudança começa aqui.</p>
                
                <form action="actions/processar_pt.php" method="POST" class="space-y-6 relative z-10 max-w-3xl mx-auto">
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm text-[#ADFF2F] mb-2 font-bold uppercase tracking-wider">Nome</label>
                            <input type="text" name="nome" required 
                                   class="w-full p-4 bg-gray-900 border border-gray-800 rounded-xl focus:border-[#ADFF2F] focus:ring-1 focus:ring-[#ADFF2F] outline-none transition-all" placeholder="O teu nome">
                        </div>
                        <div>
                            <label class="block text-sm text-[#ADFF2F] mb-2 font-bold uppercase tracking-wider">Idade</label>
                            <input type="number" name="idade" required 
                                   class="w-full p-4 bg-gray-900 border border-gray-800 rounded-xl focus:border-[#ADFF2F] focus:ring-1 focus:ring-[#ADFF2F] outline-none transition-all" placeholder="Ex: 25">
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm text-[#ADFF2F] mb-2 font-bold uppercase tracking-wider">Email</label>
                            <input type="email" name="email" required 
                                   class="w-full p-4 bg-gray-900 border border-gray-800 rounded-xl focus:border-[#ADFF2F] focus:ring-1 focus:ring-[#ADFF2F] outline-none transition-all" placeholder="email@exemplo.com">
                        </div>
                        <div>
                            <label class="block text-sm text-[#ADFF2F] mb-2 font-bold uppercase tracking-wider">Telefone</label>
                            <input type="tel" name="telefone" required 
                                   class="w-full p-4 bg-gray-900 border border-gray-800 rounded-xl focus:border-[#ADFF2F] focus:ring-1 focus:ring-[#ADFF2F] outline-none transition-all" placeholder="912 345 678">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm text-[#ADFF2F] mb-2 font-bold uppercase tracking-wider">Com quem queres treinar?</label>
                        <select name="pt_escolhido" required 
                                class="w-full p-4 bg-gray-900 border border-gray-800 rounded-xl focus:border-[#ADFF2F] focus:ring-1 focus:ring-[#ADFF2F] outline-none text-white transition-all cursor-pointer appearance-none">
                            <option value="" disabled selected>Seleciona o profissional...</option>
                            <option value="Rui">Rui Pedro (Musculação)</option>
                            <option value="Ana">Ana Estevão (Pilates e Yoga)</option>
                            <option value="Teresa">Teresa Wang (Crossfit)</option>
                        </select>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm text-[#ADFF2F] mb-2 font-bold uppercase tracking-wider">Data da Aula</label>
                            <input type="date" name="data_aula" required min="<?php echo date('Y-m-d'); ?>" 
                                   class="w-full p-4 bg-gray-900 border border-gray-800 rounded-xl focus:border-[#ADFF2F] focus:ring-1 focus:ring-[#ADFF2F] outline-none text-white transition-all cursor-pointer">
                        </div>
                        <div>
                            <label class="block text-sm text-[#ADFF2F] mb-2 font-bold uppercase tracking-wider">Hora da Aula</label>
                            <select name="hora_aula" required 
                                    class="w-full p-4 bg-gray-900 border border-gray-800 rounded-xl focus:border-[#ADFF2F] focus:ring-1 focus:ring-[#ADFF2F] outline-none text-white transition-all cursor-pointer appearance-none">
                                <option value="" disabled selected>Escolhe a hora</option>
                                <option value="09:00:00">09:00</option>
                                <option value="10:00:00">10:00</option>
                                <option value="11:00:00">11:00</option>
                                <option value="14:00:00">14:00</option>
                                <option value="15:00:00">15:00</option>
                                <option value="16:00:00">16:00</option>
                                <option value="17:00:00">17:00</option>
                                <option value="18:00:00">18:00</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-[#ADFF2F] text-black font-extrabold py-5 rounded-xl mt-8 hover:bg-white hover:scale-[1.02] transform transition-all shadow-lg text-lg uppercase tracking-wide">
                        CONFIRMAR MARCAÇÃO
                    </button>
                </form>
            </div>

        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

</body>
</html>