<x-app-layout>
    <div class="flex flex-col space-y-5">
        <h1 class="text-white font-bold text-2xl text-center underline">Add new Member</h1>

        @if (session('success'))
            <div class="alert alert-success text-white">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger text-white">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('store-com-cons-member') }}" method="POST" class="flex flex-col text-center">
            @csrf
            <div class="mb-4">
                <label for="nom" class="block text-gray-700 font-bold mb-2">Nom</label>
                <input type="text"
                    class="shadow appearance-none border rounded w-1/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="nom" name="nom" value="{{ old('nom') }}" required>
            </div>
            <div class="mb-4">
                <label for="prenom" class="block text-gray-700 font-bold mb-2">Prénom</label>
                <input type="text"
                    class="shadow appearance-none border rounded w-1/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="prenom" name="prenom" value="{{ old('prenom') }}" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email"
                    class="shadow appearance-none border rounded w-1/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="mb-4">
                <label for="fonction" class="block text-gray-700 font-bold mb-2">Fonction</label>
                <input type="text"
                    class="shadow appearance-none border rounded w-1/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="fonction" name="fonction" value="{{ old('fonction') }}">
            </div>
            <div class="mb-4">
                <label for="numero_telephone" class="block text-gray-700 font-bold mb-2">Numéro de téléphone</label>
                <input type="text"
                    class="shadow appearance-none border rounded w-1/3 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="numero_telephone" name="numero_telephone" value="{{ old('numero_telephone') }}">
            </div>
            <div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-1/6">Submit</button>
            </div>

        </form>

    </div>
</x-app-layout>
