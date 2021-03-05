<x-guest-layout>
    <section id="welcome">

    </section>
    <div class="">
        <section id="creatorcore" class="">
            @component('components.demos.cc.profile')
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-15 py-10">
                @component('components.demos.cc.commissionpreset', ['title'=>'I will send a photo of the Alps',
                                                                    'description'=>'I will send you a picture of the Alps to use in your works.',
                                                                    'price'=>'7',
                                                                    'tags'=>['Photography']])
                @endcomponent
                @component('components.demos.cc.commissionpreset', ['title'=>'I will draw a character of your choice',
                                                                    'description'=>'I will draw a character from a cartoon or show.',
                                                                    'price'=>'9',
                                                                    'tags'=>['Digital Art']])
                @endcomponent
                @component('components.demos.cc.commissionpreset', ['title'=>'I will build your portfolio',
                                                                    'description'=>'I will make you a web portfolio for your business needs.',
                                                                    'price'=>'35',
                                                                    'tags'=>['Programming', 'Web Design']])
                @endcomponent
            </div>
            @endcomponent

        </section>
    </div>

</x-guest-layout>
