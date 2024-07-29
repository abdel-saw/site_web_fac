<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FSTS</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Inclure Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .carousel-item img {
            width: 100%;
            height: 500px; /* Ajustez la hauteur selon vos besoins */
            object-fit: cover; /* Cette propriété CSS permet de couvrir l'ensemble du conteneur tout en maintenant les proportions */
        }
        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); /* Centre la légende au milieu de l'image */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px; /* Ajouter un peu de padding pour que le texte ne touche pas les bords */
            width: 100%; /* Assure que la légende occupe toute la largeur */
            box-sizing: border-box; /* Inclut le padding dans la largeur totale */
        }
        .carousel-caption h5 {
            font-size: 2rem;
            color: white;
            margin-bottom: 20px;
            background: rgba(0, 0, 0, 0.5); /* Ajouter un fond semi-transparent uniquement au titre */
            padding: 10px; /* Ajouter du padding pour que le texte ne touche pas les bords du fond */
            border-radius: 5px; /* Arrondir les coins du fond semi-transparent */
        }
        .carousel-caption a {
            margin-top: 10px;
            display: inline-block;
            background-color: #0626b5; /* Couleur bleu foncé */
            border-color: #0626b5; /* Couleur bleu foncé */
            color: white;
            padding: 10px 20px; /* Ajouter du padding pour un bouton plus spacieux */
            text-decoration: none; /* Retirer le soulignement du lien */
            border-radius: 5px; /* Arrondir les coins du bouton */
        }
        .carousel-caption a:hover {
            background-color: #041a7a; /* Couleur bleu foncé plus sombre pour le hover */
            border-color: #041a7a; /* Couleur bleu foncé plus sombre pour le hover */
        }
        .carousel-control-prev,
        .carousel-control-next {
            bottom: 20px; /* Ajuster pour que les contrôles ne se chevauchent pas avec la légende */
        }

        .card-img-top {
        width: 100%;
        height: auto; /* Ajuste la hauteur automatiquement en fonction de la largeur */
        max-height: 300px; /* Ajuste cette valeur selon la taille souhaitée pour la photo d'annonce */
        object-fit: contain; /* Assure que l'image entière est visible sans être rognée */
        }
        .card-title {
        font-weight: bold; /* Rendre le titre en gras */
        font-size: 1.5rem; /* Agrandir la taille du titre */
        text-align: center; /* Centre le titre */
        }
        .card-text {
        font-weight: normal; /* Assure que la description est écrite simplement */
        font-size: 1.2rem; /* Agrandir la taille de la description */
        }
        .btn-primary {
        background-color: #0626b5; /* Changer la couleur de fond du bouton */
        border-color: #0626b5; /* Changer la couleur de la bordure du bouton */
        }
        .btn-primary:hover {
        background-color: #0626b5; /* Changer la couleur de fond du bouton au survol */
        border-color: #0626b5; /* Changer la couleur de la bordure du bouton au survol */
        }
    </style>


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col space-y-2">
    <header id= "header_nav" class = "flex flex-col py-2 px-4 flex-nowrap bg-orange-300 fixed top-0 left-0 w-full z-50 transition-transform duration-300 ease-in-out">
        <!-- About school>-->
        <div class = " md:flex md:items-center md:justify-between space-x-4">
            <div class="flex">
                <div class="flex items-center space-x-4">
                    <a href="https://www.facebook.com"><i class="fa fa-facebook text-zinc-600 text-2xl"></i></a>
                    <a href="https://www.twitter.com"><i class="fa fa-twitter text-zinc-600 text-2xl"></i></a>
                    <a href="https://www.linkedin.com"><i class="fa fa-linkedin text-zinc-600 text-2xl"></i></a>
                    <a href="https://www.youtube.com"><i class="fa fa-youtube text-zinc-600 text-2xl"></i></a>
                    <a href="https://www.instagram.com"><i class="fa fa-instagram text-zinc-600 text-2xl"></i></a>
                </div>
            </div>

            <div class = "basis-1/2 text-zinc-600"> Tél : 0523.40.07.36 | Fax : 0523.40.09.69 | Email :
                contact_fsts@uhp.ac.ma
            </div>
            <div class="flex flex-grow md:justify-end">
                <form action="#" method="GET" class="flex items-center">
                    <input type="text" name="query" placeholder="Faites une recherche ici"
                        class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    <button type="submit"
                        class="ml-2 text-sm px-1 py-1 bg-blue-900 text-white rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Rechercher</button>
                </form>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="md:flex md:items-center md:justify-between py-3 ">
            <div>
                <span>
                    <img src="images\uh1_logo.png" alt="uh1-logo " class="h-10 inline ">
                </span>
                <span>
                    <img src="images\fsts_logo.png" alt="uh1-logo " class="h-10 inline ">
                </span>
            </div>

            <div class="md:hidden">
                <button id="nav-toggle" class="text-zinc-600 focus:outline-none">
                    <i class="fa fa-bars text-2xl"></i>
                </button>
            </div>

            <ul id="nav-menu" class ="md:flex md:items-center space-x-2">
                <li class="relative group">
                    <a href="{{route('acceuil')}}" class=" hover:text-indigo-900 text-zinc-600 hover:font-bold">Accueil</a>
                </li>

                <li class=" relative group">
                    <a href="{{route('a-propos')}}" class=" hover:text-indigo-900 hover:font-bold text-zinc-600">A propos de la FSTS</a>
                    <ul class="hidden group-hover:block w-60 absolute bg-blue-900 text-white rounded-md p-2 space y-1">
                        <li><a href="{{route('mots-doyen')}}" class=" hover:text-orange-300 hover:font-bold underline text-sm">Mot du Doyen</a></li>
                        <li><a href="#" class=" hover:text-orange-300 hover:font-bold underline text-sm">FSTS en chiffres</a></li>
                        <li><a href="#" class=" hover:text-orange-300 hover:font-bold underline text-sm">Projet de développement de la FSTS : 2024-2027 </a></li>
                        <li><a href="#" class=" hover:text-orange-300 hover:font-bold underline text-sm">Conseils et Commissions</a></li>
                        <li><a href="#" class=" hover:text-orange-300 hover:font-bold underline text-sm">Accords et Convention</a></li>
                        <li><a href="#" class=" hover:text-orange-300 hover:font-bold underline text-sm">Départements</a></li>

                    </ul>
                </li>

                <li class=" relative group">
                    <a href="#" class=" hover:text-indigo-900 hover:font-bold text-zinc-600">Formation Initiale</a>
                    <ul class="hidden group-hover:block w-60 absolute bg-blue-900 text-white rounded-md p-2 space y-1">
                        <li><a href="#" class=" hover:text-orange-300 hover:font-bold underline text-sm">Diplome d'Etudes Universitaires en Sciences et Techniques</a></li>
                        <li><a href="#" class=" hover:text-orange-300 hover:font-bold underline text-sm">Licence en Sciences et Techniques </a></li>
                        <li><a href="#" class=" hover:text-orange-300 hover:font-bold underline text-sm">Master en Sciences et Techniques </a></li>
                        <li><a href="#" class=" hover:text-orange-300 hover:font-bold underline text-sm">Diplôme d'Ingénieur </a></li>

                    </ul>
                </li>

                <li class=" relative group">
                    <a href="#" class=" hover:text-indigo-900 hover:font-bold text-zinc-600">Formation Continue</a>
                </li>

                <li class=" relative group">
                    <a href="#" class=" hover:text-indigo-900 hover:font-bold text-zinc-600">Recherches Scientifiques </a>
                    <ul class="hidden group-hover:block w-60 absolute bg-blue-900 text-white rounded-md p-2 space y-1">
                        <li><a href="#" class=" hover:text-orange-300 hover:font-bold underline text-sm">Centre d'Etudes Doctorales </a></li>
                        <li><a href="#" class=" hover:text-orange-300 hover:font-bold underline text-sm">Laboratoires</a></li>
                        <li><a href="#" class=" hover:text-orange-300 hover:font-bold underline text-sm">Liste des publications</a></li>
                        <li><a href="#" class=" hover:text-orange-300 hover:font-bold underline text-sm">Centre Régionale d'Analyses et de Caractérisation</a></li>

                    </ul>
                </li>
                <li class=" relative group">
                    <a href="#" class=" hover:text-indigo-900 hover:font-bold text-zinc-600">Espace Etudiants</a>
                    <ul class="hidden group-hover:block  w-60 absolute bg-blue-900 text-white rounded-md p-2 space y-1">
                        <li><a href="#" class=" hover:text-orange-300 hover:font-bold underline text-sm">Ressources Documentaires</a></li>
                        <li><a href="#" class=" hover:text-orange-300 hover:font-bold underline text-sm">Ressources Numériques</a></li>
                        <li><a href="#" class=" hover:text-orange-300 hover:font-bold underline text-sm">Activités Estudiantines </a></li>
                        <li><a href="#" class=" hover:text-orange-300 hover:font-bold underline text-sm">Pré-Inscription</a></li>

                    </ul>
                </li>
                <li>
                    <form action="#" method="GET" class="flex items-center">
                        <input type="text" name="query" placeholder="Rechercher Enseignant"
                            class="border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <button type="submit"
                            class="ml-2 py-1 px-1 bg-blue-900 text-white rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 text-sm">Rechercher</button>
                    </form>
                </li>
            </ul>

        </nav>


        <script>
            //hide and schow navbar on scroll
            let lastScrollTop = 0;
            const header_navbar = document.getElementById('header_nav');

            window.addEventListener('scroll', function() {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                if (scrollTop > lastScrollTop) {
                    // Scroll down
                    header_navbar.style.transform = 'translateY(-100%)';
                } else {
                    // Scroll up
                    header_navbar.style.transform = 'translateY(0)';
                }
                lastScrollTop = scrollTop;
            });

            //toggle navbar menu
            const navToggle = document.getElementById('nav-toggle');
            const navMenu = document.getElementById('nav-menu');
            navToggle.addEventListener('click',() => {navMenu.classList.toggle('hidden');});
        </script>

    </header>



    <main class=" pt-56 md:pt-32 px-4">
        {{ $main }}
    </main>

    <hr class="border-t-2 border-gray-300 my-2">


    <footer class =" flex bg-blue-900 flex-col px-4 py-4 ">
        <!--About School-->
        <div class="flex flex-row md:justify-between">
            <!-- Logo et reseau sociaux-->
            <div class="flex flex-col">
                <div class="flex items-center space-x-4">
                    <a href="https://www.facebook.com"><i class="fa fa-facebook text-white text-2xl"></i></a>
                    <a href="https://www.twitter.com"><i class="fa fa-twitter text-white text-2xl"></i></a>
                    <a href="https://www.linkedin.com"><i class="fa fa-linkedin text-white text-2xl"></i></a>
                    <a href="https://www.youtube.com"><i class="fa fa-youtube text-white text-2xl"></i></a>
                    <a href="https://www.instagram.com"><i class="fa fa-instagram text-white text-2xl"></i></a>
                </div>
                <div class="flex flex-col">
                    <img src="images\fsts_logo-footer.png" alt="uh1-logo ">
                </div>
            </div>
            <!--Contact-->
            <div class="flex flex-col text-white space-y-1">
                <span class="font-bold">
                    CONTACT
                </span>
                <p>Faculté des Sciences et Techniques de Settat</p>
                <p>BP 577, Settat, Maroc</p>
                <p>Tél : 0523.40.07.36 | Fax : 0523.40.09.69</p>
                <p> Email: <a href="mailto:contact_fsts@uhp.ac.ma" class="hover:text-orange-500">contact_fsts@uhp.ac.ma</a></p>
            </div>
            <!--Liens utiles-->
            <div class="flex flex-col text-white space-y-1  pr-14">
                <a href="#" class="hover:text-orange-500"> Accueil</a>
                <a href="#" class="hover:text-orange-500"> Publications Scientifiques</a>
                <a href="#" class="hover:text-orange-500"> Etudes Doctorales</a>
            </div>


        </div>
        <!--CopyRight-->
        <div>
            <p class="text-center font-bold text-white">© 2024 FSTS. Tous droits réservés.</p>
        </div>

    </footer>

    <!-- Inclure jQuery et Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>
