<x-guest-layout>
    <section id="welcome">
    <div class="max-w-7xl min-h-screen mx-auto pb-20 md:py-20 text-black">
        <div class="rounded-t bg-dark p-5 md:mt-5">
            <h1 class="text-4xl font-bold text-center text-white">Welcome to Cholladay Projects!</h1>
            <h2 class="text-xl font-semibold text-gray-400 text-center">The web portfolio for Christian Holladay</h2>
        </div>
        <div class="rounded-b bg-white p-5 mb-5">
            <div class="text-lg text-black text-left">
                <p class="mb-5">
                    My name is Christian Holladay and I am a self-taught programmer from Missouri. I am interested in anything related to technology, including circuitry, robotics, programming, gaming, and AI/Automation.
                    I spend much of my free time teaching myself how to write code and making fun projects with my friends. I love bringing creations to life and programming gives me the tools to do just that.
                </p>
                <p class="mb-5">
                    I am proficient with C#, PHP, HTML, CSS and Python; very knowledgable with Javascript, C++ and C; and have previously used Lua to some extent.
                    I have made at least a dozen games in Unity, a score of applications in .NET, a handful of Python apps, and a few websites.
                </p>
                <p class="mb-5">
                    I have recently worked with a client -- Marketeer LLC -- to help with their backend web development. I am currently working on several independent web projects of my own.
                </p>


            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="">
        <div class="max-w-sm text-white mx-auto">
            <img class="w-full object-contain rounded-t" src="{{asset('/img/profile_picture.png')}}">
            <div class="flex flex-col px-5 bg-gradient-to-b from-blue-500 to-teal-400 rounded-b pt-2">
                <h4 class="text-2xl font-bold">Cholladay</h4>
                <h3 class="text-lg text-gray-200 pb-4">is building this website</h3>
                <p class="pb-4">If you only had one shot: would you take it and let it all go, or would you drop it and shoot?</p>
                <div class="pb-4 mx-auto text-center ">
                    <span class="inline-block rounded bg-green-400 px-2 break-all text-white">Programmer</span>
                    <span class="inline-block rounded bg-blue-500 px-2 break-all my-2 text-white">Web Developer</span>
                    <span class="inline-block rounded bg-blue-500 px-2 break-all text-white">Game Designer</span>
                    <span class="inline-block rounded bg-blue-500 px-2 break-all text-white">Video Editor</span>
                    <span class="inline-block rounded bg-blue-500 px-2 break-all text-white">Coder</span>
                </div>
            </div>
        </div>
            </div>
            <div class="bg-white object-end rounded-b">
                <div class="rounded-t bg-dark p-5">
                    <h2 class="text-4xl font-bold text-center text-white">Contact Information</h2>
                    <h3 class="text-xl font-semibold text-gray-400 text-center">For business inquiries, please contact me through the following
                    channels for hiring or work-related messages.</h3>
                </div>
                <div class="flex flex-col p-5">
                    <label for="email" class="block text-sm font-medium text-lg text-gray-700">Email (Preferred)</label>
                    <input id="email" readonly  class="focus:ring-indigo-500 focus:border-indigo-500 p-5
                    border-transparent bg-indigo-200 text-xl text-gray-700 rounded-md mb-5"
                           value="cholladay0816@gmail.com">
                    <label for="email" class="block text-sm font-medium text-lg text-gray-700">GitHub</label>
                    <input id="email" readonly  class="focus:ring-indigo-500 focus:border-indigo-500 p-5
                    border-transparent bg-gray-200 text-xl text-gray-700 rounded-md mb-5"
                           value="https://github.com/cholladay0816">
                    <label for="email" class="block text-sm font-medium text-lg text-gray-700">LinkedIn</label>
                    <input id="email" readonly  class="focus:ring-indigo-500 focus:border-indigo-500 p-5
                    border-transparent bg-gray-200 text-xl text-gray-700 rounded-md"
                           value="https://linkedin.com/in/christian-holladay/">
                </div>
            </div>
        </div>
        <inc>

        </inc>
        </div>
        <h2 class="mx-auto text-center font-bold text-5xl py-10">Interactive Demos</h2>
    </div>
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
        <section id="american-dad-speedruns" class="">
        <div class="bg-dark py-10 min-h-screen my-auto text-white">
            <h3 class="mx-auto text-center font-bold text-4xl text-white">American Dad Speedruns</h3>
            @component('components.demos.adsr.categories')
                @component('components.demos.adsr.category', ['title'=>'Any%', 'url'=>asset('img/american_dad_speedrun_logo.png')])
                    Simple: beat the game from start to finish by any means available.
                @endcomponent
                @component('components.demos.adsr.category', ['title'=>'Joe%', 'url'=>asset('img/american_joe_speedrun_logo.png')])
                    Same rules as Any%, but you must use the joe character.
                @endcomponent
                @component('components.demos.adsr.category', ['title'=>'New%', 'url'=>asset('img/american_dad_speedrun_logo.png')])
                    New game content is allowed for this category.
                @endcomponent
                @component('components.demos.adsr.category', ['title'=>'Joeswap%', 'url'=>asset('img/american_dad_speedrun_logo.png')])
                    I don't remember what this one is.
                @endcomponent
                @component('components.demos.adsr.category', ['title'=>'MacFarlane%', 'url'=>asset('img/american_dad_speedrun_logo.png')])
                    The entire MacFarlane anthology back to back.
                @endcomponent
                @component('components.demos.adsr.category', ['title'=>'TAS', 'url'=>asset('img/american_dad_speedrun_logo.png')])
                    Tool-Assisted Speedruns.
                @endcomponent
            @endcomponent

            <div class="mx-auto border-white border-t border-dotted">
                <div class="max-w-7xl max-h-xl mx-auto grid grid-cols-1 md:grid-cols-2">
                    <div class="h-100">
                        <img class="max-w-24" src="{{asset('img/stan_says.png')}}"/>
                    </div>
                    <div class=" my-auto flex flex-col">
                        <div class="font-bold text-4xl">Stan Says:</div>
                        <div class="font-semibold text-gray-300">You should join the <span class="font-bold">Holladay Hangout</span> Discord server!</div>
                        <div class="border-l-2 border-yellow-300 text-white bg-opacity-10 hover:bg-opacity-25 bg-yellow-500 px-3">All the cool kids are already <a class="text-indigo-500 font-semibold">@here</a>.</div>
                        <a href="{{env('DISCORD_INVITE')}}" class="bg-indigo-500 border-white text-white text-xl rounded px-2 py-2 mr-auto mt-5 ">Click here to Join!</a>
                        <div class="text-gray-300 mt-8">Note: This is a public server and the messages posted by others do not reflect my personal views.
                            While I do my best to remove inappropriate messages and offensive users, some messages may take longer to screen or may slip past our moderation.</div>
                    </div>
                </div>
            </div>

        </div>
        </section>
    </div>

</x-guest-layout>
