<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <a href="{{url('/project/'.$project->name)}}">
        <img class="w-full" src="{{$project->banner}}" alt="{{$project->title}} banner">
    </a>
        <div class="px-6 py-4">
            <a href="{{url('/project/'.$project->name)}}">
                <div class="font-bold text-xl mb-2">{{$project->title}}</div>
            </a>
            <p class="text-gray-700 text-base">
                {{$project->subtitle}}
            </p>
    </div>
</div>
