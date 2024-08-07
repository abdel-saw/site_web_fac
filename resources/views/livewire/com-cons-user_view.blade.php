<div class="flex flex-col space-y-6">
    <!-- Display all commissions or counsels -->
    <div class="grid grid-cols-3 gap-4">
        @if ($com_cons->isEmpty())
            <h1 class="text-black font-bold text-2xl text-center underline">No Commission or Conseil found</h1>
        @else
            @foreach ($com_cons as $com_con)
                <button wire:click="selectComCon({{ $com_con->id }})" class="w-full px-4 py-2 bg-orange-400 text-black rounded-md hover:bg-blue-700">
                    {{ $com_con->name }}
                </button>
            @endforeach
        @endif
    </div>

    <!-- Display selected commission or counsel details -->
    @if ($selectedComCon)
        <div class="flex flex-row justify-between space-x-4">
            <div class="flex flex-col text-black">
                <span class="font-bold ">Name: {{ $selectedComCon->name }}</span>
                <span class="font-bold ">Description: {{ $selectedComCon->description }}</span>
            </div>
        </div>

        <!-- Display members of the selected commission or counsel -->
        <table class="text-black mt-4">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-2xl font-bold">Nom</th>
                    <th class="px-4 py-2 text-2xl font-bold">Prenom</th>
                    <th class="px-4 py-2 text-2xl font-bold">Fonction</th>
                    <th class="px-4 py-2 text-2xl font-bold">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($com_cons_members->isEmpty())
                    <tr>
                        <td colspan="4" class="text-4xl">There are no members.</td>
                    </tr>
                @else
                    @foreach ($com_cons_members as $member)
                        <tr class="font-bold">
                            <td class="px-4 py-2">{{ $member->nom }}</td>
                            <td class="px-4 py-2">{{ $member->prenom }}</td>
                            <td class="px-4 py-2">{{ $member->fonction }}</td>
                            <td class="px-4 py-2">
                                <a href="{{route('view-more',['id'=> $member->id ,'view_type'=>'user'])}}"> voir plus  </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    @endif
</div>

