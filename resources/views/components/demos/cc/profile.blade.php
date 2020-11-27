<main class="profile-page">
    <section class="relative block" style="height: 500px;">
        <div
            class="absolute top-0 w-full h-full bg-center bg-cover"
            style='background-image: url("{{asset('/img/bluegradient.png')}}");'
        >
        </div>
        <div
            class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
            style="height: 70px; transform: translateZ(0px);"
        >
            <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
            >
                <polygon
                    class="text-gray-300 fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
    </section>
    <section class="relative py-16 bg-gray-300">
        <div class="container mx-auto px-4">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64"
            >
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div
                            class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center"
                        >
                            <div class="relative">
                                <img
                                    alt="Profile Picture"
                                    src="{{asset('/img/profile_picture.png')}}"
                                    class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16"
                                    style="width:150px;max-width: 150px;"
                                />
                            </div>
                        </div>
                        <div
                            class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center"
                        >
                            <div class="py-6 px-3 mt-32 sm:mt-0">
                                <a
                                    class="bg-indigo-500 active:bg-indigo-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1"
                                    type="button"
                                    style="transition: all 0.15s ease 0s;"
                                    href="#creatorcore"
                                >
                                    Commission
                                </a>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4 lg:order-1">
                            <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                <div class="mr-4 p-3 text-center">
                      <span
                          class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                      >2</span
                      ><span class="text-sm text-gray-500">Reviews</span>
                                </div>
                                <div class="mr-4 p-3 text-center">
                      <span
                          class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                      >6</span
                      ><span class="text-sm text-gray-500">Photos</span>
                                </div>
                                <div class="lg:mr-4 p-3 text-center">
                      <span
                          class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                      >3</span
                      ><span class="text-sm text-gray-500">Commissions</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-12">
                        <h3 id="displayNameHeader"
                            class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2"
                        >
                            Cholladay
                        </h3>
                        <div
                            class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase"
                        >
                            <i
                                class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"
                            ></i>
                            St Louis, Missouri
                        </div>
                        <div class="mb-2 text-gray-700 mt-10">
                            <i class="fas fa-briefcase mr-2 text-lg text-gray-500"></i
                            >CEO, Lead Developer
                        </div>
                        <div class="mb-2 text-gray-700">
                            <i class="fas fa-university mr-2 text-lg text-gray-500"></i
                            >CreatorCore LLC
                        </div>
                    </div>
                    <ul class="flex border-b mt-24 mx-auto">
                        <li class="flex flex-1">
                            <a class="bg-white inline-block py-2 px-2 sm:px-6 lg:px-24 mx-auto {{'text-blue-500 hover:text-blue-800'}} font-semibold" href="#creatorcore">Details</a>
                        </li>
                        <li class="flex flex-1">
                            <a class="bg-white inline-block py-2 px-2 sm:px-6 lg:px-24 mx-auto {{'text-blue-500 hover:text-blue-800'}} font-semibold" href="#creatorcore">Gallery</a>
                        </li>
                        <li class="flex flex-1 {{'-mb-px'}}">
                            <a class="bg-white inline-block py-2 px-2 sm:px-6 lg:px-24 mx-auto {{'border-l border-t border-r rounded-t text-blue-700'}} font-semibold" href="#creatorcore">Commissions</a>
                        </li>
                    </ul>
                    <div class="mt-10 py-10 text-center">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-10/12 px-1">
                                {{$slot}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>