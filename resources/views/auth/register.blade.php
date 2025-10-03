<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criar Conta - Agenda Online</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-gray-50">

    <div class="min-h-screen grid grid-cols-1 md:grid-cols-2">

        {{-- Lado esquerdo: imagem/gradiente --}}
        <div class="hidden md:flex flex-col justify-center items-center bg-gradient-to-r from-purple-700 to-purple-500 text-white p-12">
            <h2 class="text-4xl font-extrabold mb-6">Bem-vindo à Agenda Online</h2>
            <p class="text-lg max-w-md text-center">
                Organize sua rotina, encontre profissionais e marque horários sem complicação.
            </p>
            <img src="https://cdn-icons-png.flaticon.com/512/2921/2921222.png"
                 alt="Agendamento"
                 class="w-64 mt-8">
        </div>

        {{-- Lado direito: formulário --}}
        <div class="flex flex-col justify-center items-center p-8">
            <div class="w-full max-w-md bg-white shadow-xl rounded-2xl p-8">

                <h2 class="text-3xl font-bold text-purple-700 text-center mb-2">Criar Conta</h2>
                <p class="text-center text-gray-600 mb-6">Cadastre-se gratuitamente e comece a agendar online.</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    {{-- Nome --}}
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nome completo</label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus
                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500">
                        @error('name')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- E-mail --}}
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required
                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500">
                        @error('email')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- WhatsApp --}}
                    <div class="mb-4">
                        <label for="phone_whatsapp" class="block text-sm font-medium text-gray-700">WhatsApp</label>
                        <input id="phone_whatsapp" name="phone_whatsapp" type="text" placeholder="(99) 99999-9999"
                               value="{{ old('phone_whatsapp') }}"
                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500">
                        @error('phone_whatsapp')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Role --}}
                    <div class="mb-4">
                        <label for="role" class="block text-sm font-medium text-gray-700">Sou um:</label>
                        <select id="role" name="role"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500">
                            <option value="cliente" {{ old('role') == 'cliente' ? 'selected' : '' }}>Cliente</option>
                            <option value="profissional" {{ old('role') == 'profissional' ? 'selected' : '' }}>Profissional</option>
                        </select>
                        @error('role')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Senha --}}
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                        <input id="password" name="password" type="password" required
                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500">
                        @error('password')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Confirmar Senha --}}
                    <div class="mb-6">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar senha</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required
                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500">
                        @error('password_confirmation')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Botão --}}
                    <button type="submit"
                            class="w-full bg-purple-600 text-white py-3 px-6 rounded-lg font-semibold shadow hover:bg-purple-700 transition">
                        Criar conta
                    </button>
                </form>

                {{-- Link para login --}}
                <p class="text-center text-sm text-gray-600 mt-6">
                    Já tem uma conta?
                    <a href="{{ route('login') }}" class="text-purple-600 font-semibold hover:underline">
                        Entrar
                    </a>
                </p>
            </div>
        </div>
    </div>

</body>
</html>
