<!DOCTYPE html>
<html lang="pt-pt" class="scroll-smooth font-['Poppins']">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Choupal Ativo - Início</title>
    <link rel="shortcut icon" href="imgs/logo.png">
    <script src="js/tailwind4.1.js"></script>
    <script>
    tailwind.config = {
        darkMode: 'class', 
        theme: {
            extend: {
                colors: {
                    neon: '#ADFF2F',
                }
            }
        }
    }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">
    
    <style>
        /* ANIMAÇÃO SIMPLES DAS PALAVRAS */
        .palavras-wrapper { display: inline-block; overflow: hidden; height: 1.5em; vertical-align: bottom; margin-bottom: -0.35em; }
        .palavras-lista { display: block; animation: slide-words 10s infinite; }
        .palavra { display: block; height: 100%; line-height: 1.4; padding-bottom: 10px; padding-left: 5px; }
        
        @keyframes slide-words {
            0%, 15% { transform: translateY(0%); }
            25%, 40% { transform: translateY(-20%); }
            50%, 60% { transform: translateY(-40%); }
            70%, 90% { transform: translateY(-60%); }
            100% { transform: translateY(0%); }
        }

        /* CARROSSEL AUTOMÁTICO */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(calc(-250px * 3 - 3rem)); }
        }
        
        .slider-track { display: flex; gap: 1rem; width: calc(250px * 6 + 6rem); animation: scroll 20s linear infinite; }

        /* Cores Personalizadas */
        .bg-neon { background-color: #ADFF2F; }
        .border-neon { border-color: #ADFF2F; }
        .text-neon { color: #ADFF2F; }
    </style>
</head>
<body class="bg-white text-black" id="topo">
    
    <?php include 'includes/navbar.php'; ?>

    <div class="relative min-h-[80vh] bg-white flex flex-col justify-center px-6 md:px-20 lg:px-32 py-20">
        <div class="flex flex-col lg:flex-row lg:items-end flex-wrap">
            <span class="text-6xl md:text-8xl lg:text-9xl font-extrabold text-black leading-tight tracking-tight">
                Nós somos
            </span>
            <div class="text-6xl md:text-8xl lg:text-9xl font-extrabold text-[#ADFF2F] leading-tight tracking-tight lg:ml-4">
                <div class="palavras-wrapper">
                    <div class="palavras-lista">
                        <span class="palavra">ativos.</span>
                        <span class="palavra">saudáveis.</span>
                        <span class="palavra">unidos.</span>
                        <span class="palavra">natureza.</span>
                        <span class="palavra">ativos.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative w-full overflow-hidden my-12">
        <div class="absolute inset-0 bg-black transform -skew-y-3 origin-top-left scale-110 z-0"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 py-24 md:py-32 text-white">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <span class="block text-5xl md:text-6xl font-extrabold text-[#ADFF2F] mb-2">500+</span>
                    <span class="block text-lg md:text-xl font-bold uppercase">Árvores Plantadas</span>
                </div>
                <div>
                    <span class="block text-5xl md:text-6xl font-extrabold text-[#ADFF2F] mb-2">500</span>
                    <span class="block text-lg md:text-xl font-bold uppercase">Visitantes Diários</span>
                </div>
                <div>
                    <span class="block text-5xl md:text-6xl font-extrabold text-[#ADFF2F] mb-2">8.9km</span>
                    <span class="block text-lg md:text-xl font-bold uppercase">Trilhos e Caminhos</span>
                </div>
                <div>
                    <span class="block text-5xl md:text-6xl font-extrabold text-[#ADFF2F] mb-2">50+</span>
                    <span class="block text-lg md:text-xl font-bold uppercase">Eventos por Ano</span>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-20 px-6 md:px-20">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
            
            <div class="relative w-full lg:w-2/3 group order-2 lg:order-1">
                <img src="fts/mapa-vector.png" class="w-full h-auto block" alt="Mapa do Choupal">

                <div class="absolute" style="top: 16%; left: 66%; transform: translate(-50%, -50%);">
                    <div class="relative flex items-center justify-center w-12 h-12 group/pin">
                        <button class="relative inline-flex rounded-full h-10 w-10 bg-black border-2 border-neon items-center justify-center z-10">
                            <svg class="w-5 h-5 text-neon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7-7 7"/></svg>
                        </button>
                        <div class="absolute bottom-full mb-3 hidden group-hover/pin:block whitespace-nowrap z-20">
                            <span class="bg-black text-neon text-sm font-bold px-3 py-1 rounded-md">Entrada Principal</span>
                        </div>
                    </div>
                </div>

                <div class="absolute" style="top: 45%; left: 46%; transform: translate(-50%, -50%);">
                    <div class="relative flex items-center justify-center w-12 h-12 group/pin">
                        <button class="relative inline-flex rounded-full h-10 w-10 bg-black border-2 border-neon items-center justify-center z-10">
                            <svg class="w-5 h-5 text-neon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </button>
                        <div class="absolute bottom-full mb-3 hidden group-hover/pin:block whitespace-nowrap z-20">
                            <span class="bg-black text-neon text-sm font-bold px-3 py-1 rounded-md">Campo de Basket</span>
                        </div>
                    </div>
                </div>

                <div class="absolute" style="top: 40%; left: 59%; transform: translate(-50%, -50%);">
                    <div class="relative flex items-center justify-center w-12 h-12 group/pin">
                        <button class="relative inline-flex rounded-full h-10 w-10 bg-black border-2 border-neon items-center justify-center z-10">
                             <svg class="w-5 h-5 text-neon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h16v16H4z"/></svg>
                        </button>
                        <div class="absolute bottom-full mb-3 hidden group-hover/pin:block whitespace-nowrap z-20">
                            <span class="bg-black text-neon text-sm font-bold px-3 py-1 rounded-md">Campos de Ténis & Padel</span>
                        </div>
                    </div>
                </div>

                <div class="absolute" style="top: 66%; left: 56%; transform: translate(-50%, -50%);">
                    <div class="relative flex items-center justify-center w-12 h-12 group/pin">
                        <button class="relative inline-flex rounded-full h-10 w-10 bg-black border-2 border-neon items-center justify-center z-10">
                             <svg class="w-5 h-5 text-neon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4l-8 16h16z"/></svg>
                        </button>
                        <div class="absolute bottom-full mb-3 hidden group-hover/pin:block whitespace-nowrap z-20">
                            <span class="bg-black text-neon text-sm font-bold px-3 py-1 rounded-md">Bar & Zona de Merendas</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/3 text-left order-1 lg:order-2">
                <h2 class="text-5xl md:text-7xl font-extrabold text-black leading-none mb-6">Explora o <span class="text-neon">Parque.</span></h2>
                <p class="text-lg text-gray-600">Passa o rato (ou toca) nos pontos para descobrir os nossos locais principais.</p>
            </div>

        </div>
    </div>

    <div class="relative py-20 md:h-[60vh] flex items-center justify-center bg-[#ADFF2F]">
        <div class="text-center text-black px-6">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">Treina ao ar livre,</h1>
            <h2 class="text-4xl md:text-6xl font-extrabold leading-tight">vive em movimento.</h2>
            <p class="mt-6 text-base md:text-lg max-w-xl mx-auto font-medium leading-relaxed">
                Descobre as nossas aulas de Yoga, Pilates e Treino Funcional. 
                Junta-te a uma comunidade ativa em harmonia com a natureza.
            </p>
            <a href="sabados_ativos.php" class="mt-8 inline-block bg-black text-white font-bold py-3 px-8 rounded-lg text-lg hover:bg-gray-800 transition-colors">
                MARCA JÁ
            </a>
        </div>
    </div>

    <div class="bg-white py-16 md:py-20 px-6 md:px-20">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12">
            <div class="w-full lg:w-1/2 text-left">
                <h2 class="text-6xl md:text-8xl lg:text-9xl font-extrabold text-black leading-none mb-2">Basket</h2>
                <h3 class="text-6xl md:text-8xl lg:text-9xl font-extrabold text-[#ADFF2F] leading-none mb-8">ball.</h3>
                <a href="reservas_basket.php" class="inline-block border-2 border-black text-black font-bold py-3 px-8 rounded-full text-lg hover:bg-black hover:text-white transition-colors">VER DISPONIBILIDADE</a>
            </div>
            <div class="w-full lg:w-1/2 relative">
                <div class="relative h-[40vh] md:h-[50vh] w-full overflow-hidden rounded-lg">
                    <img src="fts/index-basket.webp" class="absolute inset-0 w-full h-full object-cover" alt="Basket">
                </div>
                <div class="mt-6 flex justify-between items-end border-t-2 border-black pt-4">
                    <div class="flex flex-col items-start gap-1">
                        <span class="bg-[#ADFF2F] text-black font-extrabold text-xl md:text-2xl px-3 py-1">Campo Principal</span>
                        <p class="text-gray-500 font-bold text-xs md:text-sm uppercase tracking-wider">Aberto todos os dias</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 py-16 md:py-20 px-6 md:px-20">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row-reverse items-center gap-12">
            <div class="w-full lg:w-1/2 text-left lg:text-right">
                <h2 class="text-6xl md:text-8xl lg:text-9xl font-extrabold text-black leading-none mb-2">Ténis</h2>
                <h3 class="text-6xl md:text-8xl lg:text-9xl font-extrabold text-[#ADFF2F] leading-none mb-8">+ Padel.</h3>
                <a href="reservas_tenis.php" class="inline-block border-2 border-black text-black font-bold py-3 px-8 rounded-full text-lg hover:bg-black hover:text-white transition-colors">VER DISPONIBILIDADE</a>
            </div>
            <div class="w-full lg:w-1/2 relative">
                <div class="relative h-[40vh] md:h-[50vh] w-full overflow-hidden rounded-lg">
                    <img src="fts/index-tenis.jpeg" class="absolute inset-0 w-full h-full object-cover" alt="Ténis">
                </div>
                <div class="mt-6 flex justify-between items-end border-t-2 border-black pt-4">
                    <div class="flex flex-col items-start gap-1">
                        <span class="bg-[#ADFF2F] text-black font-extrabold text-xl md:text-2xl px-3 py-1">Escola de Ténis</span>
                        <p class="text-gray-500 font-bold text-xs md:text-sm uppercase tracking-wider">Aulas e aluguer de campos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-16 md:py-24 px-6 md:px-20 overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-12">
            <div class="w-full lg:w-1/3 z-10 bg-white">
                <h2 class="text-6xl md:text-8xl font-extrabold text-black leading-none">Cuidar</h2>
                <h3 class="text-4xl md:text-6xl font-extrabold text-[#ADFF2F] leading-none mb-6">de todos.</h3>
                <p class="text-lg text-gray-600 mb-8 border-l-4 border-black pl-4">
                    Junta-te a nós para manter o Choupal verde e vivo.
                </p>
                <a href="proximos_eventos.php" class="inline-block bg-black text-white font-bold py-3 px-8 rounded-full text-lg hover:bg-gray-800 transition-colors">
                    INSCREVE-TE
                </a>
            </div>
            <div class="w-full lg:w-2/3 slider-container overflow-hidden relative">
                <div class="absolute left-0 top-0 bottom-0 w-8 md:w-12 bg-gradient-to-r from-white to-transparent z-10"></div>
                <div class="absolute right-0 top-0 bottom-0 w-8 md:w-12 bg-gradient-to-l from-white to-transparent z-10"></div>
                <div class="slider-track py-4">
                    <div class="w-[220px] md:w-[250px] flex-shrink-0 bg-gray-50 rounded-xl overflow-hidden">
                        <img src="fts/proximo-evento-hero.png" class="w-full h-40 object-cover" alt="Plantação">
                        <div class="p-4"><h4 class="font-bold text-xl mb-1">Plantação</h4><p class="text-sm text-gray-500">Mais árvores, mais vida.</p></div>
                    </div>
                    <div class="w-[220px] md:w-[250px] flex-shrink-0 bg-gray-50 rounded-xl overflow-hidden">
                        <img src="fts/index-social.avif" class="w-full h-40 object-cover" alt="Limpeza">
                        <div class="p-4"><h4 class="font-bold text-xl mb-1">Limpeza</h4><p class="text-sm text-gray-500">Parque limpo.</p></div>
                    </div>
                    <div class="w-[220px] md:w-[250px] flex-shrink-0 bg-gray-50 rounded-xl overflow-hidden">
                        <img src="fts/index-treina.jpg" class="w-full h-40 object-cover" alt="Caminhada">
                        <div class="p-4"><h4 class="font-bold text-xl mb-1">Caminhada</h4><p class="text-sm text-gray-500">Convívio solidário.</p></div>
                    </div>
                    <div class="w-[220px] md:w-[250px] flex-shrink-0 bg-gray-50 rounded-xl overflow-hidden">
                        <img src="fts/proximo-evento-hero.png" class="w-full h-40 object-cover" alt="Plantação">
                        <div class="p-4"><h4 class="font-bold text-xl mb-1">Plantação</h4><p class="text-sm text-gray-500">Mais árvores, mais vida.</p></div>
                    </div>
                    <div class="w-[220px] md:w-[250px] flex-shrink-0 bg-gray-50 rounded-xl overflow-hidden">
                        <img src="fts/index-social.avif" class="w-full h-40 object-cover" alt="Limpeza">
                        <div class="p-4"><h4 class="font-bold text-xl mb-1">Limpeza</h4><p class="text-sm text-gray-500">Parque limpo.</p></div>
                    </div>
                    <div class="w-[220px] md:w-[250px] flex-shrink-0 bg-gray-50 rounded-xl overflow-hidden">
                        <img src="fts/index-treina.jpg" class="w-full h-40 object-cover" alt="Caminhada">
                        <div class="p-4"><h4 class="font-bold text-xl mb-1">Caminhada</h4><p class="text-sm text-gray-500">Convívio solidário.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <a href="#topo" class="fixed bottom-8 right-8 z-50 bg-[#ADFF2F] text-black p-3 rounded-full hover:bg-[#99E62B] transition-colors">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
    </a>

</body>
</html>