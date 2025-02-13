<?php require __DIR__ . '/../config.php'; ?>

<header class="fixed left-0 w-full inset-x-0 top-0 z-50 bg-white">
    <nav class="flex items-center justify-between p-4 lg:px-8"
        aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-16 w-auto mix-blend-multiply"
                    src="<?php echo BASE_URL; ?>/src/imgs-vid/logo.png"
                    alt>
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" id="menu-toggle"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="<?php echo BASE_URL; ?>"
                class="text-base font-semibold text-gray-900 hover:text-slate-600">Home</a>
            <div class="relative inline-block">
                <div  id="aboutUs-ContentLg" class="inline-block items-center hover:text-slate-600">
                    <button
                        class="text-base font-semibold text-gray-900 hover:text-slate-600">About Us    
                    </button>  
                    <div class="inline-block">
                        <svg class="h-3 w-4 text-black right-0 hover:text-slate-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    
                </div>
                <div id="aboutUs-dropdownLg" class="hidden absolute left-0 z-10 py-2 mt-4 w-64 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none" role="menu">
                    <div class="">
                        <div class="py-1" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900 outline-none", Not Active: "text-gray-700" -->
                            <a href="#" class="block px-4 py-2 text-base text-gray-700 hover:bg-slate-300" role="menuitem" tabindex="-1" id="menu-item-0">Mission/Vision</a>
                            <a href="#" class="block px-4 py-2 text-base text-gray-700 hover:bg-slate-300" role="menuitem" tabindex="-1" id="menu-item-1">History</a>
                            <a href="#" class="block px-4 py-2 text-base text-gray-700 hover:bg-slate-300" role="menuitem" tabindex="-1" id="menu-item-2">Organizational Structure</a>
                            <a href="#" class="block px-4 py-2 text-base text-gray-700 hover:bg-slate-300" role="menuitem" tabindex="-1" id="menu-item-3">Quality Policy Statement</a>
                            <div id="purok-content" class="flex items-center hover:bg-slate-300">
                                <button  class="block pl-4 py-2 text-base text-gray-700" role="menuitem" tabindex="-1" id="menu-item-3">Barangay Purok(s)</button>
                                <svg class="ml-2 h-4 w-4 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div> 
                        <div id="purok-dropdown" class="hidden absolute w-32 right-0 z-10 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none" role="menu">
                            <div class="py-1" role="none">
                                <?php
                                

                                $query = mysqli_query($conn, "SELECT prk FROM purok");

                                while ($row = mysqli_fetch_array($query)) {
                                    // Dynamically generate the href with the prk query parameter
                                    echo '<a href="' . BASE_URL . '/purok/?prk=' . $row['prk'] . '" class="block px-4 py-2 text-sm text-gray-700 hover:bg-slate-300" role="menuitem" tabindex="-1">Purok ' . ($row['prk']) . '</a>';
                                }
                                ?>
                            </div>
                        </div>    
                    </div>
                        
                </div>
                    
                
            </div>
            <a href="#"
                class="text-base font-semibold text-gray-900 hover:text-slate-600">Projects/Programs</a>
            <a href="#"
                class="text-base font-semibold text-gray-900 hover:text-slate-600">Contact</a>
            <a href="<?= BASE_URL ?>/request_document/"
                class="text-base font-semibold text-gray-900 hover:text-slate-600">Request Document</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="account login/"
                class="text-base font-semibold text-gray-900">Log in
                <span aria-hidden="true">&rarr;</span></a>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="hidden" id="mobile-menu" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50" id="backdrop"></div>
        <div
            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-slate-200 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto"
                        src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
                        alt>
                </a>
                <button type="button" id="close-menu"
                    class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Prodasduct</a>

                        <div id="content-service" class="relative">
                            <a href="#"
                                class="-mx-3 rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50 flex items-center">
                                Features
                                <svg class="ml-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>
                        </div>
                        <div id="service-dropdown" class="relative hidden left-0 z-10 w-auto origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none" role="menu">
                            <div class="py-1" role="none">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-1">Support</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-2">License</a>
                                <form method="POST" action="#" role="none">
                                    <button type="submit" class="block w-full px-4 py-2 text-left text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                                </form>
                            </div>
                        </div>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
                    </div>
                    <div class="py-6">
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log
                            in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>