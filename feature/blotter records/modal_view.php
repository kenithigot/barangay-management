<?php include("db_blotter_resolved.php");?>
<!-- Display Data Modal -->
<div id="viewModal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-y-auto pointer-events-none" tabindex="-1" aria-labelledby="viewModal-label">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl lg:max-w-5xl m-3 md:mx-auto">
        <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto ">
            <div class="flex justify-between items-center py-3 px-4 border-b">
                <h3 id="viewModal-label" class="font-bold text-gray-800">
                    View Blotter Report
                </h3>
                <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#viewModal">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <form method="POST">
                <input type="hidden" class="id" name="id" id="id">
                <div class="p-4 px-10">
                    <p class="text-gray-800 text-justify">
                        A Blotter Record is an official log of incidents, complaints, or disputes reported to the barangay or local authorities. It serves as a legal record of events, helping to track and resolve conflicts within the community.
                    </p>
                    <div class="pt-6">
                        <div class="mb-5">
                            <div class="lg:flex items-center gap-x-6 space-y-5 lg:space-y-0 pb-5">
                                <div class="flex-1 space-y-1 mb-4">
                                    <div class="flex items-center gap-x-3">
                                        <button type="submit" id="btn-resolved" name="btn-resolved" 
                                            class="py-1 px-2 inline-flex items-center gap-x-2 text-base font-medium rounded-xl bg-green-800 text-white hover:bg-green-900 focus:bg-green-900 focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                            </svg>
                                            Resolved
                                        </button>
                                        <button type="submit" id="btn-dismissed" name="btn-dismissed" 
                                            class="py-1 px-2 inline-flex items-center gap-x-2 text-base font-medium rounded-xl bg-red-700 text-white hover:bg-red-800 focus:bg-red-900 focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                            </svg>
                                            Dismissed
                                        </button>
                                    </div>
                                </div>
                                <div class="flex-1 space-y-1 mb-4">
                                    <div class="flex flex-col items-end">
                                        <div class="flex items-center">
                                            <h1 for="view_complainantName" class="flex text-base font-medium text-gray-800">Case Status:</h1>
                                            <label required id="view_blotter_status" name="view_blotter_status" type="text" class="pl-1 text-gray-800 text-lg font-bold py-2 block disabled:opacity-50 disabled:pointer-events-none focus:outline-none"></label>
                                        </div>
                                        <div class="flex items-center">
                                            <h1 for="view_complainantName" class="flex text-base font-medium text-gray-800">Case No.:</h1>
                                            <label required id="view_blotter_caseNumber" name="view_blotter_caseNumber" type="text" class="pl-1 text-gray-800 text-lg font-bold py-2 block disabled:opacity-50 disabled:pointer-events-none focus:outline-none"></label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="lg:flex gap-x-6 space-y-5 lg:space-y-0">
                                <div class="flex-1 space-y-1 mb-4">
                                    <label for="view_complainantName" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Complainant Name (e.g., Juan Dela Cruz)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="view_complainantName" name="view_complainantName" type="text" class="text-gray-800 py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter complainant name">
                                </div>
                                <div class="flex-1 space-y-1 mb-4">
                                    <label for="view_respondent_name" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Respondent Name (e.g., Juan Dela Cruz)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="view_respondent_name" name="view_respondent_name" type="text" class="text-gray-800 py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter respondent name">
                                </div>
                            </div>
                            <div class="flex-1 space-y-1 mb-4">
                                <label for="view_locationOfIncident" class="flex text-base font-medium text-gray-800 mt-2.5">
                                    Location of Incident
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                    </svg>
                                </label>
                                <input required id="view_locationOfIncident" name="view_locationOfIncident" type="text" class="text-gray-800 py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter location of incident">
                            </div>
                            <div class="lg:flex gap-x-6 space-y-5 lg:space-y-0">
                                <div class="flex-1 space-y-1 mb-4">
                                    <label for="view_dateAndTimeIncident" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Date of Incident
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="view_dateAndTimeIncident" name="view_dateAndTimeIncident" type="datetime-local" class="text-gray-800 py-2 px-3 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none">
                                </div>
                                <div class="flex-1 space-y-1 mb-4">
                                    <label for="view_dateOfFiling" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Date of Filing
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="view_dateOfFiling" name="view_dateOfFiling" type="datetime-local" class="text-gray-800 py-2 px-3 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none">
                                </div>
                            </div>
                            <!-- <div class="lg:flex gap-x-6 space-y-5 lg:space-y-0">                      
                                <div class="flex-1 space-y-1 mb-4">
                                    <label for="blotterStatus" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Blotter Status <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <select required id="blotterStatus" name="blotterStatus" class="text-gray-800 py-[11px] px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none">
                                        <option selected disabled>Select blotter status</option>
                                        <option value="Ongoing">Ongoing</option>
                                        <option value="Resolved">Resolved</option>
                                        <option value="Dismissed">Dismissed</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="flex-1 space-y-1 mb-4">
                                <label for="view_incidentType" class="flex text-base font-medium text-gray-800 mt-2.5">
                                    Incident Type
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                    </svg>
                                </label>
                                <?php
                                include("../../src/database.php");

                                $query = $conn->prepare("SELECT * FROM incident_types");
                                $query->execute();
                                $result_query = $query->get_result();
                                ?>
                                <select required id="view_incidentType" name="view_incidentType" class="text-gray-800 py-[11px] px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none">
                                    <option selected disabled>Select incident type</option>
                                    <?php while ($row = $result_query->fetch_assoc()) : ?>
                                        <option value="<?= htmlspecialchars($row['incident_classification']) ?>">
                                            <?= htmlspecialchars($row['incident_classification']) ?>
                                        </option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="lg:flex gap-x-6 space-y-5 lg:space-y-0">
                                <div class="flex-1 space-y-1 mb-4">
                                    <label for="view_incidentDetail" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Incident Detail
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <textarea required id="view_incidentDetail" name="view_incidentDetail" type="text" rows="5" class="text-gray-800 py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter incident detail ....."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#viewModal">
                        Close
                    </button>
                    <button type="submit" name="btn-addBlotter" id="btn-addBlotter" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm text-white font-medium rounded-lg bg-slate-600 border border-gray-200 shadow-sm hover:bg-slate-500 focus:outline-none focus:bg-slate-500 disabled:opacity-50 disabled:pointer-events-none">
                        Add Blotter
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>