<x-a-propos-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold text-blue-500">A Propos de la FSTS</h1>
    </x-slot>
    <div class = "flex flex-col px-4">
        <!-- Description de la FSTS -->
        <div class="flex flex-col space-y-4">
            <span class="font-bold text-blue-500 text-3xl text-center">
                Approche Pédagogique
            </span>
            <p class="font-medium font-serif">
                L’approche pedagogique du point de vue de l’organisation pédagogique, la FST de Settat propose une variété de plus de 30
                filières à travers différents niveaux de formation. En ce qui concerne la recherche scientifique, notre
                institution accorde une importance particulière au Centre des Études Doctorales (CED), qui constitue le
                cœur de nos activités de recherche et contribue à la renommée de notre établissement dans le domaine
                scientifique. Ce centre rassemble 27 équipes de recherche réparties dans neuf laboratoires agréés par
                les instances scientifiques compétentes.
            </p>
            <p class="font-medium font-serif">
                A l’instar des autres établissements du réseau, la FST de Settat a adopté le système L.M.D (Licence,
                Master, Doctorat) et ce, depuis 2003. Conformément à cette vision pédagogique novatrice, les cursus
                préconisés font fructifier des atouts considérables à savoir :
            </p>
            <p>
                <ul style="list-style: circle" class="font-medium font-serif pl-4">
                    <li > L’implication pédagogique et scientifique de nos équipes d’enseignants-chercheurs.</li>
                    <li> Notre implantation locale et régionale (bassin d’emploi exceptionnellement dynamique).</li>
                    <li> Des conditions d’études et un environnement pédagogique de qualité favorisant l’épanouissement scientifique de nos étudiants.</li>
                    <li> Une action très soutenue en direction de la formation continue.</li>
                    <li> Notre ouverture sur le monde socioéconomique.</li>
                    <li> la mise en place de nombreux accords de coopération et de collaboration.</li>
                </ul>
            </p>

        </div>
        <!-- image de la FSTS -->
        <div>
            <img src="{{ asset('images\pexels-luis-gomes-166706-546819.jpg') }}" alt="FSTS" class="w-full h-96 object-cover">

        </div>

    </div>
</x-a-propos-layout>
