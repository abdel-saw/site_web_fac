<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Gestion Conseil et Commissions') }}
        </h2>
    </x-slot>

    <div  class=" flex flex-row space-x-16 py-10 px-10" >
        <!--sidebar-->
        <div class="basis-1/4 grid grid-cols-1 space-y-3">
            <form method="GET" action="{{ route('register') }}" class="group">
                @csrf
                <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                    {{ __('Liste des membres') }}
                </button>
                <span class=" hidden group-hover:block">
                    <p class=" font-serif text-center text-white"> ce boutton permet de voir tous les membres associés à une commission ou a un conseil</p>
                </span>
            </form>
            <form method="GET" action="{{ route('register') }}" class="group">
                @csrf
                <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                    {{ __('Créer nouvelle commission ou conseil ') }}
                </button>
                <span class=" hidden group-hover:block">
                    <p class=" font-serif text-center text-white"> ce boutton permet de créer une nouvelle commission ou conseil</p>
                </span>
            </form>
            

        </div>
        <!--main content-->
        <div>
            {{ $slot }}
        </div>
        
    </div>
</x-app-layout>