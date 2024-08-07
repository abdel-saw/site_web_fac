<div class="flex flex-col space-y-6">
    <!-- Display all commissions or counsels -->
    <div class="grid grid-cols-3 gap-4">
        @if ($com_cons->isEmpty())
            <h1 class="text-white font-bold text-2xl text-center underline">No Commission or Conseil found</h1>
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
            <div class="flex flex-col">
                <span class="font-bold text-white">Name: {{ $selectedComCon->name }}</span>
                <span class="font-bold text-white">Description: {{ $selectedComCon->description }}</span>
            </div>
            <div class="flex flex-row space-x-3">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</button>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
                <button wire:click="redirectToAddMember" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add Member</button>
            </div>
        </div>

        <!-- Display members of the selected commission or counsel -->
        <table class="text-white mt-4">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-2xl font-bold">ID</th>
                    <th class="px-4 py-2 text-2xl font-bold">Nom</th>
                    <th class="px-4 py-2 text-2xl font-bold">Prenom</th>
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
                            <td class="px-4 py-2">{{ $member->id }}</td>
                            <td class="px-4 py-2">{{ $member->nom }}</td>
                            <td class="px-4 py-2">{{ $member->prenom }}</td>
                            <td class="px-4 py-2 text-center">
                                <a href="{{route('view-more',['id'=> $member->id ,'view_type'=>'admin'])}}"> voir plus | </a>
                                <a href="{{route('view-more',['id'=> $member->id ,'view_type'=>'admin'])}}"> supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    @endif
</div>

