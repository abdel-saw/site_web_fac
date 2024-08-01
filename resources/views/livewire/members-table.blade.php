<table class="text-white">
    <thead>
        <tr>
            <th class="px-4 py-2 text-2xl font-bold">ID</th>
            <th class="px-4 py-2 text-2xl font-bold">Nom</th>
            <th class="px-4 py-2 text-2xl font-bold">Prenom</th>
            <th class="px-4 py-2 text-2xl font-bold">Actions</th>
        </tr>
    </thead>
    <tbody>
        @if($members->isEmpty())
            <tr>
                <td colspan="4" class=" text-4xl">There are no members in your table.</td>
            </tr>
        @else
            @foreach($members as $member)
            <tr class="font-bold">
                <td class="px-4 py-2">{{$member->id}}</td>
                <td class="px-4 py-2">{{$member->nom}}</td>
                <td class="px-4 py-2">{{$member->prenom}}</td>
                <td class="px-4 py-3">
                    <button wire:click="viewMore({{$member->id}})">voir plus |</button>
                    <button wire:click="modify({{$member->id}})">modifier |</button>
                    <button wire:click="delete({{$member->id}})">supprimer</button>
                </td>
            </tr>
            @endforeach
        @endif
    </tbody>
</table>
