<x-site-layout>
    <x-slot name="main">
        <div class="events-section container my-5">
            <h2 class="events-title">Tous les événements</h2>
            <div class="row">
                @foreach($evenements as $event)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $event->titre }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $event->lieu }}</h6>
                                <p class="card-text">
                                    <strong>Date :</strong> {{ \Carbon\Carbon::parse($event->date)->locale('fr')->translatedFormat('d F Y') }}<br>
                                    <strong>Heure :</strong> {{ \Carbon\Carbon::parse($event->heur)->format('H:i') }}
                                </p>
                                <button class="btn btn-info custom-btn" type="button" onclick="toggleDescription('event-{{ $event->id }}', this)">
                                    Voir plus
                                </button>
                                <div id="event-{{ $event->id }}" class="event-description mt-2" style="display: none;">
                                    <p class="card-text">{{ $event->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $evenements->links('pagination::bootstrap-4') }}
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
