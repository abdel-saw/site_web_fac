<x-site-layout>
    <x-slot name="main">
        <div class="flex flex-col">
            <!-- Page Heading -->
            <div class="my-4 font-bold text-3xl text-blue-400">
                {{ $header }}
            </div>
            <!-- Page Content -->
            <div class="flex flex-row space-x-4">
                <!-- Navigation Menu -->
                <div class="hidden md:w-1/5 md:block">
                    <span>
                        <h1 class="text-2xl underline font-bold text-orange-500 py-2 pl-6">Navigation</h1>
                    </span>
                    
                        <nav class="flex flex-col">
                            <a href="{{route('a-propos')}}"
                               class="text-sm font-bold text-gray-800 hover:underline hover:text-orange-500 nav-item">
                                A Propos de la FSTS
                            </a>
                            
                            <a href="{{route('mots-doyen')}}"
                               class="text-sm font-bold text-gray-800 hover:underline hover:text-orange-500 nav-item">
                                Mot du Doyen
                            </a>
                            
                            <a href="{{route('fsts-chiffres')}}"
                               class="text-sm font-bold text-gray-800 hover:underline hover:text-orange-500 nav-item">
                                FSTS en chiffres
                            </a>
                            
                            <a href="https://www.fsts.ac.ma/wp-content/uploads/2024/03/Projet_dev_FSTS.pdf " target="_blank"
                               class="text-sm font-bold text-gray-800 hover:underline hover:text-orange-500 nav-item">
                                Projet de développement de <br>la FSTS : 2024-2027
                            </a>
                            
                            <a href="{{route('cons-com-user')}}"
                               class="text-sm font-bold text-gray-800 hover:underline hover:text-orange-500 nav-item">
                                Conseil et Commissions
                            </a>
                            
                            <a href="#"
                               class="text-sm font-bold text-gray-800 hover:underline hover:text-orange-500 nav-item">
                                Accords et Conventions
                            </a>
                            
                            <a href="#"
                               class="text-sm font-bold text-gray-800 hover:underline hover:text-orange-500 nav-item">
                                Départements 
                            </a>
                        </nav>
                    
                </div>
                <!-- Page Content -->
                <div class="md:w-3/4">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </x-slot>
</x-site-layout>
