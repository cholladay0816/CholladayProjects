<div x-data="{ mobileMenuOpen: false }" class="relative bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center border-gray-100 py-4 md:justify-start md:space-x-10">
            <div class="">
                <a href="{{url('/')}}" class="flex font-bold text-2xl text-indigo-500">
                    Cholladay Projects
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button @click="mobileMenuOpen = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" x-description="Heroicon name: menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                </button>
            </div>
            <nav class="hidden md:flex md:flex-1 space-x-10 justify-end">
                <div @click.away="flyoutMenuOpen = false" x-data="{ flyoutMenuOpen: false }" class="relative">
                <button type="button" x-state:on="Item active" x-state:off="Item inactive" @click="flyoutMenuOpen = !flyoutMenuOpen" :class="{ 'text-gray-900': flyoutMenuOpen, 'text-gray-500': !flyoutMenuOpen }" class="text-gray-500 group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
                <span>Projects</span>
                <svg x-state:on="Item active" x-state:off="Item inactive" class="text-gray-400 h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" x-bind:class="{ 'text-gray-600': flyoutMenuOpen, 'text-gray-400': !flyoutMenuOpen }" x-description="Heroicon name: chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                </button>

                <div x-description="'Solutions' flyout menu, show/hide based on flyout menu state." x-show="flyoutMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                <div class="rounded-lg shadow-lg">
                    <div class="rounded-lg shadow-xs overflow-hidden">
                        <div class="z-20 relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                            @component('components.header-dropdown-project-item', ['title'=>'CreatorCore', 'description'=>'An innovative platform that streamlines the commission process for artists.', 'link'=>url('/project/creatorcore')])
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" x-description="Heroicon name: template" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                </svg>

                            @endcomponent
                            @component('components.header-dropdown-project-item', ['title'=>'American Dad Speedruns', 'description'=>'A speedrunning website for American Dad Speedruns, parodying speedrun.com.', 'link'=>url('/project/adsr')])
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" x-description="Heroicon name: chart-bar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            @endcomponent
                            @component('components.header-dropdown-project-item', ['title'=>'Engagement', 'description'=>'Test', 'link'=>url('/projects/')])
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" x-description="Heroicon name: cursor-click" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                                </svg>
                            @endcomponent
                            @component('components.header-dropdown-project-item', ['title'=>'Security', 'description'=>'Test', 'link'=>url('/projects/')])
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" x-description="Heroicon name: shield-check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            @endcomponent
                            @component('components.header-dropdown-project-item', ['title'=>'Automations', 'description'=>'Test', 'link'=>url('/projects/')])
                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" x-description="Heroicon name: refresh" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                            @endcomponent
                        </div>
                        <div class="px-5 py-5 bg-gray-50 space-y-6 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                            <div class="flow-root">
                                <a href="#" class="-m-3 p-3 flex items-center space-x-3 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150">
                                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" x-description="Heroicon name: search" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                    <span>Explore</span>
                                </a>
                            </div>
                            <div class="flow-root">
                                <a href="#" class="-m-3 p-3 flex items-center space-x-3 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150">
                                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" x-description="Heroicon name: phone" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <span>Contact</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <a href="#" class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
        Pricing
    </a>
    <a href="#" class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
        Docs
    </a>

    <div x-data="{ flyoutMenuOpen: false }" @click.away="flyoutMenuOpen = false" class="relative">
    <button type="button" @click="flyoutMenuOpen = !flyoutMenuOpen" x-state:on="Item active" x-state:off="Item inactive" :class="{ 'text-gray-900': flyoutMenuOpen, 'text-gray-500': !flyoutMenuOpen }" class="text-gray-500 inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
    <span>More</span>
    <svg x-state:on="Item active" x-state:off="Item inactive" class="text-gray-400 h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" x-bind:class="{ 'text-gray-600': flyoutMenuOpen, 'text-gray-400': !flyoutMenuOpen }" x-description="Heroicon name: chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
    </svg>
    </button>

    <div x-description="'More' flyout menu, show/hide based on flyout menu state." x-show="flyoutMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute right-1/2 transform translate-x-2/5 mt-3 px-2 w-screen max-w-md sm:px-0">
    <div class="rounded-lg shadow-lg">
        <div class="rounded-lg shadow-xs overflow-hidden">
            <div class="z-20 relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" x-description="Heroicon name: support" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <div class="space-y-1">
                        <p class="text-base leading-6 font-medium text-gray-900">
                            Help Center
                        </p>
                        <p class="text-sm leading-5 text-gray-500">
                            Get all of your questions answered in our forums or contact support.
                        </p>
                    </div>
                </a>
                <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" x-description="Heroicon name: bookmark-alt" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <div class="space-y-1">
                        <p class="text-base leading-6 font-medium text-gray-900">
                            Guides
                        </p>
                        <p class="text-sm leading-5 text-gray-500">
                            Learn how to maximize our platform to get the most out of it.
                        </p>
                    </div>
                </a>
                <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" x-description="Heroicon name: calendar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <div class="space-y-1">
                        <p class="text-base leading-6 font-medium text-gray-900">
                            Events
                        </p>
                        <p class="text-sm leading-5 text-gray-500">
                            See what meet-ups and other events we might be planning near you.
                        </p>
                    </div>
                </a>
                <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" x-description="Heroicon name: shield-check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    <div class="space-y-1">
                        <p class="text-base leading-6 font-medium text-gray-900">
                            Security
                        </p>
                        <p class="text-sm leading-5 text-gray-500">
                            Understand how we take your privacy seriously.
                        </p>
                    </div>
                </a>
            </div>
            <div class="px-5 py-5 bg-gray-50 space-y-5 sm:px-8 sm:py-8">
                <div class="space-y-4">
                    <h3 class="text-sm leading-5 tracking-wide font-medium text-gray-500 uppercase">
                        Recent Posts
                    </h3>
                    <ul class="space-y-4">
                        <li class="text-base leading-6 truncate">
                            <a href="#" class="font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
                                Boost your conversion rate
                            </a>
                        </li>
                        <li class="text-base leading-6 truncate">
                            <a href="#" class="font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
                                How to use search engine optimization to drive traffic to your site
                            </a>
                        </li>
                        <li class="text-base leading-6 truncate">
                            <a href="#" class="font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
                                Improve your customer experience
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="text-sm leading-5">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 transition ease-in-out duration-150">
                        View all posts →
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</nav>

