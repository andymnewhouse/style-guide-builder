<header class="bg-no-repeat bg-cover bg-header">
    <div class="pb-32 space-y-4 bg-gradient-to-t from-white">
        <div class="px-4 py-6 mx-auto bg-no-repeat max-w-7xl bg-logo">
            <a href="/">
                <img src="https://pspaudioware.andymnewhouse.me/assets/company/psp-logo-light.svg" class="h-20 mx-auto md:h-28" alt="PSP Audioware Logo">
            </a>
        </div>

        <nav class="px-4">
            <div class="px-2 mx-auto border-t-2 border-b-2 border-blue-700 max-w-7xl sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-center h-12">
                    <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                        <!-- Mobile menu button-->
                        <button x-data="" @click="$store.mobileNav.toggle()" type="button" class="inline-flex items-center justify-center p-2 text-blue-700 rounded-md bg-gradient-to-r hover:text-white hover:from-sapphire hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-sapphire" aria-controls="mobile-menu" x-bind:aria-expanded="$store.mobileNav.open">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                            <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex items-center justify-center flex-1 md:justify-start lg:justify-center md:items-stretch">
                        <div class="hidden md:block md:ml-6">
                            <div class="flex space-x-4">
                                <a href="/products" class="px-3 py-2 transition bg-gradient-to-r {{ $this->classesFor('nav.a') }} {{ $this->classesFor('nav.a:hover') }}">
                                    Products
                                </a>
                                <a href="/downloads" class="px-3 py-2 transition bg-gradient-to-r {{ $this->classesFor('nav.a') }} {{ $this->classesFor('nav.a:hover') }}">
                                    Downloads
                                </a>
                                <a href="/artists" class="px-3 py-2 transition bg-gradient-to-r {{ $this->classesFor('nav.a') }} {{ $this->classesFor('nav.a:hover') }}">
                                    Artists
                                </a>
                                <a href="/company" class="px-3 py-2 transition bg-gradient-to-r {{ $this->classesFor('nav.a') }} {{ $this->classesFor('nav.a:hover') }}">
                                    Company
                                </a>
                                <a href="/support" class="px-3 py-2 transition bg-gradient-to-r {{ $this->classesFor('nav.a') }} {{ $this->classesFor('nav.a:hover') }}">
                                    Support
                                </a>

                            </div>
                        </div>
                        <div class="absolute right-0 flex items-center pr-4 space-x-4 top-2">
                            <a href="#" class="block text-xl text-blue-700 hover:text-blue-750">
                                <svg class="w-8 h-8" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.12104 17.8037C7.15267 16.6554 9.4998 16 12 16C14.5002 16 16.8473 16.6554 18.879 17.8037M15 10C15 11.6569 13.6569 13 12 13C10.3431 13 9 11.6569 9 10C9 8.34315 10.3431 7 12 7C13.6569 7 15 8.34315 15 10ZM21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                            <a href="#" class="block text-xl text-blue-700 hover:text-blue-750">
                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </a>
                            <a href="#" class="block text-xl text-blue-700 hover:text-blue-750">
                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-data="" x-show="$store.mobileNav.open" @click.away="$store.mobileNav.away()" x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="border-2 border-t-0 border-blue-700 md:hidden" id="mobile-menu" style="display: none;">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="/products" class="block px-3 py-2 text-base font-medium text-center text-blue-700 rounded-md bg-gradient-to-r hover:from-sapphire hover:to-blue-700 hover:text-white">
                        Products
                    </a>
                    <a href="/downloads" class="block px-3 py-2 text-base font-medium text-center text-blue-700 rounded-md bg-gradient-to-r hover:from-sapphire hover:to-blue-700 hover:text-white">
                        Downloads
                    </a>
                    <a href="/artists" class="block px-3 py-2 text-base font-medium text-center text-blue-700 rounded-md bg-gradient-to-r hover:from-sapphire hover:to-blue-700 hover:text-white">
                        Artists
                    </a>
                    <a href="/company" class="block px-3 py-2 text-base font-medium text-center text-blue-700 rounded-md bg-gradient-to-r hover:from-sapphire hover:to-blue-700 hover:text-white">
                        Company
                    </a>
                    <a href="/support" class="block px-3 py-2 text-base font-medium text-center text-blue-700 rounded-md bg-gradient-to-r hover:from-sapphire hover:to-blue-700 hover:text-white">
                        Support
                    </a>

                </div>
            </div>
        </nav>
    </div>
