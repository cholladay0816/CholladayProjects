<x-guest-layout>
    <div class="max-w-7xl mx-auto text-lg text-gray-500 dark:text-gray-200">
        <div class="mx-auto text-center pt-5 pb-20 flex flex-col">
            <a class="font-bold text-black dark:text-white text-4xl">{{$project->title}}</a>
            <a class="text-indigo-600 dark:text-indigo-300 text-xl">{{$project->subtitle}}</a>

        </div>
        @component('components.projects.'.$project->name)
        @endcomponent
    </div>
</x-guest-layout>
