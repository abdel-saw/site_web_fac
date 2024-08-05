<x-site-layout>
    <x-slot name="main">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="card">
                        <!-- Image du carrousel -->
                        <img class="card-img-top" src="{{ route('announcements.image', $announcement->id) }}" alt="{{ $announcement->title }}">
                        <div class="card-body">
                            <!-- Titre en gras -->
                            <h3 class="card-title">{{ $announcement->title }}</h3>
                            <!-- Date de publication -->
                            <p class="card-text"><strong>Date de publication :</strong> {{ $announcement->updated_at->format('d/m/Y') }}</p>
                            <!-- Description simple -->
                            <p class="card-text">{{ $announcement->description }}</p>
                            <button class="btn btn-primary" onclick="history.back()">Retour</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-site-layout>
