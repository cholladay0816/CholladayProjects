<div class="motion-safe:transition-none motion-reduce:transform-none transition duration-200 ease-in-out
            transform hover:-translate-y-1 hover:scale-110
         max-w-screen rounded overflow-hidden shadow-lg bg-white grid grid-cols-3 py-3">
    <a href="#american-dad-speedruns" class="font-bold text-xl mb-2 text-center col-span-3">
        {{$title}}
    </a>
    <a href="#american-dad-speedruns">
        <img class="h-48" src="{{$url}}" alt="Speedrun Icon">
    </a>
    <a href="#american-dad-speedruns" class="px-5 py-4 mx-auto col-span-2">
        <span class="text-gray-700 text-base">
            {{$slot}}
        </span>
    </a>
</div>
