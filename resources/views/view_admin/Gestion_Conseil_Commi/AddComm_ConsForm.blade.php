<x-gestion-com-cons-layout>
    <div class="flex flex-col space-y-5">
        <h1 class="text-white font-bold text-2xl text-center underline">Create New Commission or Conseil </h1>

        @if (session('success1'))
            <div class="alert alert-success text-white">
                {{ session('success1') }}
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
        <form action="{{ route('store-com-cons') }}" method="POST" class="flex flex-col text-white">
            @csrf
            <div class="mb-4">
                <label for="name" class="block font-bold mb-2">Nom</label>
                <input type="text"
                    class="shadow appearance-none border rounded w-3/4 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block font-bold mb-2">Description</label>
                <textarea id="description" name="description"
                    class="shadow appearance-none border rounded w-3/4 h-20 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    rows="4" required>{{ old('description') }}</textarea>
            </div>

            <div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-1/5">Submit</button>
            </div>

        </form>

    </div>
</x-gestion-com-cons-layout>
