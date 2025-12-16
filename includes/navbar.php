<?php
// DETETOR DE CAMINHOS
// Verifica se a pasta "imgs" existe onde estamos. Se não existir, adiciona "../" para voltar atrás.
$prefixo = file_exists('imgs/logo.png') ? '' : '../';
?>

<nav class="bg-black text-white p-4 sticky top-0 z-40 shadow-md">
    <div class="w-full px-4 md:px-8 mx-auto flex justify-between items-center">
        <a href="<?php echo $prefixo; ?>index.php" class="flex items-center space-x-3">
            <img class="h-8 md:h-10 w-auto" src="<?php echo $prefixo; ?>imgs/logo.png" alt="Logo">
            <span class="text-xl md:text-2xl font-bold">Choupal Ativo</span>
        </a>

        <div class="flex items-center">
            <button id="btn-open" class="text-white focus:outline-none hover:text-[#ADFF2F] flex items-center gap-2 cursor-pointer z-50">
                <span class="text-lg font-bold uppercase hidden md:block">Menu</span>
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>
</nav>

<div id="fullscreen-menu" class="fixed inset-0 bg-black text-white z-[9999] transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col justify-center">
    
    <div class="absolute top-6 right-8">
        <button id="btn-close" class="text-white hover:text-[#ADFF2F] focus:outline-none flex items-center gap-3 cursor-pointer">
            <span class="text-lg font-bold uppercase hidden md:block">Fechar</span>
            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center hover:bg-[#ADFF2F] transition-colors">
                <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </div>
        </button>
    </div>



    <div class="flex flex-col space-y-6 items-start pl-10 md:pl-32">
        <a href="<?php echo $prefixo; ?>index.php" class="menu-link block w-full">
            <span class="text-5xl md:text-7xl lg:text-8xl font-extrabold hover:text-[#ADFF2F] transition-colors">Início</span>
        </a>
        <a href="<?php echo $prefixo; ?>proximos_eventos.php" class="menu-link block w-full">
            <span class="text-5xl md:text-7xl lg:text-8xl font-extrabold hover:text-[#ADFF2F] transition-colors">Eventos</span>
        </a>
        <a href="<?php echo $prefixo; ?>sabados_ativos.php" class="menu-link block w-full">
            <span class="text-5xl md:text-7xl lg:text-8xl font-extrabold hover:text-[#ADFF2F] transition-colors">Sábados</span>
        </a>
        <a href="<?php echo $prefixo; ?>index.php#contactos" class="menu-link block w-full">
            <span class="text-5xl md:text-7xl lg:text-8xl font-extrabold hover:text-[#ADFF2F] transition-colors">Contactos</span>
        </a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btnOpen = document.getElementById('btn-open');
        const btnClose = document.getElementById('btn-close');
        const menu = document.getElementById('fullscreen-menu');
        const links = document.querySelectorAll('.menu-link');

        function openMenu() {
            menu.classList.remove('translate-x-full');
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            menu.classList.add('translate-x-full');
            document.body.style.overflow = '';
        }

        if (btnOpen) btnOpen.addEventListener('click', openMenu);
        if (btnClose) btnClose.addEventListener('click', closeMenu);

        links.forEach(link => {
            link.addEventListener('click', closeMenu);
        });
    });
</script>