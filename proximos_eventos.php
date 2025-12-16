<!DOCTYPE html>
<html lang="pt-pt" class="scroll-smooth font-['Poppins']">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Choupal Ativo - Próximos Eventos</title>
    <link rel="shortcut icon" href="imgs/logo.png">
   <script src="js/tailwind4.1.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">
    
    <style>
        .bg-neon { background-color: #ADFF2F; }
        .text-neon { color: #ADFF2F; }
    </style>
</head>
<body class="bg-gray-100 text-black" id="topo">
    
    <?php include 'includes/navbar.php'; ?>

    <main>
        
        <div class="relative h-[50vh] overflow-hidden bg-black">
            <img src="fts/proximo-evento-hero.png" class="absolute top-0 left-0 w-full h-full object-cover z-0 opacity-60" alt="Eventos">
            <div class="relative h-full flex flex-col items-center justify-center text-center text-white z-20 px-6">
                <h1 class="text-5xl md:text-7xl font-extrabold mb-4">Agenda de Eventos</h1>
                <p class="text-xl md:text-2xl font-light text-gray-300">O que vai acontecer no nosso parque.</p>
            </div>
        </div>

        <div class="max-w-7xl mx-auto py-20 px-6 md:px-20">
            <h2 class="text-4xl font-bold mb-12 border-l-8 border-[#ADFF2F] pl-6">Este Mês</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow group flex flex-col">
                    <div class="h-48 overflow-hidden">
                        <img src="fts/proximo-evento-hero.png" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Plantação">
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div>
                            <span class="text-xs font-bold bg-black text-[#ADFF2F] px-3 py-1 rounded-full uppercase">Comunidade</span>
                            <h3 class="mt-4 text-2xl font-bold mb-2">Grande Plantação</h3>
                            <p class="text-gray-600 mb-6">Vamos plantar 200 novas árvores na zona norte da mata. Traz luvas!</p>
                        </div>
                        
                        <div class="mt-auto flex items-center justify-between">
                            <div class="text-sm font-bold text-gray-500 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                15 Out • 09:00
                            </div>
                            <a href="inscricao.php" class="bg-black text-white text-sm font-bold py-2 px-6 rounded-full hover:bg-[#ADFF2F] hover:text-black transition-colors shadow-md">
                                INSCREVER
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow group flex flex-col">
                    <div class="h-48 overflow-hidden">
                        <img src="fts/index-treina.jpg" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Caminhada">
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div>
                            <span class="text-xs font-bold bg-[#ADFF2F] text-black px-3 py-1 rounded-full uppercase">Desporto</span>
                            <h3 class="mt-4 text-2xl font-bold mb-2">Caminhada Noturna</h3>
                            <p class="text-gray-600 mb-6">Explora os sons da natureza à noite. Lanterna obrigatória.</p>
                        </div>

                        <div class="mt-auto flex items-center justify-between">
                            <div class="text-sm font-bold text-gray-500 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                22 Out • 20:30
                            </div>
                            <a href="inscricao.php" class="bg-black text-white text-sm font-bold py-2 px-6 rounded-full hover:bg-[#ADFF2F] hover:text-black transition-colors shadow-md">
                                INSCREVER
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow group flex flex-col">
                    <div class="h-48 overflow-hidden">
                        <img src="fts/index-social.avif" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Limpeza">
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div>
                            <span class="text-xs font-bold bg-black text-[#ADFF2F] px-3 py-1 rounded-full uppercase">Ambiente</span>
                            <h3 class="mt-4 text-2xl font-bold mb-2">Limpeza do Parque</h3>
                            <p class="text-gray-600 mb-6">Ação de recolha de lixo pelo parque.</p>
                        </div>

                        <div class="mt-auto flex items-center justify-between">
                            <div class="text-sm font-bold text-gray-500 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                29 Out • 10:00
                            </div>
                            <a href="inscricao.php" class="bg-black text-white text-sm font-bold py-2 px-6 rounded-full hover:bg-[#ADFF2F] hover:text-black transition-colors shadow-md">
                                INSCREVER
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="bg-black text-white py-20 px-6 md:px-20">
            <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12">
                
                <div class="w-full lg:w-1/2">
                    <span class="text-[#ADFF2F] font-bold uppercase mb-2 block tracking-widest">Voluntariado</span>
                    <h2 class="text-5xl md:text-6xl font-extrabold mb-6">
                        Faz a <span class="text-[#ADFF2F]">Diferença.</span>
                    </h2>
                    <p class="text-gray-400 text-lg mb-8">
                        Não precisas de ser um atleta. Precisamos de fotógrafos, gestores de trilhos e apoio logístico. Junta-te à família Choupal.
                    </p>
                    
                    <a href="#contactos" class="inline-block bg-[#ADFF2F] text-black font-bold py-3 px-8 rounded-full text-lg hover:bg-white transition-colors">
                        QUERO AJUDAR
                    </a>
                </div>

                <div class="w-full lg:w-1/2 grid grid-cols-1 md:grid-cols-2 gap-4">
                    
                    <div class="bg-gray-900 p-8 rounded-xl border border-gray-800 hover:border-[#ADFF2F] transition-colors">
                        <h3 class="text-xl font-bold mb-2 text-white">Kit Exclusivo</h3>
                        <p class="text-sm text-gray-500">Recebe a t-shirt oficial e brindes.</p>
                    </div>

                    <div class="bg-gray-900 p-8 rounded-xl border border-gray-800 hover:border-[#ADFF2F] transition-colors md:mt-8">
                        <h3 class="text-xl font-bold mb-2 text-white">Networking</h3>
                        <p class="text-sm text-gray-500">Conhece pessoas incríveis da comunidade.</p>
                    </div>

                    <div class="bg-gray-900 p-8 rounded-xl border border-gray-800 hover:border-[#ADFF2F] transition-colors">
                        <h3 class="text-xl font-bold mb-2 text-white">Certificado</h3>
                        <p class="text-sm text-gray-500">Documento oficial de participação.</p>
                    </div>

                    <div class="bg-[#ADFF2F] p-8 rounded-xl flex flex-col justify-center items-center text-center md:mt-8">
                        <h3 class="text-4xl font-extrabold text-black mb-1">30+</h3>
                        <p class="text-sm font-bold text-black uppercase">Voluntários</p>
                    </div>

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