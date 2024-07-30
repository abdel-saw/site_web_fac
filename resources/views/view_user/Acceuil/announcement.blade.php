<x-site-layout>
    <x-slot name="main">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- Image du carrousel -->
                        <img class="card-img-top" src="{{ asset($announcement->image_path) }}" alt="{{ $announcement->title }}" style="max-height: 300px; object-fit: cover;">
                        <div class="card-body">
                            <!-- Titre en gras -->
                            <h3 class="card-title fw-bold">{{ $announcement->title }}</h3>
                            <!-- Description simple -->
                            <p class="card-text">{{ $announcement->description }}</p>
                            <a href="{{ route('acceuil') }}" class="btn btn-primary">Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-site-layout>
