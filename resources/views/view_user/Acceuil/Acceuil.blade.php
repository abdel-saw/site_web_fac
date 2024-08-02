<x-site-layout>
    <x-slot name="main">
        <!-- Section Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($announcements as $key => $announcement)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach($announcements as $key => $announcement)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img class="d-block w-100" src="{{ route('images.show', $announcement->id) }}" alt="{{ $announcement->title }}">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $announcement->title }}</h5>
                            <a href="{{ route('announcements.show', $announcement->id) }}" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Section Mot du Directeur -->
        <div class="director-section container my-5">
            <h2>Mot du doyen</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('images/Photo_Doyen_FST_VF2024.png') }}" class="img-fluid" alt="Directeur">
                </div>
                <div class="col-md-8">
                    <blockquote class="blockquote" style="font-size: 1.1rem; line-height: 1.6;">
                        <p class="mb-0">Nos initiatives en matière de formation et de recherche s’inscrivent dans le cadre plus large du plan de développement de l’Université Hassan Premier et avec les orientations globales du ministère de tutelle déclinées dans le Plan national d’accélération de la transformation de l’écosystème de l’enseignement supérieur, de la recherche scientifique et de l’innovation (PACTE ESRI 2030). Notre but principal est de faire de nos lauréats des personnes compétentes, citoyennes, responsables et ayant toutes les capacités requises à participer au nouveau modèle de développement nationale et à intégrer l’économie du savoir.</p>
                        <footer class="blockquote-footer mt-3">Pr. Abdelmajid FARCHI - Doyen de la Faculté des Sciences et Techniques</footer>
                    </blockquote>
                    <a href="{{ route('mots-doyen') }}" class="btn btn-link" style="color: #0626b5;">Lire la suite</a>

                </div>
            </div>
        </div>

        <!-- Section Événements -->
        <div class="events-section container my-5">
            <h2 class="events-title">Évènements à venir</h2>
            <div class="row">
                @foreach($evenements->take(9) as $event)
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
            <div class="text-center mt-4">
                <a href="{{ route('evenements.index') }}" class="btn btn-primary btn-lg" style="font-size: 1.2rem; padding: 0.75rem 1.5rem; border-radius: 0.5rem;">Voir tous les événements</a>
            </div>
        </div>

        <!-- Section Annonces -->
        <div class="events-section container my-5">
            <h2 class="events-title">Annonces</h2>
            <div class="row">
                @foreach($announcements->take(9) as $announcement)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ route('announcements.image', $announcement->id) }}" alt="{{ $announcement->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $announcement->title }}</h5>
                                <p class="card-text">
                                    <strong>Date de publication :</strong> {{ $announcement->updated_at->format('d/m/Y') }}
                                </p>
                                <a href="{{ route('announcements.show', $announcement->id) }}" class="btn btn-primary custom-btn">Voir plus</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('announcements.index') }}" class="btn btn-primary btn-lg" style="font-size: 1.2rem; padding: 0.75rem 1.5rem; border-radius: 0.5rem;">Voir toutes les annonces</a>
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
