<x-site-layout>
    <x-slot name="main">
        <div class="flex flex-col">
            <!-- Page Heading -->
            <div class="my-4">
                {{ $header }}
            </div>
            <!-- Page Content -->
            <div class="flex flex-row space-x-4">
                <!-- Navigation Menu -->
                <div class="hidden md:w-1/5 md:block">
                    <span>
                        <h1 class="text-2xl underline font-bold text-orange-500 py-2 pl-6">Navigation</h1>
                    </span>
                    <div x-data="{ active: 'section1' }" x-init="$watch('active', value => console.log(value))">
                        <nav class="flex flex-col">
                            <a href="{{route('a-propos')}}"
                               class="text-sm font-bold text-gray-800 hover:underline hover:text-orange-500 nav-item"
                               @click="active = 'section1'"
                               :class="{ 'underline text-2xl bg-gray-200': active === 'section1', 'text-base': active !== 'section1' }">
                                A Propos de la FSTS
                            </a>
                            
                            <a href="{{route('mots-doyen')}}"
                               class="text-sm font-bold text-gray-800 hover:underline hover:text-orange-500 nav-item"
                               @click="active = 'section2'"
                               :class="{ 'underline text-2xl bg-gray-200': active === 'section2', 'text-base': active !== 'section2' }">
                                Mot du Doyen
                            </a>
                            
                            <a href="{{route('fsts-chiffres')}}"
                               class="text-sm font-bold text-gray-800 hover:underline hover:text-orange-500 nav-item"
                               @click="active = 'section3'"
                               :class="{ 'underline text-2xl bg-gray-200': active === 'section3', 'text-base': active !== 'section3' }">
                                FSTS en chiffres
                            </a>
                            
                            <a href="https://www.fsts.ac.ma/wp-content/uploads/2024/03/Projet_dev_FSTS.pdf " target="_blank"
                               class="text-sm font-bold text-gray-800 hover:underline hover:text-orange-500 nav-item"
                               @click="active = 'section4'"
                               :class="{ 'underline text-2xl bg-gray-200': active === 'section4', 'text-base': active !== 'section4' }">
                                Projet de développement de <br>la FSTS : 2024-2027
                            </a>
                            
                            <a href="#"
                               class="text-sm font-bold text-gray-800 hover:underline hover:text-orange-500 nav-item"
                               @click="active = 'section5'"
                               :class="{ 'underline text-2xl bg-gray-200': active === 'section5', 'text-base': active !== 'section5' }">
                                Conseil et Commissions
                            </a>
                            
                            <a href="#"
                               class="text-sm font-bold text-gray-800 hover:underline hover:text-orange-500 nav-item"
                               @click="active = 'section6'"
                               :class="{ 'underline text-2xl bg-gray-200': active === 'section6', 'text-base': active !== 'section6' }">
                                Accords et Conventions
                            </a>
                            
                            <a href="#"
                               class="text-sm font-bold text-gray-800 hover:underline hover:text-orange-500 nav-item"
                               @click="active = 'section7'"
                               :class="{ 'underline text-2xl bg-gray-200': active === 'section7', 'text-base': active !== 'section7' }">
                                Départements 
                            </a>
                        </nav>
                    </div>
                </div>
                <!-- Page Content -->
                <div class="md:w-3/4">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </x-slot>
</x-site-layout>
