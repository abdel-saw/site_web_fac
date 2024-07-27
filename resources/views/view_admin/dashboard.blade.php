<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-semibold text-lg mb-4">{{ __('Actions') }}</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <form method="GET" action="{{ route('register') }}" class="group">
                                @csrf
                                <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                                    {{ __('Ajouter Admin ') }}
                                </button>
                                <span class=" hidden group-hover:block">
                                    <p class=" font-serif text-center "> ce boutton permet d'ajouter un admin</p>
                                </span>
                            </form>
                            <form method="GET" action="{{ route('register') }}" class="group">
                                @csrf
                                <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                                    {{ __('Gestion commissions et Conseils') }}
                                </button>
                                <span class=" hidden group-hover:block">
                                    <p class=" font-serif text-center "> ce boutton permet de gérer les aspects relatifs au commissions et aux conseils</p>
                                </span>
                            </form>
                            <form method="GET" action="{{ route('register') }}" class="group">
                                @csrf
                                <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                                    {{ __('Ajouter Admin ') }}
                                </button>
                                <span class=" hidden group-hover:block">
                                    <p class=" font-serif text-center "> ce boutton permet d'ajouter un admin</p>
                                </span>
                            </form>
                            <form method="GET" action="{{ route('register') }}" class="group">
                                @csrf
                                <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                                    {{ __('Ajouter Admin ') }}
                                </button>
                                <span class=" hidden group-hover:block">
                                    <p class=" font-serif text-center "> ce boutton permet d'ajouter un admin</p>
                                </span>
                            </form>
                            <form method="GET" action="{{ route('register') }}" class="group">
                                @csrf
                                <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                                    {{ __('Ajouter Admin ') }}
                                </button>
                                <span class=" hidden group-hover:block">
                                    <p class=" font-serif text-center "> ce boutton permet d'ajouter un admin</p>
                                </span>
                            </form>
                            <form method="GET" action="{{ route('register') }}" class="group">
                                @csrf
                                <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                                    {{ __('Ajouter Admin ') }}
                                </button>
                                <span class=" hidden group-hover:block">
                                    <p class=" font-serif text-center "> ce boutton permet d'ajouter un admin</p>
                                </span>
                            </form>
                            <form method="GET" action="{{ route('register') }}" class="group">
                                @csrf
                                <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                                    {{ __('Ajouter Admin ') }}
                                </button>
                                <span class=" hidden group-hover:block">
                                    <p class=" font-serif text-center "> ce boutton permet d'ajouter un admin</p>
                                </span>
                            </form>
                            <form method="GET" action="{{ route('register') }}" class="group">
                                @csrf
                                <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                                    {{ __('Ajouter Admin ') }}
                                </button>
                                <span class=" hidden group-hover:block">
                                    <p class=" font-serif text-center "> ce boutton permet d'ajouter un admin</p>
                                </span>
                            </form>
                            <form method="GET" action="{{ route('register') }}" class="group">
                                @csrf
                                <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                                    {{ __('Ajouter Admin ') }}
                                </button>
                                <span class=" hidden group-hover:block">
                                    <p class=" font-serif text-center "> ce boutton permet d'ajouter un admin</p>
                                </span>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>