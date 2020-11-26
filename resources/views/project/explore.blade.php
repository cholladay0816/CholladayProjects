<x-guest-layout>
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 py-15">

            @foreach($projects as $project)
                @component('components.project-card', ['project'=>$project])
                @endcomponent
            @endforeach

        </div>
    </div>
</x-guest-layout>
