<!DOCTYPE html>
<html lang="pt-pt" class="scroll-smooth font-['Poppins']">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Choupal Ativo - Sábados Ativos</title>
    <link rel="shortcut icon" href="imgs/logo.png">
   <script src="js/tailwind4.1.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">
    
    <style>
        /* Cores Personalizadas */
        .bg-neon { background-color: #ADFF2F; }
        .text-neon { color: #ADFF2F; }
        .hover-text-neon:hover { color: #ADFF2F; }
    </style>
</head>
<body class="bg-gray-100 text-black" id="topo">
    
    <?php include 'includes/navbar.php'; ?>

    <main>
        <div class="relative h-[60vh] overflow-hidden">
            <img src="fts/sabados-hero.jpeg" class="absolute top-0 left-0 w-full h-full object-cover z-0" alt="Sábados Ativos">
            <div class="absolute inset-0 bg-black/50 z-10"></div> 
            <div class="relative h-full flex flex-col items-center justify-center text-center text-white z-20 px-6">
                <h1 class="text-6xl md:text-8xl font-extrabold mb-4">Sábados Ativos</h1>
                <p class="text-xl md:text-2xl font-light">Todas as semanas, energia pura na natureza.</p>
            </div>
        </div>

        <div class="bg-white py-20 px-6 md:px-20">
            <div class="max-w-6xl mx-auto">
                
                <div class="flex flex-col md:flex-row gap-12 items-start">
                    
                    <div class="w-full md:w-1/3">
                        <h2 class="text-4xl font-bold mb-6">Agenda Semanal</h2>
                        <div class="mb-8 space-y-4">
                            <div>
                                <span class="text-gray-500 text-sm uppercase tracking-wide font-bold">Localização</span>
                                <p class="text-xl font-medium">Mata do Choupal, Coimbra</p>
                            </div>
                            <div>
                                <span class="text-gray-500 text-sm uppercase tracking-wide font-bold">Dia</span>
                                <p class="text-xl font-medium">Todos os Sábados</p>
                            </div>
                            <div>
                                <span class="text-gray-500 text-sm uppercase tracking-wide font-bold">Preço</span>
                                <p class="text-xl font-medium text-[#ADFF2F] bg-black inline-block px-2">Gratuito</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-2/3 grid grid-cols-1 gap-4">
                        <div class="flex items-center bg-gray-50 p-6 rounded-xl hover:bg-gray-100 transition-colors">
                            <div class="text-[#ADFF2F] font-extrabold text-3xl mr-6 bg-black p-3 rounded-lg w-24 text-center">10:00</div>
                            <div>
                                <h3 class="text-2xl font-bold">Treino Crossfit</h3>
                                <p class="text-gray-600">Alta intensidade para começar o dia.</p>
                            </div>
                        </div>
                        <div class="flex items-center bg-gray-50 p-6 rounded-xl hover:bg-gray-100 transition-colors">
                            <div class="text-[#ADFF2F] font-extrabold text-3xl mr-6 bg-black p-3 rounded-lg w-24 text-center">12:00</div>
                            <div>
                                <h3 class="text-2xl font-bold">Pilates</h3>
                                <p class="text-gray-600">Fortalecimento e flexibilidade no relvado.</p>
                            </div>
                        </div>
                        <div class="flex items-center bg-gray-50 p-6 rounded-xl hover:bg-gray-100 transition-colors">
                            <div class="text-[#ADFF2F] font-extrabold text-3xl mr-6 bg-black p-3 rounded-lg w-24 text-center">14:30</div>
                            <div>
                                <h3 class="text-2xl font-bold">Cárdio</h3>
                                <p class="text-gray-600">Corrida e exercícios aeróbicos em grupo.</p>
                            </div>
                        </div>
                        <div class="flex items-center bg-gray-50 p-6 rounded-xl hover:bg-gray-100 transition-colors">
                            <div class="text-[#ADFF2F] font-extrabold text-3xl mr-6 bg-black p-3 rounded-lg w-24 text-center">16:30</div>
                            <div>
                                <h3 class="text-2xl font-bold">Aula de Yoga</h3>
                                <p class="text-gray-600">Relaxamento e conexão com a natureza.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="bg-black py-16 px-6 md:px-20 border-y border-gray-900">
            <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12">
                
                <div class="w-full lg:w-1/2 order-2 lg:order-1">
                    <span class="text-[#ADFF2F] font-bold uppercase mb-2 block tracking-widest text-sm">A Nossa Equipa</span>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6 leading-tight">
                        Mentores de <span class="text-[#ADFF2F]">Performance.</span>
                    </h2>
                    <p class="text-gray-400 text-lg mb-8 leading-relaxed">
                        Profissionais qualificados prontos para desenhar a estratégia perfeita para os teus objetivos. Treina com quem sabe, no melhor ginásio natural da cidade.
                    </p>
                    
                    <a href="pt.php" class="inline-block bg-[#ADFF2F] text-black font-bold py-3 px-8 rounded-full hover:bg-white transition-colors">
                        AGENDAR COM UM PT
                    </a>
                </div>

<               <div class="w-full lg:w-1/2 order-1 lg:order-2">
                    <img src="fts/pt-juntos.png" alt="Equipa de PTs Choupal" class="w-full h-[450px] object-cover object-center rounded-2xl shadow-2xl border border-gray-800">
                </div>

            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <a href="#topo" class="fixed bottom-8 right-8 z-50 bg-[#ADFF2F] text-black p-3 rounded-full hover:bg-[#99E62B] transition-colors">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
    </a>
</body>
</html>