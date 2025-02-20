<div id="hs-display-acc" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-display-acc-label">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all lg:max-w-xl lg:w-full m-3 lg:mx-auto">
        <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
            <div class="flex justify-between items-center py-3 px-4 border-b">
                <h3 id="hs-display-acc-label" class="font-bold text-gray-800 ">
                    View - Edit/Delete User
                </h3>
                <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#hs-display-acc">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
           
            <div class="p-4 overflow-y-auto">
                <form action="" method="POST">
                    <input type="hidden" name="id" class="id" id="id">
                    <div class="space-y-5">
                        <div class="flex justify-center sm:justify-start">
                            <a href="#" id="edit-button" type="submit" class="py-1 px-3 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-gray-200 bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                                Edit
                            </a>
                            <button type="button" name="btn-viewDataDelete" id="btn-viewDataDelete" data-id="<?= $userId ?>" class="py-1 px-3 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-red-700 text-white hover:bg-red-800 focus:outline-none focus:bg-red-900 disabled:opacity-50 disabled:pointer-events-none mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="size-4" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                </svg>
                                Delete
                            </button>
                        </div>
                        
                        <div class="">
                            <label for="view_fullName" class="text-base font-medium text-gray-800">
                                Full Name
                            </label>
                            <input required id="view_fullName" name="view_fullName" type="text" class=" py-1 pe-9 w-full border-b border-gray-200 text-lg sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                        </div>
                        
                        <div class="">
                            <label for="view_address" class="text-base font-medium text-gray-800">
                                Address
                            </label>
                            <input required id="view_address" name="view_address" type="text" class=" py-1 pe-9 w-full border-b border-gray-200 text-lg sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                        </div>
                        <div class="flex">
                            <div class="mr-3 flex-1">
                                <label for="view_contactNum" class="text-base font-medium text-gray-800">
                                    Contact Number
                                </label>
                                <input required id="view_contactNum" name="view_contactNum" type="text" class=" py-1 pe-9 w-full border-b border-gray-200 text-lg sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                            </div>
                            <div class="flex-1">
                                <label for="view_userRole" class="text-base font-medium text-gray-800">
                                    User Role
                                </label>
                                <input required id="view_userRole" name="view_userRole" type="text" class=" py-1 pe-9 w-full border-b border-gray-200 text-lg sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                            </div>
                        </div>
                        <div class="">
                            <label for="view_emailAddress" class="text-base font-medium text-gray-800">
                                Email Address
                            </label>
                            <input required id="view_emailAddress" name="view_emailAddress" type="text" class=" py-1 pe-9 w-full border-b border-gray-200 text-lg sm:text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none placeholder-gray-800" readonly>
                        </div>
                    </div>
                </form>
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-display-acc">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>