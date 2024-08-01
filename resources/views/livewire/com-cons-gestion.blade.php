<div class=" flex flex-col">
    <!-- fetch all commissions_conseils table-->
    <div class="grid grid-cols-3 space-x-1">
        @if ($com_cons->isEmpty())
            {
            <h1 class="text-white font-bold text-2xl text-center underline">No Commission or Conseil found</h1>
            }
        @else
            @foreach ($com_cons as $com_con)
                <form method="GET" action="#" class="font-bold font-sans">
                    @csrf
                    <button type="submit" class=" w-full px-4 py-2 bg-orange-400 text-black rounded-md hover:bg-blue-700">
                        {{ $com_con->name }}
                    </button>
                </form>
            @endforeach
        @endif

    </div>
</div>
