<div>
    <h1 class="text-2xl font-bold">Select a Member to Add</h1>
    <div class="grid grid-cols-3 gap-4 mt-4">
        @foreach($members as $member)
            <div class="p-4 bg-white rounded shadow">
                <span class="font-bold">{{ $member->nom }} {{ $member->prenom }}</span>
                <button wire:click="addMember({{ $member->id }})" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-2">
                    Add
                </button>
            </div>
        @endforeach
    </div>
</div>
