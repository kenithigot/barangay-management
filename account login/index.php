<!DOCTYPE html>
<html lang="en">

<head>
    <title>Account Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("../includes/config.php") ?>
    <link type="text/css" href="<?php echo BASE_URL ?>/src/output.css" rel="stylesheet">

    <!-- Import Google Font: Raleway -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="font-sans">
    <div class="flex flex-col lg:flex-row h-screen">
        <div class="hidden lg:flex flex-1 justify-center items-center bg-blue-100">
            <img src="../src/imgs-vid/logo.png" alt="Logo" class="Logo">
        </div>
        <div class="flex flex-1 justify-center items-center">
            <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-lg">
                <div class="p-6 lg:p-7">
                    <div class="text-center pb-3">
                        <div class="inline-block lg:hidden flex-1 justify-center items-center bg-slate-200 rounded-lg">
                            <img src="../src/imgs-vid/logo.png" alt="Logo" class="h-16">
                        </div>
                        <h1 class="block text-2xl font-bold text-gray-800">Barangay Labuay</h1>
                    </div>
                    <div class="mt-5">

                        <!-- Form -->
                        <form>
                            <div class="grid gap-y-4">
                                <!-- Form Group -->
                                <div>
                                    <label for="email" class="block text-sm mb-2">Email address</label>
                                    <div class="relative">
                                        <input type="email" id="email" name="email" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 focus:outline-none disabled:opacity-50 disabled:pointer-events-none" required aria-describedby="email-error">
                                        <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                            <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="hidden text-xs text-red-600 mt-2" id="email-error">Please include a valid email address so we can get back to you</p>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="mb-4">
                                    <div class="flex justify-between items-center">
                                        <label for="password" class="block text-sm mb-2">Password</label>
                                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:underline font-medium" href="../dashboard/">Forgot password?</a>
                                    </div>
                                    <div class="relative">
                                        <input type="password" id="password" name="password" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 focus:outline-none disabled:opacity-50 disabled:pointer-events-none" required aria-describedby="password-error">
                                        <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                            <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="hidden text-xs text-red-600 mt-2" id="password-error">8+ characters required</p>
                                </div>
                                <!-- End Form Group -->

                                <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Sign in</button>

                                <div class="pt-4 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6">Or</div>
                                <div>
                                    <p class="text-sm text-gray-600 ">
                                        Don't have an account yet?
                                        <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium " href="../register/">
                                            Sign up here
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>