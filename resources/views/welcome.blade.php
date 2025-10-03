<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agenda Online</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-gray-50 text-gray-900">

    {{-- HEADER --}}
    <header class="flex justify-between items-center px-8 py-6 bg-white shadow-md fixed top-0 left-0 w-full z-50">
        <h1 class="text-2xl font-extrabold text-purple-600">Agenda Online</h1>
        <nav>
            @if (Route::has('login'))
                <div class="flex space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                           class="inline-flex items-center px-5 py-2 text-sm font-semibold text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-100 transition">
                           Painel
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                           class="inline-flex items-center px-5 py-2 text-sm font-semibold text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-100 transition">
                           Entrar
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="inline-flex items-center px-5 py-2 text-sm font-semibold text-white bg-purple-600 rounded-lg shadow hover:bg-purple-700 transition">
                               Cadastrar-se
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
    </header>

    {{-- HERO SECTION --}}
    <section class="relative bg-gradient-to-r from-purple-700 to-purple-500 text-white min-h-screen flex flex-col items-center justify-center text-center px-6">
        <h2 class="text-4xl md:text-6xl font-extrabold mb-4 leading-tight">
            Agende seus horários <br> de forma simples e rápida
        </h2>
        <p class="text-lg md:text-xl mb-8 max-w-2xl">
            Encontre profissionais de diversas áreas e marque atendimentos online.  
            Receba confirmações e lembretes automáticos no WhatsApp.
        </p>
        <a href="{{ route('register') }}"
           class="bg-white text-purple-600 px-8 py-3 rounded-lg font-semibold shadow-lg hover:bg-gray-100 transition">
           Começar agora
        </a>

        {{-- Wave decorativa --}}
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="w-full" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1"
                      d="M0,192L80,170.7C160,149,320,107,480,112C640,117,800,171,960,165.3C1120,160,1280,96,1360,64L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>

    {{-- FEATURES --}}
    <section class="py-20 px-6 max-w-6xl mx-auto grid md:grid-cols-3 gap-10 text-center">
        <div class="p-8 bg-white shadow-lg rounded-xl hover:shadow-xl transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-purple-600 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2v-7H3v7a2 2 0 002 2z" />
            </svg>
            <h3 class="text-xl font-bold mb-2">Encontre Profissionais</h3>
            <p class="text-gray-600">Pesquise por área de atuação e escolha o profissional ideal para você.</p>
        </div>
        <div class="p-8 bg-white shadow-lg rounded-xl hover:shadow-xl transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-purple-600 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 class="text-xl font-bold mb-2">Agende Online</h3>
            <p class="text-gray-600">Veja horários disponíveis em tempo real e confirme sua reserva em segundos.</p>
        </div>
        <div class="p-8 bg-white shadow-lg rounded-xl hover:shadow-xl transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-purple-600 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5l2 2h5a2 2 0 012 2v12a2 2 0 01-2 2z" />
            </svg>
            <h3 class="text-xl font-bold mb-2">Receba Lembretes</h3>
            <p class="text-gray-600">Confirmações e lembretes automáticos no WhatsApp, sem complicação.</p>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="bg-gray-100 py-6 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} Agenda Online. Todos os direitos reservados.
    </footer>

</body>
</html>
    