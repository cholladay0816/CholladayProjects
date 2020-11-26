<a href="{{$link}}" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
    {{ $slot }}
    <div class="space-y-1">
        <p class="text-base leading-6 font-medium text-gray-900">
            {{$title}}
        </p>
        <p class="text-sm leading-5 text-gray-500">
            {{$description}}
        </p>
    </div>
</a>
