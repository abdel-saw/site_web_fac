<x-site-layout>
    <x-slot name="main">
        <div class="events-section container my-5">
            <h2 class="events-title">Toutes les annonces</h2>
            <div class="row">
                @foreach($announcements as $announcement)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ route('announcements.image', $announcement->id) }}" alt="{{ $announcement->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $announcement->title }}</h5>
                                <p class="card-text">
                                    <strong>Date de publication :</strong> {{ $announcement->updated_at->format('d/m/Y') }}
                                </p>
                                <a href="{{ route('announcements.show', $announcement->id) }}" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $announcements->links('pagination::bootstrap-4') }}
            </div>
        </div>
        <style>
            .card {
                height: 100%;
            }
            .card-img-top {
                height: 200px;
                object-fit: cover;
            }
            .card-body {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
            .custom-btn {
                margin-top: auto;
            }
        </style>
    </x-slot>
</x-site-layout>
