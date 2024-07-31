<x-gestion-com-cons-layout>
    <div class="flex flex-col space-y-4">
        <div class="flex flex-row space-x-12">
            <h1 class="text-3xl font-bold text-white">Liste des membres</h1>
            <form method="GET" action="{{ route('add-com-cons-member') }}">
                @csrf
                <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">
                    {{ __('ajouter un membre') }}
                </button>
            </form>
        </div>
        <!--Table des membres-->
        <div>

        </div>

    </div>
</x-gestion-com-cons-layout>
