<!DOCTYPE html>
<html lang="en">

<head>
    <title>Residents Record</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Import Google Font: Raleway -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../src/output.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9fc27c8cb3.js" crossorigin="anonymous"></script>
    
</head>

    <body class="font-sans">
       
        <div class="flex justify-end lg:justify-start bg-slate-600 w-screen h-20 p-4 pl-72">
            <button type="button" id="btn-sidebarShrink" class="lg:hidden">
                <i class="fa-solid fa-bars text-white"></i>
            </button>
        </div>

        <div class="flex">
            <div id="sidebar" class="fixed top-0 left-0 inline-flex flex-col shadow-2xl bg-slate-300 h-screen px-3 py-3 overflow-y-auto min-w-[270px]">
                <div class="flex justify-center">
                    <img src="<?php BASE_URL ?>../src/imgs-vid/logo.png" alt="Dashboard Logo" class="w-32">
                </div>
                <div>
                    <ul class="text-base font-semibold mt-4 space-y-2" id="sidebar-menu">
                        <li class="mb-6">
                            <button class="w-full">
                                <div class="flex justify-between items-center">
                                    <div class="flex flex-row items-center">
                                        <img class="w-12 m-0" src="../src/imgs-vid/unknownUser.png" alt="Default User Image">
                                        <div class="px-2">
                                            <h3 class="text-sm">Capt. Name</h3>
                                            <h3 class="text-xs">Administrator</h3>
                                        </div>
                                    </div>
                                    <i class="fa-solid fa-caret-down text-xs"></i>
                                </div>
                            </button>
                        </li>
                        <li id="dashboard-link" class="border rounded-md border-slate-300 hover:bg-slate-600 hover:text-slate-100 px-3 py-2 transition-all duration-500 ease-in-out">
                            <a href="../dashboard/" class="block">
                                <i class="fa-solid fa-chart-simple pr-3"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li id="officials-staff-link" class="border rounded-md border-slate-300 hover:bg-slate-600 hover:text-slate-100 px-3 py-2 hover:transition-all hover:duration-500 hover:ease-in-out">
                            <a href="../official and staff/" class="block">
                                <i class="fa-solid fa-user-tie pr-3"></i> Officials and Staff
                            </a>
                        </li>
                        <li id="residents-record-link" class="border rounded-md border-slate-300 hover:bg-slate-600 hover:text-slate-100 px-3 py-2 hover:transition-all hover:duration-500 hover:ease-in-out">
                            <a href="../residents record" class="block">
                                <i class="fa-solid fa-layer-group pr-3"></i> Residents Record
                            </a>
                        </li>
                        <li id="certification-link" class="border rounded-md border-slate-300 hover:bg-slate-600 hover:text-slate-100 px-3 py-2 hover:transition-all hover:duration-500 hover:ease-in-out">
                            <button class="w-full" id="btn-certDropdown">
                                <div class="">
                                    <div class="flex justify-between items-center">
                                        <span>
                                            <i class="fa-solid fa-folder-open pr-3"></i>Certifications
                                        </span>
                                        <i class="fa-solid fa-caret-down text-xs"></i>
                                    </div>
                                    <ul class="hidden flex-col text-sm pl-4 text-left" id="certDropdownList">
                                        <li>
                                            <a href="../certifications/">
                                                <h4 class="py-2 hover:transition-all hover:duration-500 hover:ease-in-out hover:text-slate-300"><i class="fa-solid fa-minus mr-1"></i> Certificates</h4>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../certifications/barangay-cert.php">
                                                <h4 class="py-2 hover:transition-all hover:duration-500 hover:ease-in-out hover:text-slate-300"><i class="fa-solid fa-minus mr-1"></i> Barangay Certifications</h4>
                                            </a>
                                        </li>
                                        <li id="certIndigent-link">
                                            <a href="">
                                                <h4 class="py-2 hover:transition-all hover:duration-500 hover:ease-in-out hover:text-slate-300"><i class="fa-solid fa-minus mr-1"></i> Certificate of Indigency</h4>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <h4 class="py-2 hover:transition-all hover:duration-500 hover:ease-in-out hover:text-slate-300"><i class="fa-solid fa-minus mr-1"></i> Business Clearance</h4>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </button>
                        </li>
                        <li class=" border rounded-md border-slate-300 hover:bg-slate-600 hover:text-slate-100 px-3 py-2 hover:transition-all hover:duration-500 hover:ease-in-out">
                            <a href="" class="block">
                                <i class="fa-solid fa-suitcase pr-3"></i> Blotter Record
                            </a>
                        </li>
                        <li class="border rounded-md border-slate-300 hover:bg-slate-600 hover:text-slate-100 px-3 py-2 hover:transition-all hover:duration-500 hover:ease-in-out">
                            <a href="" class="block">
                                <i class="fa-solid fa-file pr-3"></i> Requested Document
                            </a>
                        </li>
                        <li class="border rounded-md border-slate-300 hover:bg-slate-600 hover:text-slate-100 px-3 py-2 hover:transition-all hover:duration-500 hover:ease-in-out">
                            <a href="" class="block">
                                <i class="fa-solid fa-house pr-3"></i> Household Record
                            </a>
                        </li>
                        <li class="border rounded-md border-slate-300 hover:bg-slate-600 hover:text-slate-100 px-3 py-2 hover:transition-all hover:duration-500 hover:ease-in-out">
                            <a href="" class="block">
                                <i class="fa-solid fa-cash-register pr-3"></i> Transaction Revenue
                            </a>
                        </li>
                        <li class="border rounded-md border-slate-300 hover:bg-slate-600 hover:text-slate-100 px-3 py-2 hover:transition-all hover:duration-500 hover:ease-in-out">
                            <a href="" class="block">
                                <i class="fa-solid fa-gear pr-3"></i> Settings
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
    </body>
    
</html>