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
                    I am proficient with C#, PHP, HTML, CSS, and Python; very knowledgable with Javascript, C++, and C; and have previously used Lua to some extent.
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
            <img class="w-full object-contain rounded-t-xl" src="{{asset('/img/profile_picture.png')}}">
            <div class="flex flex-col px-5 bg-gradient-to-br from-gray-900 to-gray-700 rounded-b-xl pt-2">
                <h4 class="text-2xl font-bold">Cholladay</h4>
                <h3 class="text-lg text-gray-200 pb-4">is building web services</h3>
                <p class="pb-4">If you only had one shot: would you take it and let it all go, or would you drop it and shoot?</p>
                <div class="pb-4 mx-auto text-center ">
                    <span class="inline-block rounded bg-rose-600 px-2 break-all text-white">Programmer</span>
                    <span class="inline-block rounded bg-green-500 px-2 break-all my-2 text-white">Web Developer</span>
                    <span class="inline-block rounded bg-purple-600 px-2 break-all text-white">Game Designer</span>
                    <span class="inline-block rounded bg-amber-500 px-2 break-all text-white">Video Editor</span>
                    <span class="inline-block rounded bg-blue-500 px-2 break-all text-white">Coder</span>
                </div>
            </div>
        </div>
            </div>
            <div class="object-end rounded-b">
                <div class="rounded-t p-5">
                    <h2 class="text-4xl font-bold text-center text-black">Get in Touch!</h2>
                    <h3 class="pt-4 text-xl font-semibold text-gray-600 text-center">For business inquiries, please contact me through the following
                    channels for hiring or work-related messages.</h3>
                </div>
                <div class="flex flex-col p-5 text-xl text-gray-800 font-bold grid xl:grid-cols-2 gap-5">
                    <a href="mailto:cholladay0816@gmail.com" class="transform translate duration-300 hover:text-rose-600 hover:border-rose-600 border-transparent border-b-2 mx-auto">
                        <label for="email" class="sr-only">Email (Preferred)</label>
                        <span id="email" class="flex flex-row">
                            <span class="">
                                <svg class="w-6 h-6 mr-2 my-auto" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>

                            <span>
                                cholladay0816@gmail.com
                            </span>
                        </span>
                    </a>

                    <a href="https://github.com/cholladay0816" class="duration-300 hover:text-purple-600 hover:border-purple-600 border-transparent border-b-2 mx-auto">
                        <label for="github" class="sr-only">GitHub</label>
                        <span id="github" class="flex flex-row">
                            <span class="">
                                <svg class="w-6 h-6 mr-2 my-auto" fill="currentColor" class="text-white mr-3 text-opacity-50"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.463 2 11.97c0 4.404 2.865 8.14 6.839 9.458.5.092.682-.216.682-.48 0-.236-.008-.864-.013-1.695-2.782.602-3.369-1.337-3.369-1.337-.454-1.151-1.11-1.458-1.11-1.458-.908-.618.069-.606.069-.606 1.003.07 1.531 1.027 1.531 1.027.892 1.524 2.341 1.084 2.91.828.092-.643.35-1.083.636-1.332-2.22-.251-4.555-1.107-4.555-4.927 0-1.088.39-1.979 1.029-2.675-.103-.252-.446-1.266.098-2.638 0 0 .84-.268 2.75 1.022A9.606 9.606 0 0112 6.82c.85.004 1.705.114 2.504.336 1.909-1.29 2.747-1.022 2.747-1.022.546 1.372.202 2.386.1 2.638.64.696 1.028 1.587 1.028 2.675 0 3.83-2.339 4.673-4.566 4.92.359.307.678.915.678 1.846 0 1.332-.012 2.407-.012 2.734 0 .267.18.577.688.48C19.137 20.107 22 16.373 22 11.969 22 6.463 17.522 2 12 2z"></path></svg>
                            </span>
                            <span>
                                cholladay0816
                            </span>
                        </span>
                    </a>


                    <a href="https://linkedin.com/in/christian-holladay" class="duration-300 hover:text-amber-600 hover:border-amber-600 border-transparent border-b-2 mx-auto">
                        <label for="linkedin" class="sr-only">Linkedin</label>
                        <span id="linkedin" class="flex flex-row">
                            <span class="">
                                <svg class="w-6 h-6 mr-2 my-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34">
                                <g>
                        <!---->          <path d="M34,2.5v29A2.5,2.5,0,0,1,31.5,34H2.5A2.5,2.5,0,0,1,0,31.5V2.5A2.5,2.5,0,0,1,2.5,0h29A2.5,2.5,0,0,1,34,2.5ZM10,13H5V29h5Zm.45-5.5A2.88,2.88,0,0,0,7.59,4.6H7.5a2.9,2.9,0,0,0,0,5.8h0a2.88,2.88,0,0,0,2.95-2.81ZM29,19.28c0-4.81-3.06-6.68-6.1-6.68a5.7,5.7,0,0,0-5.06,2.58H17.7V13H13V29h5V20.49a3.32,3.32,0,0,1,3-3.58h.19c1.59,0,2.77,1,2.77,3.52V29h5Z" fill="currentColor"></path>
                                </g>
                              </svg>
                            </span>

                            <span>
                                christian-holladay
                            </span>
                        </span>
                    </a>

                    <a href="https://twitter.com/cholladay0816" class="duration-300 hover:text-blue-500 hover:border-blue-500 border-transparent border-b-2 mx-auto">
                        <label for="twitter" class="sr-only">Twitter</label>
                        <span id="twitter" class="flex flex-row">
                            <span class="">
                                <svg class="w-6 h-6 mr-2 my-auto" fill="currentColor" viewBox="0 0 24 24" class="">
                                    <g><path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path></g>
                                </svg>

                            </span>
                            <span>
                                @cholladay0816
                            </span>
                        </span>
                    </a>

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

                    </div>
                </div>
                <div class="text-sm text-gray-400 max-w-7xl mx-auto text-center pt-8">If you are interested in sponsoring my work on GitHub, please <a class="font-bold text-purple-400 hover:text-purple-500 border-b-2 border-transparent" href="https://github.com/sponsors/cholladay0816">click here</a>.  Every donation is greatly appreciated.</div>
            </div>

        </div>
        </section>
    </div>

</x-guest-layout>