</div>
</div>

<div x-description="Mobile menu, show/hide based on mobile menu state." x-show="mobileMenuOpen" x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
<div class="rounded-lg shadow-lg">
    <div class="rounded-lg shadow-xs bg-white divide-y-2 divide-gray-50">
        <div class="pt-5 pb-6 px-5 space-y-6">
            <div class="flex items-center justify-between">
                <div>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/v1/workflow-mark-on-white.svg" alt="Workflow">
                </div>
                <div class="-mr-2">
                    <button @click="mobileMenuOpen = false" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" x-description="Heroicon name: x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    </button>
                </div>
            </div>
            <div>
                <nav class="grid gap-y-8">
                    @component('components.header-mobile-project-item', ['title'=>'CreatorCore', 'link'=>url('/projects/')])

                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" x-description="Heroicon name: template" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                        </svg>
                    @endcomponent
                    @component('components.header-mobile-project-item', ['title'=>'American Dad Speedruns', 'link'=>url('/projects/')])
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" x-description="Heroicon name: chart-bar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    @endcomponent
                    @component('components.header-mobile-project-item', ['title'=>'Engagement', 'link'=>url('/projects/')])
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" x-description="Heroicon name: cursor-click" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                        </svg>
                    @endcomponent
                    @component('components.header-mobile-project-item', ['title'=>'Security', 'link'=>url('/projects/')])
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" x-description="Heroicon name: shield-check" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    @endcomponent
                    @component('components.header-mobile-project-item', ['title'=>'Automations', 'link'=>url('/projects/')])
                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" x-description="Heroicon name: refresh" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                    @endcomponent

                </nav>
            </div>
        </div>
        <div class="py-6 px-5 space-y-6">
            <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                <a href="#" class="text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
                    Donate
                </a>
                <a href="#" class="text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
                    Docs
                </a>
                <a href="#" class="text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
                    Enterprise
                </a>
                <a href="#" class="text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
                    Blog
                </a>
                <a href="#" class="text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
                    Help Center
                </a>
                <a href="#" class="text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
                    Guides
                </a>
                <a href="#" class="text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
                    Security
                </a>
                <a href="#" class="text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">
                    Events
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
