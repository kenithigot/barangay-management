<!doctype html>
<html lang="en">

<head>
    <title>Barangay Labuay - Official Website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/output.css">
    <!-- Import Google Font: Raleway -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="font-sans">
    <?php require 'includes/header.php' ?>

    <div class="w-full h-screen overflow-hidden relative">
        <video src="src/imgs-vid/labuay-vid.mp4" autoplay muted loop class="w-full h-full object-cover"></video>
        <div class="absolute inset-0 flex justify-center items-center text-center font-extrabold px-4">
            <div class="flex space-y-3">
                <span class="text-4xl lg:text-7xl lg:pb-16 bg-gradient-to-r from-slate-500 via-stone-700 to-lime-900 text-transparent bg-clip-text tracking-widest">Welcome to Barangay Labuay</span>
            </div>
        </div>
    </div>
    <div class="relative container mx-auto w-full z-10 bg-white shadow-lg ring-1 ring-black/5 focus:outline-none -mt-32 lg:-mt-16 rounded-md origin-top-right px-4 py-8">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 text-center">
            <div class="flex flex-col items-center justify-center">
                <div class="text-3xl">
                    <i class="fa-solid fa-building text-slate-500 pb-2"></i>
                </div>
                <h4 class="text-base font-medium text-gray-900">
                    <span class="text-lg font-semibold">50<sub>+</sub></span> Years of Foundation
                </h4>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="text-3xl">
                    <i class="fa-solid fa-map text-slate-500 pb-2"></i>
                </div>
                <h4 class="text-base font-medium text-gray-900">
                    <span class="text-lg font-semibold">12k<sub>+</sub></span> Area Hectares
                </h4>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="text-3xl">
                    <i class="fa-solid fa-users text-slate-500 pb-2"></i>
                </div>
                <h4 class="text-base font-medium text-gray-900">
                    <span class="text-lg font-semibold">21k<sub>+</sub></span> People in Barangay
                </h4>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="text-3xl">
                    <i class="fa-solid fa-list-check text-slate-500 pb-2"></i>
                </div>
                <h4 class="text-base font-medium text-gray-900">
                    <span class="text-lg font-semibold">100<sub>+</sub></span> Successful Programs/Undergoing
                </h4>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="text-3xl">
                    <i class="fa-solid fa-folder text-slate-500 pb-2"></i>
                </div>
                <h4 class="text-base font-medium text-gray-900">
                    <span class="text-lg font-semibold">10k<sub>+</sub></span> Processed Documents
                </h4>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="text-3xl">
                    <i class="fa-solid fa-chart-simple text-slate-500 pb-2"></i>
                </div>
                <h4 class="text-base font-medium text-gray-900">
                    <span class="text-lg font-semibold ">12<sub>+</sub></span> Barangay Data Visualization
                </h4>
            </div>
        </div>
    </div>

    <div class="p-12">
        <div class="flex flex-col gap-9 lg:flex-row">
            <div class="flex-col basis-full lg:basis-1/3 shrink">
                <img class="rounded-md" src="src/imgs-vid/content1.jpg" alt="Content 1">
                <div class="flex justify-end space-x-3 py-8">
                    <div class="h-[6px] w-10 bg-slate-500 rounded-sm"></div>
                    <div class="h-[6px] w-10 bg-slate-500 rounded-sm"></div>
                    <div class="h-[6px] w-10 bg-slate-500 rounded-sm"></div>
                    <div class="h-[6px] w-10 bg-slate-500 rounded-sm"></div>
                </div>
            </div>
            <div class="flex-col basis-2/3">
                <div class="py-12 pl-12">
                    <div class="flex space-x-3 pb-4">
                        <div class="h-[6px] w-10 bg-slate-500 rounded-sm"></div>
                        <div class="h-[6px] w-10 bg-slate-500 rounded-sm"></div>
                        <div class="h-[6px] w-10 bg-slate-500 rounded-sm"></div>
                        <div class="h-[6px] w-10 bg-slate-500 rounded-sm"></div>
                    </div>

                    <h2 class="text-4xl font-bold"><i>If you change your city, you're changing the world.</i></h2>
                    <p class="text-lg py-8 font-semibold">Barangay Labuay is determined to address everything that hinder its way to be the best.</p>

                    <div class="w-full max-w-2xl mx-auto">
                        <!-- Tab Buttons -->
                        <div class="grid grid-cols-3 text-center cursor-pointer">
                            <div data-tab="mission" class="tab-button border border-slate-500 hover:bg-slate-300 hover:border-slate-300 rounded-tl-md rounded-bl-md">
                                <button class="py-4 font-semibold">
                                    Mission
                                </button>
                            </div>
                            <div data-tab="vision" class="tab-button border border-slate-500 hover:bg-slate-300 hover:border-slate-300">
                                <button class="py-4 font-semibold">
                                    Vision
                                </button>
                            </div>
                            <div data-tab="goal" class="tab-button border bg-slate-500 border-slate-500 hover:bg-slate-300 hover:border-slate-300  rounded-tr-md rounded-br-md">
                                <button class="py-4 font-semibold active">
                                    Goal
                                </button>
                            </div>
                        </div>
                        <div class="-mt-2 h-auto">
                            <!-- Tab Content -->
                            <div class="hidden p-8 rounded-md tab-content" id="mission">
                                <p class="text-base text-justify font-semibold leading-loose indent-10">A Barangay that is God-centered, competent, orderly, honest, peaceful, credible, gender responsive and abides the Code of Conduct.</p>
                            </div>
                            <div class="hidden p-8 rounded-md tab-content" id="vision">
                                <p class="text-base text-justify font-semibold leading-loose indent-10">We exercise transparency, integrity, professionalism, efficiency and most of all we conduct free services because as Public Servants. We are accountable to the residents of Barangay Labuay.</p>
                            </div>
                            <div class="p-8 rounded-md tab-content" id="goal">
                                <p class="text-base text-justify font-semibold leading-loose indent-10">Barangay Labuay aims to be efficient in serving the public because Public Office is a Public Trust and must at all times be accountable to the people, serve them with utmost responsibility, loyalty and efficiency, act with patriotism and justice and lead modest lives. Thus, Barangay Labuay is determined to address everything that hinder its way to be the best.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
            <div class="absolute inset-0 -z-10 overflow-hidden">
                <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
                    <defs>
                        <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                            <path d="M100 200V.5M.5 .5H200" fill="none" />
                        </pattern>
                    </defs>
                    <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                        <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
                    </svg>
                    <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
                </svg>
            </div>
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
                <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                    <div class="lg:pr-4">
                        <div class="lg:max-w-lg">
                            <p class="text-lg/7 font-semibold text-indigo-600">Barangay</p>
                            <h1 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Labuay</h1>
                            <p class="mt-6 text-xl/8 text-gray-700 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
                    <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" src="src/imgs-vid/content2.jpg" alt="Content Banner">
                </div>
                <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                    <div class="lg:pr-4">
                        <div class="max-w-xl text-base/7 text-gray-700 lg:max-w-lg">
                            <p class="text-justify">Netus condimentum libero aenean potenti eleifend molestie egestas. Placerat dis lacus maecenas dis felis ultrices. Laoreet fusce consectetur phasellus odio diam, nibh aliquet. Placerat efficitur turpis dis; curabitur senectus duis. Sagittis praesent ligula et ut; ornare efficitur pretium eros. Cursus sit vehicula auctor; pellentesque maecenas mauris. Rutrum egestas dignissim ut vivamus luctus vel ipsum odio?</p>
                            <ul role="list" class="mt-8 space-y-8 text-gray-600">
                                <li class="flex gap-x-3">
                                    <i class="fa-solid fa-thumbtack mt-1 size-5 flex-none text-indigo-600"></i>
                                    <span class="text-justify"><strong class="font-semibold text-gray-900">Barangay Patrol.</strong> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</span>
                                </li>
                                <li class="flex gap-x-3">
                                    <i class="fa-solid fa-thumbtack mt-1 size-5 flex-none text-indigo-600"></i>
                                    <span class="text-justify"><strong class="font-semibold text-gray-900">Barangay Fiesta.</strong> Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</span>
                                </li>
                                <li class="flex gap-x-3">
                                    <i class="fa-solid fa-thumbtack mt-1 size-5 flex-none text-indigo-600"></i>
                                    <span class="text-justify"><strong class="font-semibold text-gray-900">Barangay Festival.</strong> Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</span>
                                </li>
                            </ul>
                            <p class="mt-8 text-justify">Per lobortis volutpat condimentum dictum lectus augue. Torquent morbi molestie egestas, leo efficitur at. Senectus quam auctor conubia varius quam. Blandit condimentum aliquet magna posuere scelerisque dis. Eget risus bibendum ligula, odio consequat aenean. Sagittis tellus habitasse porttitor nam efficitur.</p>
                            <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">Want to Learn More? </h2>
                            <p class="mt-6 text-justify">Venenatis nec nibh donec dolor tortor sapien faucibus curabitur. Mus nullam vivamus felis lobortis efficitur quisque. Fusce ac congue egestas sodales finibus. Purus quisque nulla vitae tempor nascetur est libero. Quis duis aenean elementum sociosqu phasellus sollicitudin lacus. Elit donec lorem maecenas odio metus. Nulla orci montes facilisi ad nostra pretium ante malesuada.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-slate-200 py-8" style="background-image:url('src/imgs-vid/official-bg.jpg'); background-size: cover; background-position: center;">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center pb-4">Officials</h2>

        
            <div class="flex justify-center items-center px-8 py-10 w-full">
                <div class="shadow-xl py-8 px-12 rounded-lg">
                    <img class="rounded-full size-60 object-cover" src="src/imgs-vid/profile-woman.jpg" alt="Official Image">
                    <div class="text-center pt-4">
                        <h3 class="text-lg/7 font-semibold tracking-tight text-gray-900">Person 1</h3>
                        <p class="text-base/6 font-semibold text-indigo-600">Barangay Captain</p>
                    </div> 
                </div>       
            </div>
        
            <ul role="list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-x-2 lg:gap-x-12">
                <li class=" py-10 w-full">
                    <div class="flex justify-center items-start">
                        <div class="shadow-xl py-8 px-12 rounded-lg">
                            <img class="rounded-full size-60 object-cover" src="src/imgs-vid/profile-man.jpg" alt="Official Image">
                            <div class="text-center pt-4">
                                <h3 class="text-lg/7 font-semibold tracking-tight text-gray-900">Person 1</h3>
                                <p class="text-base/6 font-semibold text-indigo-600">Councilor</p>
                            </div> 
                        </div>    
                    </div>
                </li>
                <li class="py-10 w-full">
                    <div class="flex justify-center items-start">
                        <div class="shadow-xl py-8 px-12 rounded-lg">
                            <img class="rounded-full size-60 object-cover" src="src/imgs-vid/profile-woman.jpg" alt="Official Image">
                            <div class="text-center pt-4">
                                <h3 class="text-lg/7 font-semibold tracking-tight text-gray-900">Person 1</h3>
                            <p class="text-base/6 font-semibold text-indigo-600">Councilor</p>
                            </div> 
                        </div>    
                    </div>
                </li>
                <li class="py-10 w-full">
                    <div class="flex justify-center items-start">
                        <div class="shadow-xl py-8 px-12 rounded-lg">
                            <img class="rounded-full size-60 object-cover" src="src/imgs-vid/profile-man.jpg" alt="Official Image">
                            <div class="text-center pt-4">
                                <h3 class="text-lg/7 font-semibold tracking-tight text-gray-900">Person 1</h3>
                            <p class="text-base/6 font-semibold text-indigo-600">Councilor</p>
                            </div> 
                        </div>    
                    </div>
                </li>
                <li class="py-10 w-full">
                    <div class="flex justify-center items-start">
                        <div class="shadow-xl py-8 px-12 rounded-lg">
                            <img class="rounded-full size-60 object-cover" src="src/imgs-vid/profile-woman.jpg" alt="Official Image">
                            <div class="text-center pt-4">
                                <h3 class="text-lg/7 font-semibold tracking-tight text-gray-900">Person 1</h3>
                            <p class="text-base/6 font-semibold text-indigo-600">Councilor</p>
                            </div> 
                        </div>    
                    </div>
                </li>
                <li class="py-10 w-full">
                    <div class="flex justify-center items-start">
                        <div class="shadow-xl py-8 px-12 rounded-lg">
                            <img class="rounded-full size-60 object-cover" src="src/imgs-vid/profile-woman.jpg" alt="Official Image">
                            <div class="text-center pt-4">
                                <h3 class="text-lg/7 font-semibold tracking-tight text-gray-900">Person 1</h3>
                            <p class="text-base/6 font-semibold text-indigo-600">Councilor</p>
                            </div> 
                        </div>    
                    </div>
                </li>
                <li class="py-10 w-full">
                    <div class="flex justify-center items-start">
                        <div class="shadow-xl py-8 px-12 rounded-lg">
                            <img class="rounded-full size-60 object-cover" src="src/imgs-vid/profile-man.jpg" alt="Official Image">
                            <div class="text-center pt-4">
                                <h3 class="text-lg/7 font-semibold tracking-tight text-gray-900">Person 1</h3>
                            <p class="text-base/6 font-semibold text-indigo-600">Councilor</p>
                            </div> 
                        </div>    
                    </div>
                </li>
                <li class="py-10 w-full">
                    <div class="flex justify-center items-start">
                        <div class="shadow-xl py-8 px-12 rounded-lg">
                            <img class="rounded-full size-60 object-cover" src="src/imgs-vid/profile-man.jpg" alt="Official Image">
                            <div class="text-center pt-4">
                                <h3 class="text-lg/7 font-semibold tracking-tight text-gray-900">Person 1</h3>
                            <p class="text-base/6 font-semibold text-indigo-600">Councilor</p>
                            </div> 
                        </div>    
                    </div>
                </li>
                <li class="py-10 w-full">
                    <div class="flex justify-center items-start">
                        <div class="shadow-xl py-8 px-12 rounded-lg">
                            <img class="rounded-full size-60 object-cover" src="src/imgs-vid/profile-woman.jpg" alt="Official Image">
                            <div class="text-center pt-4">
                                <h3 class="text-lg/7 font-semibold tracking-tight text-gray-900">Person 1</h3>
                            <p class="text-base/6 font-semibold text-indigo-600">SK Chairperson</p>
                            </div> 
                        </div>    
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
    <script src="<?php BASE_URL ?>src/script.js"></script>
</body>

</html>