</header>
<main class="-mt-24">
    <section class="py-8">
        <div class="container grid grid-cols-1 gap-8 px-4 mx-auto max-w-7xl md:px-0 md:grid-cols-2">
            <div class="space-y-4">
                <img src="https://pspaudioware.andymnewhouse.me/assets/products/PSP_InfiniStripFIRE.png" class="w-3/4 mx-auto shadow-lg" alt="">


                <div class="text-center">
                    <p class="text-blue-700">AAX | AudioUnit | VST | VST3</p>
                    <a href="https://www.youtube.com/playlist?list=PLOHPE5_tkZxgLHRjbniPCZuqxqEOY19rf" class="{{ $this->classesFor('links.a') }} {{ $this->classesFor('links.a:hover') }}">
                        User Manual
                    </a>
                </div>
            </div>
            <div class="space-y-4">
                <header>
                    <h1 class="{{ $this->classesFor('headings.h1') }}">PSP InfiniStrip WIND</h1>
                    <p class="{{ $this->classesFor('headings.subtitle') }}">Zero Latency. Full Impact.</p>
                </header>

                <div>
                    <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">PSP InfiniStripWIND</strong> is an infinitely configurable channel strip plug-in based on 20 years PSP experience in developing <em>HANDCRAFTED PLUG-INS</em> for tracking, mixing and mastering. PSP InfiniStrip can be used for mixing, tracking or live streaming/broadcasting anywhere you need a great sounding and easy to configure channel strip, without having to worry about latency! That's right - you can configure PSP InfiniStrip with whatever modules you need and track through them with confidence that the plug-in isn't adding any latency at all to your recorded signal!</p>
                </div>

                <div class="space-y-4 md:space-x-4 md:space-y-0">
                    <a href="" class="btn btn-lg btn-gradient {{ $this->classesFor('buttons.gradient') }}">
                        Add to Cart $199
                    </a>
                    <a href="" class="btn btn-lg btn-gradient-gray {{ $this->classesFor('buttons.gray') }}">
                        30 Day Demo
                    </a>
                </div>
            </div>
        </div>



    </section>

    <section class="py-8 bg-studio">
        <div class="container mx-auto space-y-8 px-18 lg:max-w-6xl">
            <div class="relative testimonials-carousel glide--ltr glide--slider glide--swipeable">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="p-4 glide__slide glide__slide--active">
                            <div class="relative lg:flex lg:items-center">
                                <div class="hidden lg:block lg:flex-shrink-0">
                                    <img class="{{ $this->classesFor('testimonials.image') }}" src="https://pspaudioware.andymnewhouse.me/img/asset/YXNzZXRzL2FydGlzdHMvQWxhbiBNZXllcnNvbi9BbGFuX01leWVyc29uX3d3dy5KUEc=?w=200&h=200&s=3f5e2c4a41e7180a8397b8449664dead" alt="Alan Meyerson">
                                </div>

                                <div class="relative lg:ml-10">
                                    <blockquote class="relative">
                                        <div class="{{ $this->classesFor('testimonials.quote') }}">
                                            <p>
                                                I love it!
                                            </p>
                                        </div>
                                        <footer class="mt-6">
                                            <div class="lg:flex">
                                                <div class="flex-shrink-0 lg:hidden">
                                                    <img class="w-12 h-12 rounded-full" src="https://pspaudioware.andymnewhouse.me/img/asset/YXNzZXRzL2FydGlzdHMvQWxhbiBNZXllcnNvbi9BbGFuX01leWVyc29uX3d3dy5KUEc=?w=200&amp;h=200&amp;s=d8a71c35cc48cd620d36c048805bd6a3" alt="Alan Meyerson">
                                                </div>
                                                <div>
                                                    <div class="{{ $this->classesFor('testimonials.author') }}">
                                                        Alan Meyerson </div>
                                                    <div class="{{ $this->classesFor('testimonials.credits') }}">
                                                        <p>Grammy-winning scoring mixer (Mulan, Dark Knight, Gladiator, Shrek, the Pirates of the Caribbean ...)</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>

                <div class="pt-4 text-center glide__arrows md:pt-0" data-glide-el="controls">
                    <button class="text-gray-300 rounded-lg hover:text-white focus:text-white md:-ml-8 md:mid-left glide__arrow glide__arrow--left focus:outline-none focus:shadow-outline" data-glide-dir="<">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-current md:w-16 md:h-16">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>

                        <span class="sr-only">previous</span>
                    </button>
                    <button class="text-gray-300 rounded-lg hover:text-white focus:text-white md:-mr-24 md:mid-right glide__arrow glide__arrow--right focus:outline-none focus:shadow-outline" data-glide-dir=">">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-current md:w-16 md:h-16">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>

                        <span class="sr-only">next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <section class="py-8">
        <div class="container grid grid-cols-1 gap-8 px-4 mx-auto max-w-7xl md:px-0 md:grid-cols-2">
            <div class="space-y-4">
                <div class="accordion" id="panels" x-data="{ open: 'psp-infinistrip-features'}">
                    <div class="accordion-item">
                        <button @click="open = 'psp-infinistrip-features'" id="psp-infinistrip-features-heading" class="flex justify-between w-full px-4 py-2 text-blue-700 border-t border-blue-700 hover:bg-gray-100" type="button" aria-expanded="true" aria-controls="psp-infinistrip-features">
                            <span class="{{ $this->classesFor('headings.panel') }}">PSP InfiniStrip Features</span>
                            <span x-show="open === 'psp-infinistrip-features'"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-blue-700">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                </svg>
                            </span>
                            <span x-show="open !== 'psp-infinistrip-features'" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-blue-700">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </span>
                        </button>

                        <div x-show="open === 'psp-infinistrip-features'" id="psp-infinistrip-features" class="p-4" aria-labelledby="psp-infinistrip-features-heading" data-bs-parent="#panels">
                            <div>
                                <ul class="{{ $this->classesFor('typography.ul') }}" style="margin-top:0!important;margin-bottom:0!important">
                                    <li>25 independent processors divided into 8 types of modules (preamps, filters, compressors, equalisers, limiters, dynamic modules [expander, ducker and gate], control and special modules) to create your custom channel strip.</li>
                                    <li>7 dedicated “slots” for you to add one module from each type of processing modules, and 2 flexible insert slots for any module type.</li>
                                    <li>Parameters matching. Swipe through different compressors, EQs without touching a knob. Look for your preferred colour and flavour.</li>
                                    <li>3 different view modes (full, resizeable, and mini view mode) designed for different workflows and screen sizes.</li>
                                    <li>External side-chain support for each module independently.</li>
                                    <li>Includes both Mono and Stereo plug-in versions for different track types.</li>
                                    <li>Zero latency processing.</li>
                                    <li>Over <strong class="{{ $this->classesFor('typography.p-strong') }}">230</strong> presets designed by top sound engineers from around the world.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button @click="open = 'module-list'" id="module-list-heading" class="flex justify-between w-full px-4 py-2 text-blue-700 border-t border-blue-700 hover:bg-gray-100" type="button" aria-expanded="true" aria-controls="module-list">
                            <span class="{{ $this->classesFor('headings.panel') }}">Module List</span>
                            <span x-show="open === 'module-list'" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-blue-700">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                </svg>
                            </span>
                            <span x-show="open !== 'module-list'"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-blue-700">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </span>
                        </button>

                        <div x-show="open === 'module-list'" id="module-list" class="p-4" aria-labelledby="module-list-heading" data-bs-parent="#panels" style="display: none;">
                            <div>
                                <p class="{{ $this->classesFor('typography.p') }}" style="margin-top:0!important"><strong class="{{ $this->classesFor('typography.p-strong') }}">Preamps:</strong></p>
                                <ol class="{{ $this->classesFor('typography.ol') }}" start="1">
                                    <li>
                                        Gain - pure gain with automated gain adjustment.
                                    </li>
                                    <li>
                                        Pre 60s - as Gain plus valve type of preamp emulation.
                                    </li>
                                    <li>
                                        Pre 70s - as Gain plus discrete preamp with a transformer.
                                    </li>
                                    <li>
                                        Pre 80s - as Gain plus discrete transformer less preamp.
                                    </li>
                                    <li>
                                        ADC 90s - as Gain plus 12 bit nonlinear analog to digital converter.
                                    </li>
                                </ol>
                                <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">Filters:</strong></p>
                                <ol start="1" class="{{ $this->classesFor('typography.ol') }}">
                                    <li>
                                        Basic Filters - low and high pass filters with three slopes options per filter.
                                    </li>
                                    <li>
                                        Pro Filters - Basic Filters plus middle filter with five filters types to choose from.
                                    </li>
                                    <li>
                                        S.C.Filters - as Pro Filters but dedicated for the side chain processing.
                                    </li>
                                </ol>
                                <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">Gate/Expander/Ducker:</strong></p>
                                <ol start="1" class="{{ $this->classesFor('typography.ol') }}">
                                    <li>Expander - expander with built in side chain filters and optional external side chain input.</li>
                                    <li>Gate&nbsp; - gate with side chain filters and optional external side chain input.</li>
                                    <li>Ducker - ducker with side chain filters and optional external side chain input.</li>
                                </ol>
                                <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">Compressors:</strong></p>
                                <ol start="1" class="{{ $this->classesFor('typography.ol') }}">
                                    <li>Opto Pressor - optical compressor with optional external side chain input.</li>
                                    <li>FET Pressor - redesigned for channel processing version of the PSP FETpressor with optional external side chain input.</li>
                                    <li>VCA Pressor - VCA compressor designed for channel processing with optional external side chain input.</li>
                                </ol>
                                <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">Equalizers:</strong></p>
                                <ol start="1" class="{{ $this->classesFor('typography.ol') }}">
                                    <li>
                                        ChannelQ - general purpose equalizer.
                                    </li>
                                    <li>
                                        PreQursor - redesigned for channel processing version of the PSP preQursor.
                                    </li>
                                    <li>
                                        RetroQ - redesigned and upgraded for channel processing version of the PSP RetroQ.
                                    </li>
                                </ol>
                                <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">Limiters:</strong></p>
                                <ol start="1" class="{{ $this->classesFor('typography.ol') }}">
                                    <li>
                                        VCA Lim&nbsp; - in strip implementation of the PSP TwinL.
                                    </li>
                                    <li>
                                        Opto Lim&nbsp; - in strip implementation of the PSP TwinL.
                                    </li>
                                    <li>
                                        BrickWall - a sample accurate brick wall limiter.
                                    </li>
                                    <li>
                                        Saturator - a dedicated and highly adjustable saturation module.
                                    </li>
                                </ol>
                                <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">Control:</strong></p>
                                <ol start="1" class="{{ $this->classesFor('typography.ol') }}">
                                    <li>
                                        Master Control - fader, width, balance and meter.
                                    </li>
                                </ol>
                                <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">Special:</strong></p>
                                <ol start="1" class="{{ $this->classesFor('typography.ol') }}" style="margin-bottom:0!important">
                                    <li>
                                        De-esser - unique deesser algorithm.
                                    </li>
                                    <li>
                                        De-hummer - hum noise reduction algorithm.
                                    </li>
                                    <li>
                                        ReactivEQ [NEW!]- a specialised filter that acts as a type of dynamic equalizer.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button @click="open = 'system-requirements'" id="system-requirements-heading" class="flex justify-between w-full px-4 py-2 text-blue-700 border-t border-blue-700 hover:bg-gray-100" type="button" aria-expanded="true" aria-controls="system-requirements">
                            <span class="{{ $this->classesFor('headings.panel') }}">System Requirements</span>
                            <span x-show="open === 'system-requirements'" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-blue-700">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                </svg>
                            </span>
                            <span x-show="open !== 'system-requirements'"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-blue-700">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </span>
                        </button>

                        <div x-show="open === 'system-requirements'" id="system-requirements" class="p-4" aria-labelledby="system-requirements-heading" data-bs-parent="#panels" style="display: none;">
                            <div>
                                <p class="{{ $this->classesFor('typography.p') }}" style="margin-top:0!important">In order to run PSP InfiniStrip in <a href="http://web.archive.org/web/20201020145700/http://www.pspaudioware.com/support/activation/" class="{{ $this->classesFor('links.a') }} {{ $this->classesFor('links.a:hover') }}">30-day trial mode</a> or <a href="http://web.archive.org/web/20201020145700/http://www.pspaudioware.com/support/activation/" class="{{ $this->classesFor('links.a') }} {{ $this->classesFor('links.a:hover') }}">activate it</a>, you need <strong>an iLok user ID</strong> which you can create for free at <a target="_blank" href="http://web.archive.org/web/20201020145700/https://www.ilok.com/" class="{{ $this->classesFor('links.a') }} {{ $this->classesFor('links.a:hover') }}">www.ilok.com</a>, and you need to install the free iLok License Manager application. A hardware USB iLok dongle is <strong>NOT required</strong>. </p>
                                <p class="{{ $this->classesFor('typography.p') }}">You can activate the license<strong> in 3 separate locations</strong>, each of which can be either a computer or an iLok dongle (2nd generation or above). You can move these licenses at any time using PACE's iLok License Manager software.</p>
                                <h3 class="{{ $this->classesFor('headings.h3') }}">PC</h3>
                                <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">VST3</strong></p>
                                <ul class="{{ $this->classesFor('typography.ul') }}">
                                    <li>
                                        Windows x32 or x64 (7, 8 or 10)
                                    </li>
                                    <li>
                                        VST3 compatible application
                                    </li>
                                </ul>
                                <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">VST</strong></p>
                                <ul class="{{ $this->classesFor('typography.ul') }}">
                                    <li>
                                        Windows x32 or x64 (7, 8 or 10)
                                    </li>
                                    <li>
                                        VST 2.4 compatible application
                                    </li>
                                </ul>
                                <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">RTAS</strong></p>
                                <ul class="{{ $this->classesFor('typography.ul') }}">
                                    <li>
                                        Windows x32 or x64 (7,8 or 10)
                                    </li>
                                    <li>
                                        ProTools 8.0.0 (or later)
                                    </li>
                                </ul>
                                <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">AAX</strong></p>
                                <ul class="{{ $this->classesFor('typography.ul') }}">
                                    <li>
                                        Windows x32 or x64 (7,8 or 10)
                                    </li>
                                    <li>
                                        Pro Tools 10, 11, 12 or ProTools HD 10, 11, 12 or ProTools Ultimate
                                    </li>
                                </ul>
                                <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">All DAWs</strong></p>
                                <ul class="{{ $this->classesFor('typography.ul') }}">
                                    <li>
                                        The latest iLok License Manager application installed&nbsp;
                                    </li>
                                </ul>
                                <h3 class="{{ $this->classesFor('headings.h3') }}">Mac</h3>
                                <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">AudioUnit</strong></p>
                                <ul class="{{ $this->classesFor('typography.ul') }}">
                                    <li>
                                        Mac OSX 10.8 - 10.15 or later
                                    </li>
                                    <li>
                                        32 or 64-bit compatible host application
                                    </li>
                                </ul>
                                <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">VST</strong></p>
                                <ul class="{{ $this->classesFor('typography.ul') }}">
                                    <li>
                                        Mac OSX 10.8 - 10.15 or later
                                    </li>
                                    <li>
                                        32 or 64-bit VST 2.4 compatible host application
                                    </li>
                                </ul>
                                <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">VST3</strong></p>
                                <ul class="{{ $this->classesFor('typography.ul') }}">
                                    <li>
                                        Mac OSX 10.8 - 10.15 or later
                                    </li>
                                    <li>
                                        32 or 64-bit VST 3 compatible host application
                                    </li>
                                </ul>
                                <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">RTAS</strong></p>
                                <ul class="{{ $this->classesFor('typography.ul') }}">
                                    <li>
                                        Mac OSX 10.8, 10.9, 10.10 or 10.11
                                    </li>
                                    <li>
                                        ProTools LE 8.0.0 or ProTools TDM 8.0.0 (or later)
                                    </li>
                                </ul>
                                <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">AAX</strong></p>
                                <ul class="{{ $this->classesFor('typography.ul') }}">
                                    <li>
                                        Mac OSX 10.8 - 10.15 or later
                                    </li>
                                    <li>
                                        ProTools 10, 11, 12 or ProTools HD 10, 11, 12 or ProTools Ultimate
                                    </li>
                                </ul>
                                <p class="{{ $this->classesFor('typography.p') }}"><strong class="{{ $this->classesFor('typography.p-strong') }}">All DAWs</strong></p>
                                <ul class="{{ $this->classesFor('typography.ul') }}" style="margin-bottom:0!important">
                                    <li>
                                        Up to date iLok License Manager application installed
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="md:sticky md:top-32">
                    <div class="space-y-4">
                        <div class="overflow-hidden shadow-lg aspect-w-16 aspect-h-9 rounded-2xl">
                            <iframe src="https://www.youtube-nocookie.com/embed/B9_1KON8fZk" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe>
                        </div>

                        <div class="text-center">
                            <a href="https://www.youtube.com/playlist?list=PLOHPE5_tkZxgLHRjbniPCZuqxqEOY19rf" class="btn btn-lg btn-gradient  {{ $this->classesFor('buttons.gradient') }}">
                                PSP InfiniStrip WIND Video Guides Playlist
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>
