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
    <?php
    include __DIR__ . '/includes/config.php';
    include 'includes/header.php';
    ?>

    <div class="w-full h-screen overflow-hidden relative">
        <video src="src/imgs-vid/labuay-vid.mp4" autoplay muted loop class="w-full h-full object-cover"></video>
        <div class="absolute inset-0 flex justify-center items-center text-center font-extrabold px-4">
            <div class="flex space-y-3">
                <span class="text-4xl lg:text-7xl lg:pb-16 bg-gradient-to-r from-slate-500 via-stone-700 to-lime-900 text-transparent bg-clip-text tracking-widest">Welcome to Barangay Labuay</span>
            </div>
        </div>
    </div>
    <div class="relative container mx-auto w-full z-10 bg-white shadow-lg ring-1 ring-black/5 focus:outline-none -mt-32 lg:-mt-16 rounded-md origin-top-right px-4 py-8">
        <div class="grid grid-cols-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 text-center">
            <div class="flex flex-col items-center justify-center">
                <div class="text-xl lg:text-3xl">
                    <i class="fa-solid fa-building text-slate-500 pb-2"></i>
                </div>
                <h4 class="text-sm lg:text-base font-medium text-gray-900">
                    <span class="lg:text-lg font-semibold">50<sub>+</sub></span> Years of Foundation
                </h4>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="text-xl lg:text-3xl">
                    <i class="fa-solid fa-map text-slate-500 pb-2"></i>
                </div>
                <h4 class="text-sm lg:text-base font-medium text-gray-900">
                    <span class="lg:text-lg font-semibold">12k<sub>+</sub></span> Area Hectares
                </h4>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="text-xl lg:text-3xl">
                    <i class="fa-solid fa-users text-slate-500 pb-2"></i>
                </div>
                <h4 class="text-sm lg:text-base font-medium text-gray-900">
                    <span class="lg:text-lg font-semibold">21k<sub>+</sub></span> People in Barangay
                </h4>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="text-xl lg:text-3xl">
                    <i class="fa-solid fa-list-check text-slate-500 pb-2"></i>
                </div>
                <h4 class="text-sm lg:text-base font-medium text-gray-900">
                    <span class="lg:text-lg font-semibold">100<sub>+</sub></span> Successful Programs/Undergoing
                </h4>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="text-xl lg:text-3xl">
                    <i class="fa-solid fa-folder text-slate-500 pb-2"></i>
                </div>
                <h4 class="text-sm lg:text-base font-medium text-gray-900">
                    <span class="lg:text-lg font-semibold">10k<sub>+</sub></span> Processed Documents
                </h4>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="text-xl lg:text-3xl">
                    <i class="fa-solid fa-chart-simple text-slate-500 pb-2"></i>
                </div>
                <h4 class="text-sm lg:text-base font-medium text-gray-900">
                    <span class="lg:text-lg font-semibold ">12<sub>+</sub></span> Barangay Data Visualization
                </h4>
            </div>
        </div>
    </div>

    <div class="sm:p-1 lg:p-12">
        <div class="flex flex-col gap-9 lg:flex-row">
            <div class="flex-col basis-full lg:basis-1/3 shrink">
                <img class="sm:rounded-md md:rounded-md lg:rounded-md" src="src/imgs-vid/content1.jpg" alt="Content 1">
                <div class="hidden lg:flex justify-end space-x-3 py-8">
                    <div class="h-[6px] w-10 bg-slate-500 rounded-sm"></div>
                    <div class="h-[6px] w-10 bg-slate-500 rounded-sm"></div>
                    <div class="h-[6px] w-10 bg-slate-500 rounded-sm"></div>
                    <div class="h-[6px] w-10 bg-slate-500 rounded-sm"></div>
                </div>
            </div>
            <div class="flex-col basis-2/3" id="missionTab">
                <div class="lg:py-12 px-6 sm:px-6 md:px-4 lg:px-0 lg:pl-12">
                    <div class="flex space-x-3 pb-4">
                        <div class="h-[6px] w-10 bg-slate-500 rounded-sm"></div>
                        <div class="h-[6px] w-10 bg-slate-500 rounded-sm"></div>
                        <div class="h-[6px] w-10 bg-slate-500 rounded-sm"></div>
                        <div class="h-[6px] w-10 bg-slate-500 rounded-sm"></div>
                    </div>

                    <h2 class="text-xl sm:text-xl md:text-2xl lg:text-4xl font-bold"><i>If you change your city, you're changing the world.</i></h2>
                    <p class="text-sm md:text-lg lg:text-lg py-4 sm:py-6 md:py-8 lg:py-8 font-semibold text-justify">Barangay Labuay is determined to address everything that hinder its way to be the best.</p>

                    <div class="w-full lg:max-w-2xl mx-auto">
                        <!-- Tab Buttons -->
                        <div class="grid grid-cols-3 text-center cursor-pointer">
                            <div data-tab="mission" class="tab-button text-gray-900 border border-slate-500 hover:bg-slate-300 hover:border-slate-300 rounded-tl-md rounded-bl-md">
                                <button class="py-4 font-semibold">
                                    Mission
                                </button>
                            </div>
                            <div data-tab="vision" class="tab-button text-gray-900 border border-slate-500 hover:bg-slate-300 hover:border-slate-300">
                                <button class="py-4 font-semibold">
                                    Vision
                                </button>
                            </div>
                            <div data-tab="goal" class="tab-button text-gray-900 border bg-slate-500 border-slate-500 hover:bg-slate-300 hover:border-slate-300  rounded-tr-md rounded-br-md">
                                <button class="py-4 font-semibold active">
                                    Goal
                                </button>
                            </div>
                        </div>
                        <div class="-mt-2 h-auto">
                            <!-- Tab Content -->
                            <div class="hidden py-8 lg:px-8 rounded-md tab-content" id="mission">
                                <p class="text-base text-justify font-semibold leading-loose indent-10 text-gray-900">A Barangay that is God-centered, competent, orderly, honest, peaceful, credible, gender responsive and abides the Code of Conduct.</p>
                            </div>
                            <div class="hidden py-8 lg:px-8 rounded-md tab-content" id="vision">
                                <p class="text-base text-justify font-semibold leading-loose indent-10 text-gray-900">We exercise transparency, integrity, professionalism, efficiency and most of all we conduct free services because as Public Servants. We are accountable to the residents of Barangay Labuay.</p>
                            </div>
                            <div class="py-8 rounded-md tab-content" id="goal">
                                <p class="text-base text-justify font-semibold leading-loose indent-10 text-gray-900">Barangay Labuay aims to be efficient in serving the public because Public Office is a Public Trust and must at all times be accountable to the people, serve them with utmost responsibility, loyalty and efficiency, act with patriotism and justice and lead modest lives. Thus, Barangay Labuay is determined to address everything that hinder its way to be the best.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="relative isolate overflow-hidden bg-white px-6 sm:py-12 md:py-20 lg:py-32 lg:overflow-visible lg:px-0">
            <div id="historyTab" class="absolute inset-0 -z-10 overflow-hidden">
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
                <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-4">
                    <div class="lg:pr-4">
                        <div class="lg:max-w-lg">
                            <p class="text-lg/7 font-semibold text-indigo-600">Barangay</p>
                            <h1 class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Labuay</h1>
                            <p class="mt-6 text-lg/8 lg:text-xl/8 text-gray-700 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="-ml-12 -mt-12 sm:p-12 md:p-12 lg:p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
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
                            <h2 class="text-center lg:text-start mt-8 sm:mt-14 md:mt-14 lg:mt-16 text-2xl font-bold tracking-tight text-gray-900">Want to Learn More? </h2>
                            <p id="officialTab" class="mt-4 sm:mt-6 lg:mt-6 text-justify pb-4">Venenatis nec nibh donec dolor tortor sapien faucibus curabitur. Mus nullam vivamus felis lobortis efficitur quisque. Fusce ac congue egestas sodales finibus. Purus quisque nulla vitae tempor nascetur est libero. Quis duis aenean elementum sociosqu phasellus sollicitudin lacus. Elit donec lorem maecenas odio metus. Nulla orci montes facilisi ad nostra pretium ante malesuada.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-slate-500 py-2 lg:py-8 pb-32">
        <div class="container mx-auto">
            <div class="py-8 sm:py-12 md:py-12 lg:py-12">
                <h2 class="text-center tracking-wide mt-2 text-pretty text-4xl font-semibold sm:text-5xl uppercase text-slate-100">Officials</h2>
            </div>
            <div class="flex justify-center items-center">
                <div class="px-4 lg:px-52 sm:py-10 md:py-14 lg:py-16">
                    <p class="text-center lg:text-lg text-slate-100 ">Our dedicated barangay officials are committed to serving the community with integrity, transparency, and accountability. They work together to ensure peace, order, and development for all residents.</p>
                    <div class="hidden lg:flex justify-end space-x-3 pt-10">
                        <div class="h-[4px] w-5 bg-slate-100 rounded-sm"></div>
                        <div class="h-[4px] w-5 bg-slate-200 rounded-sm"></div>
                        <div class="h-[4px] w-5 bg-slate-100 rounded-sm"></div>
                        <div class="h-[4px] w-5 bg-slate-200 rounded-sm"></div>
                        <div class="h-[4px] w-5 bg-slate-100 rounded-sm"></div>
                        <div class="h-[4px] w-5 bg-slate-200 rounded-sm"></div>
                    </div>
                </div>
            </div>

            <!-- Slider -->
            <div data-hs-carousel='{
  "loadingClasses": "opacity-0",
  "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer",
  "slidesQty": {
    "xs": 1,
    "md": 2,
    "lg": 3
  }
}' class="relative">
                <div class="hs-carousel w-full overflow-hidden bg-slate-500 rounded-lg">
                    <div class="relative h-auto min-h-[450px] -mx-1">
                        <!-- transition-transform duration-700 -->
                        <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap opacity-0 transition-transform duration-700">
                            <div class="hs-carousel-slide px-1">
                                <?php
                                include 'src/database.php';

                                $sql = "SELECT admin_staff_role.user_type,                                  
                                    admin_staff_account.user_role, 
                                    admin_staff_account.firstName, 
                                    admin_staff_account.lastName, 
                                    admin_staff_account.profile_picture, 
                                    official_ranking.official_classification
                                    FROM admin_staff_account INNER JOIN admin_staff_role 
                                ON admin_staff_role.user_role = admin_staff_account.user_role
                                INNER JOIN official_ranking ON admin_staff_account.official = official_ranking.official
                                WHERE admin_staff_account.user_role = 3 AND admin_staff_account.official = 0";

                                $result = mysqli_query($conn, $sql);

                                if ($result && mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <div class="flex justify-center h-full bg-slate-500 lg:p-6">
                                            <div class="self-center text-sm text-gray-800 transition duration-700">
                                                <div class=" w-full">
                                                    <div class="flex justify-center items-start">
                                                        <div class="shadow-2xl py-4 lg:py-8 px-8 lg:px-12 bg-slate-100 rounded-lg">
                                                            <img class="w-64 h-64 object-cover object-center rounded-full border border-slate-600" src="<?php echo isset($row['profile_picture']) && $row['profile_picture'] != ''
                                                                                                                                                            ? 'src/imgs-vid/' . $row['profile_picture']
                                                                                                                                                            : 'src/imgs-vid/unknownUser.png' ?>" alt="Official Image">
                                                            <div class="text-center pt-4">
                                                                <h3 class="text-lg/7 font-semibold tracking-tight text-gray-900"><?php echo $row['firstName'] . ' ' . $row['lastName'] ?></h3>
                                                                <p class="text-base/6 font-semibold text-indigo-600"><?php echo $row['official_classification'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php }
                                } ?>
                            </div>
                            <?php
                            include 'src/database.php';

                            $sql_result = "SELECT admin_staff_role.user_type,                                  
                                    admin_staff_account.user_role, 
                                    admin_staff_account.firstName, 
                                    admin_staff_account.profile_picture, 
                                    admin_staff_account.lastName, 
                                    official_ranking.official_classification
                                    FROM admin_staff_account INNER JOIN admin_staff_role 
                                ON admin_staff_role.user_role = admin_staff_account.user_role
                                INNER JOIN official_ranking ON admin_staff_account.official = official_ranking.official
                                WHERE admin_staff_account.user_role = 3 AND admin_staff_account.official != 0";

                            $result_query = mysqli_query($conn, $sql_result);

                            if ($result_query && mysqli_num_rows($result_query) > 0) {
                                while ($rows = mysqli_fetch_assoc($result_query)) {
                            ?>
                                    <div class="hs-carousel-slide px-1">
                                        <div class="flex justify-center h-full bg-slate-500 lg:p-6">
                                            <div class="self-center text-sm text-gray-800 transition duration-700">
                                                <div class=" w-full">
                                                    <div class="flex justify-center items-start">
                                                        <div class="shadow-2xl py-4 lg:py-8 px-8 lg:px-12 bg-slate-100 rounded-lg">
                                                            <img class="w-64 h-64 object-cover object-center rounded-full border border-slate-600" src="<?php echo isset($rows['profile_picture']) && $rows['profile_picture'] != ''
                                                                                                                                                            ? 'src/imgs-vid/' . $rows['profile_picture']
                                                                                                                                                            : 'src/imgs-vid/unknownUser.png' ?>" alt="Official Image">
                                                            <div class="text-center pt-4">
                                                                <h3 class="text-lg/7 font-semibold tracking-tight text-gray-900"><?php echo $rows['firstName'] . ' ' . $rows['lastName'] ?></h3>
                                                                <p class="text-base/6 font-semibold text-indigo-600"><?php echo $rows['official_classification'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            } ?>
                            <?php
                            include 'src/database.php';

                            $sql_result = "SELECT admin_staff_role.user_type,                                  
                                    admin_staff_account.user_role, 
                                    admin_staff_account.firstName, 
                                    admin_staff_account.lastName,
                                    admin_staff_account.profile_picture             
                                    FROM admin_staff_account INNER JOIN admin_staff_role 
                                ON admin_staff_role.user_role = admin_staff_account.user_role                  
                                WHERE admin_staff_account.user_role = 4 OR admin_staff_account.user_role = 5;";

                            $result_query = mysqli_query($conn, $sql_result);

                            if ($result_query && mysqli_num_rows($result_query) > 0) {
                                while ($rows = mysqli_fetch_assoc($result_query)) {
                            ?>
                                    <div class="hs-carousel-slide px-1">
                                        <div class="flex justify-center h-full bg-slate-500 lg:p-6">
                                            <div class="self-center text-sm text-gray-800 transition duration-700">
                                                <div class=" w-full">
                                                    <div class="flex justify-center items-start">
                                                        <div class="shadow-2xl py-4 lg:py-8 px-8 lg:px-12 bg-slate-100 rounded-lg">
                                                            <img class="w-64 h-64 object-cover object-center rounded-full border border-slate-600" src="<?php echo isset($rows['profile_picture']) && $rows['profile_picture'] != ''
                                                                                                                                                            ? 'src/imgs-vid/' . $rows['profile_picture']
                                                                                                                                                            : 'src/imgs-vid/unknownUser.png' ?>" alt="Official Image">
                                                            <div class="text-center pt-4">
                                                                <h3 class="text-lg/7 font-semibold tracking-tight text-gray-900"><?php echo $rows['firstName'] . ' ' . $rows['lastName'] ?></h3>
                                                                <p class="text-base/6 font-semibold text-indigo-600"><?php echo $rows['user_type'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>

                <button type="button" class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-20 h-full text-gray-800 hover:bg-gray-800/10 focus:outline-hidden focus:bg-gray-800/10 rounded-s-lg ">
                    <span class="text-2xl" aria-hidden="true">
                        <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg>
                    </span>
                    <span class="sr-only">Previous</span>
                </button>
                <button type="button" class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-20 h-full text-gray-800 hover:bg-gray-800/10 focus:outline-hidden focus:bg-gray-800/10 rounded-e-lg ">
                    <span class="sr-only">Next</span>
                    <span class="text-2xl" aria-hidden="true">
                        <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </span>
                </button>

                <div class="hs-carousel-pagination justify-center absolute bottom-3 start-0 end-0 flex gap-x-2"></div>
            </div>
            <!-- End Slider -->
            <div class="hidden lg:flex space-x-3 px-6 pt-16">
                <div class="h-[6px] w-10 bg-slate-100 rounded-sm"></div>
                <div class="h-[6px] w-10 bg-slate-100 rounded-sm"></div>
                <div class="h-[6px] w-10 bg-slate-100 rounded-sm"></div>
                <div id="projectsTab" class="h-[6px] w-10 bg-slate-100 rounded-sm"></div>
            </div>
        </div>
    </div>
    <div>
        <!-- Masonry Cards -->
        <div class="max-w-8xl px-4 py-10 sm:px-6 lg:px-12 lg:py-20">
            <!-- Grid -->
            <div class="grid sm:grid-cols-12 gap-6">
                <div class="sm:self-start col-span-12 sm:col-span-7 md:col-span-8 lg:col-span-4">
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                        <h2 class="text-center sm:text-startlg:text-startlg:text-startlg:text-start md:text-start lg:text-start tracking-wide mt-2 text-pretty text-4xl font-semibold sm:text-5xl uppercase text-gray-900">Programs & Services</h2>
                        <div class="py-4">
                            <p class="text-gray-700">Offers various programs and services including health and nutrition, peace and order, sanitation, youth development, senior citizen support, and community outreach.</p>
                        </div>
                        <div class="hidden lg:flex justify-end space-x-3 pt-6 px-6">
                            <div class="h-[4px] w-5 bg-slate-500 rounded-sm"></div>
                            <div class="h-[4px] w-5 bg-slate-600 rounded-sm"></div>
                            <div class="h-[4px] w-5 bg-slate-500 rounded-sm"></div>
                            <div class="h-[4px] w-5 bg-slate-600 rounded-sm"></div>
                            <div class="h-[4px] w-5 bg-slate-500 rounded-sm"></div>
                            <div class="h-[4px] w-5 bg-slate-600 rounded-sm"></div>
                        </div>
                    </div>
                </div>
                <div class="sm:self-end col-span-12 sm:col-span-7 md:col-span-8 lg:col-span-5 lg:col-start-5">

                    <!-- Card -->
                    <a class="group relative block rounded-xl overflow-hidden focus:outline-hidden" href="#">
                        <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                            <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover" src="src/imgs-vid/curfew.png" alt="Masonry Cards Image">
                        </div>
                        <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
                            <div class="text-sm font-semibold text-gray-800 rounded-lg bg-white p-4 md:text-xl">
                                Curfew implementation
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="sm:self-end col-span-12 sm:col-span-5 md:col-span-4 lg:col-span-3">
                    <!-- Card -->
                    <a class="group relative block rounded-xl overflow-hidden focus:outline-hidden" href="#">
                        <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                            <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover" src="src/imgs-vid/cleaning.jpg" alt="Masonry Cards Image">
                        </div>
                        <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
                            <div class="text-sm font-semibold text-gray-800 rounded-lg bg-white p-4 md:text-xl">
                                Street Cleaning
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col-span-12 md:col-span-4">
                    <!-- Card -->
                    <a class="group relative block rounded-xl overflow-hidden focus:outline-hidden" href="#">
                        <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                            <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover" src="src/imgs-vid/documents.jpg" alt="Masonry Cards Image">
                        </div>
                        <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
                            <div class="text-sm font-semibold text-gray-800 rounded-lg bg-white p-4 md:text-xl">
                                Endorsements for legal documents
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col-span-12 sm:col-span-6 md:col-span-4">
                    <!-- Card -->
                    <a class="group relative block rounded-xl overflow-hidden focus:outline-hidden" href="#">
                        <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                            <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover" src="src/imgs-vid/registration.jpg" alt="Masonry Cards Image">
                        </div>
                        <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
                            <div class="text-sm font-semibold text-gray-800 rounded-lg bg-white p-4 md:text-xl">
                                Registration and ID issuance
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col-span-12 sm:col-span-6 md:col-span-4">
                    <!-- Card -->
                    <a class="group relative block rounded-xl overflow-hidden focus:outline-hidden" href="#">
                        <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                            <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover" src="src/imgs-vid/training.jpg" Masonry Cards Image">
                        </div>
                        <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
                            <div class="text-sm font-semibold text-gray-800 rounded-lg bg-white p-4 md:text-xl">
                                Livelihood and skills training
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Masonry Cards -->
    </div>

    <div class="pt-2 sm:pt-16 lg:pt-20 sm:pb-8 lg:pb-12">
        <div>
            <h2 class="text-center tracking-wide mt-2 text-pretty text-4xl font-semibold lg:text-5xl uppercase text-gray-900">Location</h2>
        </div>
    </div>
    <div class="px-4 sm:px-4 lg:px-20 py-4">
        <p class="text-center text-gray-700 ">Barangay Labuay is situated in a strategic and accessible area, making it easy for residents and visitors to reach. The location serves as a hub for community services, local governance, and various public activities that support the welfare of its constituents.</p>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1918.474152254374!2d123.9550048387723!3d8.164472062186626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3255a98f27c8183d%3A0xf918ba55ab17d122!2sLabuay%20Barangay%20Hall!5e0!3m2!1sen!2sph!4v1744182381875!5m2!1sen!2sph"
        width="100%" height="800" style="border:0;" allowfullscreen=""
        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>

    <div id="contactTab" class="bg-slate-500 py-2 lg:py-8 pb-32">
        <!-- Comment Form -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="text-center md:pb-8 lg:pb-12">
                <h2 class="text-center tracking-wide mt-2 text-pretty text-4xl font-semibold sm:text-5xl uppercase text-slate-100">Post a comment</h2>
            </div>
            <div class="lg:flex">
                <div class="flex-1 mt-4 p-4 relative z-10 sm:mt-10">
                    <h1 class="text-center lg:text-start tracking-wide lg:mt-12 text-pretty text-2xl font-semibold sm:text-5xl uppercase text-slate-100">We’d Love to Hear from You!</h1>
                    <p class="text-slate-100 py-4 text-sm md:text-lg lg:text-xl sm:py-6 md:py-8 lg:py-8 md:font-semibold lg:font-semibold">Have thoughts, questions, or feedback? Drop a comment below and join the conversation. Your voice matters!</p>
                    <div class="hidden lg:flex justify-end space-x-3 px-6 pt-16">
                        <div class="h-[6px] w-10 bg-slate-100 rounded-sm"></div>
                        <div class="h-[6px] w-10 bg-slate-100 rounded-sm"></div>
                        <div class="h-[6px] w-10 bg-slate-100 rounded-sm"></div>
                        <div id="projectsTab" class="h-[6px] w-10 bg-slate-100 rounded-sm"></div>
                    </div>
                </div>
                <div class="flex-1 px-3 lg:px-10">
                    <!-- Card -->
                    <div class="bg-white border border-gray-200 rounded-xl sm:mt-10 md:mt-2 p-4 md:p-8 lg:p-10">
                        <form>
                            <div class="mb-4 sm:mb-8">
                                <label for="hs-feedback-post-comment-name-1" class="block mb-2 text-sm font-medium ">Full name</label>
                                <input type="text" id="hs-feedback-post-comment-name-1" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 focus:outline-none disabled:opacity-50 disabled:pointer-events-none" placeholder="Full name">
                            </div>

                            <div class="mb-4 sm:mb-8">
                                <label for="hs-feedback-post-comment-email-1" class="block mb-2 text-sm font-medium ">Email address</label>
                                <input type="email" id="hs-feedback-post-comment-email-1" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 focus:outline-none disabled:opacity-50 disabled:pointer-events-none" placeholder="Email address">
                            </div>

                            <div>
                                <label for="hs-feedback-post-comment-textarea-1" class="block mb-2 text-sm font-medium ">Comment</label>
                                <div class="mt-1">
                                    <textarea id="hs-feedback-post-comment-textarea-1" name="hs-feedback-post-comment-textarea-1" rows="3" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 focus:outline-none disabled:opacity-50 disabled:pointer-events-none" placeholder="Leave your comment here..."></textarea>
                                </div>
                            </div>

                            <div class="mt-6 grid">
                                <button type="submit" class="border items-center px-3 py-3 rounded-md text-sm text-white bg-slate-600 hover:bg-slate-500">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Card -->
                </div>
            </div>

        </div>
        <!-- End Comment Form -->
    </div>

    <!-- ========== FOOTER ========== -->
    <footer class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <!-- Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-6 mb-4">
            <div class="col-span-full hidden lg:col-span-1 lg:block">
                <a class="flex-none font-semibold text-xl text-black focus:outline-hidden focus:opacity-80" href="#" aria-label="Barangay Labuay">Barangay Labuay</a>
                <div class="py-2">
                    <img class="h-16 w-auto" src="src/imgs-vid/logo.png" alt="Barangay Logo">
                </div>
            </div>
            <!-- End Col -->

            <div>
                <h4 class="text-xs font-semibold text-gray-900 uppercase">About Us</h4>

                <div class="mt-3 grid space-y-3 text-sm">
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800" href="#missionTab">Mission/Vision</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800" href="#historyTab">History</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800" href="#officialTab">Organizational Structure</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800" href="#">Quality Policy Statement</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800" href="#">Barangay Purok</a></p>
                </div>
            </div>
            <!-- End Col -->

            <div>
                <h4 class="text-xs font-semibold text-gray-900 uppercase">Projects/Programs</h4>

                <div class="mt-3 grid space-y-3 text-sm">
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800" href="#projectsTab">Curfew Implementation</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800" href="#projectsTab">Street Cleaning</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800" href="#projectsTab">Legal Documents</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800" href="#projectsTab">ID Registration</a></p>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800" href="#projectsTab">Training</a></p>
                </div>
            </div>
            <!-- End Col -->

            <div>
                <div>
                    <h4 class="text-xs font-semibold text-gray-900 uppercase">Documents</h4>

                    <div class="mt-3 grid space-y-3 text-sm">
                        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800" href="<?= BASE_URL ?>/request_document/">Request Documents</a></p>
                        <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800" href="#">Track Document Request</a></p>
                    </div>
                </div>
                <div class="py-8">
                    <h4 class="text-xs font-semibold text-gray-900 uppercase py-2">Contact</h4>
                    <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800" href="#">Post a comment</a></p>
                    <input type="text" id="hero-input" name="hero-input" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 focus:outline-none disabled:opacity-50 disabled:pointer-events-none" placeholder="Enter your email">
                </div>
            </div>
        </div>
        <!-- End Grid -->

        <div class="pt-5 mt-5 border-t border-gray-200">
            <div class="">
                <div class="flex items-center justify-center gap-3">
                    <div class="mt-3 text-center">
                        <a class="flex-none font-semibold text-xl text-black focus:outline-hidden focus:opacity-80" href="#" aria-label="Barangay Labuay">Barangay Labuay</a>
                        <p class="mt-1 text-xs sm:text-sm text-gray-600">
                            © 2025 Preline. All rights Reserved.
                        </p>
                    </div>
                </div>
                <!-- End Col -->
            </div>
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->

    <script src="script.js"></script>
    <script src="https://unpkg.com/preline/dist/preline.js"></script>
</body>

</html>