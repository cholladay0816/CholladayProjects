<main class="profile-page">
    <div x-data="{tab: 'about'}">
        <div class="bg-lightBlue-600 dark:bg-lightBlue-700 pb-32">
            <header class="py-10">
            </header>
        </div>

        <main class="-mt-32">
            <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="bg-white dark:bg-dark px-4 py-5 border-b dark:border-transparent border-gray-200 sm:px-6 rounded-xl">
                    <div class="-ml-4 -mt-4 pb-4 flex justify-between items-center flex-wrap md:flex-nowrap">
                        <div class="ml-4 mt-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="shadow-lg h-16 w-16 md:h-48 md:w-48 rounded-full" src="{{asset('img/profile_picture.png')}}" alt="">
                                </div>
                                <div class="ml-4 mt-4 flex-shrink-0 flex flex-col">
                                    <h1 class="flex font-semibold text-xl md:text-4xl">Christian Holladay</h1>
                                    <p class="flex dark:text-gray-300 text-gray-500">Full Stack Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col p-5 text-xl dark:text-gray-300 text-gray-800 font-bold grid grid-cols-4 md:grid-cols-2 lg:grid-cols-4 gap-5">
                            <a href="mailto:cholladay0816@gmail.com" class="transform translate duration-300 hover:text-rose-600 h mx-auto">
                                <label for="email" class="sr-only">Email (Preferred)</label>
                                <span id="email" class="flex flex-row">
                            <span class="">
                                <svg class="w-6 h-6 mr-2 my-auto" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                        </span>
                            </a>

                            <a href="https://github.com/cholladay0816" class="duration-300 hover:text-purple-600 mx-auto">
                                <label for="github" class="sr-only">GitHub</label>
                                <span id="github" class="flex flex-row">
                                <span class="">
                                    <svg class="w-6 h-6 mr-2 my-auto" fill="currentColor" class="text-white mr-3 text-opacity-50"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.463 2 11.97c0 4.404 2.865 8.14 6.839 9.458.5.092.682-.216.682-.48 0-.236-.008-.864-.013-1.695-2.782.602-3.369-1.337-3.369-1.337-.454-1.151-1.11-1.458-1.11-1.458-.908-.618.069-.606.069-.606 1.003.07 1.531 1.027 1.531 1.027.892 1.524 2.341 1.084 2.91.828.092-.643.35-1.083.636-1.332-2.22-.251-4.555-1.107-4.555-4.927 0-1.088.39-1.979 1.029-2.675-.103-.252-.446-1.266.098-2.638 0 0 .84-.268 2.75 1.022A9.606 9.606 0 0112 6.82c.85.004 1.705.114 2.504.336 1.909-1.29 2.747-1.022 2.747-1.022.546 1.372.202 2.386.1 2.638.64.696 1.028 1.587 1.028 2.675 0 3.83-2.339 4.673-4.566 4.92.359.307.678.915.678 1.846 0 1.332-.012 2.407-.012 2.734 0 .267.18.577.688.48C19.137 20.107 22 16.373 22 11.969 22 6.463 17.522 2 12 2z"></path></svg>
                                </span>
                                </span>
                            </a>


                            <a href="https://linkedin.com/in/christian-holladay" class="duration-300 hover:text-lightBlue-600 mx-auto">
                                <label for="linkedin" class="sr-only">Linkedin</label>
                                <span id="linkedin" class="flex flex-row">
                                    <span class="">
                                        <svg class="w-6 h-6 mr-2 my-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34">
                                        <g>
                                            <path d="M34,2.5v29A2.5,2.5,0,0,1,31.5,34H2.5A2.5,2.5,0,0,1,0,31.5V2.5A2.5,2.5,0,0,1,2.5,0h29A2.5,2.5,0,0,1,34,2.5ZM10,13H5V29h5Zm.45-5.5A2.88,2.88,0,0,0,7.59,4.6H7.5a2.9,2.9,0,0,0,0,5.8h0a2.88,2.88,0,0,0,2.95-2.81ZM29,19.28c0-4.81-3.06-6.68-6.1-6.68a5.7,5.7,0,0,0-5.06,2.58H17.7V13H13V29h5V20.49a3.32,3.32,0,0,1,3-3.58h.19c1.59,0,2.77,1,2.77,3.52V29h5Z" fill="currentColor"></path>
                                        </g>
                                      </svg>
                                    </span>
                                </span>
                            </a>

                            <a href="https://twitter.com/cholladay0816" class="duration-300 hover:text-blue-500 mx-auto">
                                <label for="twitter" class="sr-only">Twitter</label>
                                <span id="twitter" class="flex flex-row">
                                    <span class="">
                                        <svg class="w-6 h-6 mr-2 my-auto" fill="currentColor" viewBox="0 0 24 24" class="">
                                            <g><path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path></g>
                                        </svg>
                                    </span>
                                </span>
                            </a>

                        </div>
                    </div>
                    <!-- About -->
                    <section class="py-12 border-t border-gray-200">
                        <div class="grid lg:grid-cols-2 py-12 gap-y-8">
                            <div class="col-span-1 lg:border-r lg:border-gray-200 flex flex-col px-4 py-2">
                                <h2 class="text-2xl font-semibold">About</h2>
                                <p class="pb-4">
                                    My name is Christian and I'm a full-stack developer from Missouri.
                                    I like to learn new things, build incredible programs, refactor them again, and play Quake.
                                </p>
                                <p>
                                    I spend much of my free time teaching myself how to use new technologies and making fun projects with my friends.
                                    I love bringing creations to life and programming gives me the tools to do just that.
                                </p>
                            </div>
                            <div class="px-4 flex flex-col">
                                <div class="mx-auto my-auto">
                                    {{\Illuminate\Mail\Markdown::parse('![My GitHub Stats](https://github-readme-stats.vercel.app/api?username=cholladay0816&show_icons=true&count_private=true&theme=tokyonight)')}}
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </main>
    </div>
</main>
