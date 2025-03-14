<!-- Barangay Certificate Modal -->
<div id="hs-barangayCertificate-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-barangayCertificate-label">
    <div class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
        <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
            <div class="flex justify-between items-center py-3 px-4 border-b">
                <h3 id="hs-barangayCertificate-label" class="font-bold text-gray-800">
                    Edit - Barangay Certificate Price
                </h3>
                <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#hs-barangayCertificate-modal">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <form action="" method="POST">
                <div class="p-4 overflow-y-auto">
                    <div class="space-y-3 px-2">
                        <div class="rounded-lg">
                            <label for="barangayCertificate" class="block text-base text-gray-800 font-medium">Barangay Certificate Price</label>
                            <div class="flex rounded-lg shadow-sm">
                                <div class="px-4 inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50">
                                    <span class="text-base text-gray-800">Php</span>
                                </div>                         
                                <input type="number" name="barangayCertPrice" id="barangayCertPrice" value="<?php echo htmlspecialchars($barangayCertPrice); ?>" class="py-2 px-3 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter price">                          
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-barangayCertificate-modal">
                        Close
                    </button>
                    <button type="submit" name="btn-updateBarCert" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-slate-600 text-white hover:bg-slate-500 focus:outline-none focus:bg-slate-500 disabled:opacity-50 disabled:pointer-events-none">
                        Save changes
                    </button>
                </div>
            </form> 
        </div>
    </div>
</div>


<!-- Certificate of Indigency -->
<div id="hs-certificateIndigency-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-certificateIndigency-label">
    <div class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
        <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
            <div class="flex justify-between items-center py-3 px-4 border-b">
                <h3 id="hs-certificateIndigency-label" class="font-bold text-gray-800">
                    Edit - Certificate of Indigency Price
                </h3>
                <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#hs-certificateIndigency-modal">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <form action="" method="POST">
                <div class="p-4 overflow-y-auto">
                    <div class="space-y-3 px-2">
                        <div class="rounded-lg">
                            <label for="certificateIndigency" class="block text-base text-gray-800 font-medium">Certificate of Indigency Price</label>
                            <div class="flex rounded-lg shadow-sm">
                                <div class="px-4 inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50">
                                    <span class="text-base text-gray-800">Php</span>
                                </div>
                                <input type="number" name="certificateIndigency" id="certificateIndigency" value="<?php echo htmlspecialchars($certificateIndigencyPrice); ?>" class="py-2 px-3 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter price">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-certificateIndigency-modal">
                        Close
                    </button>
                    <button type="submit" id="btn-updateIndigency" name="btn-updateIndigency" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-slate-600 text-white hover:bg-slate-500 focus:outline-none focus:bg-slate-500 disabled:opacity-50 disabled:pointer-events-none">
                        Save changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Business Clearance -->
<div id="hs-businessClearance-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-businessClearance-label">
    <div class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
        <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
            <div class="flex justify-between items-center py-3 px-4 border-b">
                <h3 id="hs-businessClearance-label" class="font-bold text-gray-800">
                    Edit - Business Clearance Price
                </h3>
                <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#hs-businessClearance-modal">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <form action="" method="POST">
                <div class="p-4 overflow-y-auto">
                    <div class="space-y-3 px-2">
                        <div class="rounded-lg">
                            <label for="businessClearance" class="block text-base text-gray-800 font-medium">Business Clearance Price</label>
                            <div class="flex rounded-lg shadow-sm">
                                <div class="px-4 inline-flex items-center min-w-fit rounded-s-md border border-e-0 border-gray-200 bg-gray-50">
                                    <span class="text-base text-gray-800">Php</span>
                                </div>
                                <input type="number" name="businessClearance" id="businessClearance" value="<?php echo htmlspecialchars($businessClearancePrice); ?>" class="py-2 px-3 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter price">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-businessClearance-modal">
                        Close
                    </button>
                    <button type="submit" name="btn-businessClearance" id="btn-businessClearance" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-slate-600 text-white hover:bg-slate-500 focus:outline-none focus:bg-slate-500 disabled:opacity-50 disabled:pointer-events-none">
                        Save changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

