<!-- Display Data Modal -->
<div id="displayModalBlotter" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-y-auto pointer-events-none" tabindex="-1" aria-labelledby="displayModalBlotter-label">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl lg:max-w-5xl m-3 md:mx-auto">
        <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto ">
            <div class="flex justify-between items-center py-3 px-4 border-b">
                <h3 id="displayModalBlotter-label" class="font-bold text-gray-800">
                    Add Blotter Report
                </h3>
                <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#displayModalBlotter">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <form method="POST">
                <div class="p-4 px-10">
                    <p class="text-gray-800 text-justify">
                        A Blotter Record is an official log of incidents, complaints, or disputes reported to the barangay or local authorities. It serves as a legal record of events, helping to track and resolve conflicts within the community.
                    </p>
                    <div class="pt-6">
                        <div class="mb-5">
                            <div class="lg:flex gap-x-6 space-y-5 lg:space-y-0">
                                <div class="flex-1 space-y-1 mb-4">
                                    <label for="complainantName" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Complainant Name (e.g., Juan Dela Cruz)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="complainantName" name="complainantName" type="text" class="text-gray-800 py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter complainant name">
                                </div>
                                <div class="flex-1 space-y-1 mb-4">
                                    <label for="respondentName" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Respondent Name (e.g., Juan Dela Cruz)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="respondentName" name="respondentName" type="text" class="text-gray-800 py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter respondent name">
                                </div>
                            </div>
                            <div class="flex-1 space-y-1 mb-4">
                                <label for="locationOfIncident" class="flex text-base font-medium text-gray-800 mt-2.5">
                                    Location of Incident
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                    </svg>
                                </label>
                                <input required id="locationOfIncident" name="locationOfIncident" type="text" class="text-gray-800 py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter location of incident">
                            </div>
                            <div class="lg:flex gap-x-6 space-y-5 lg:space-y-0">
                                <div class="flex-1 space-y-1 mb-4">
                                    <label for="dateAndTimeIncident" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Date of Incident
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="dateAndTimeIncident" name="dateAndTimeIncident" type="datetime-local" class="text-gray-800 py-2 px-3 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none">
                                </div>
                                <div class="flex-1 space-y-1 mb-4">
                                    <label for="dateOfFiling" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Date of Filing
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <input required id="dateOfFiling" name="dateOfFiling" type="datetime-local" class="text-gray-800 py-2 px-3 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none">
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
                            <div class="lg:flex gap-x-6 space-y-5 lg:space-y-0">
                                <div class="flex-1 space-y-1 mb-4">
                                    <label for="incidentType" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Incident Type <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <?php
                                    include("../../src/database.php");

                                    $query = $conn->prepare("SELECT * FROM incident_types");
                                    $query->execute();
                                    $result_query = $query->get_result();
                                    ?>
                                    <select required id="incidentType" name="incidentType" class="text-gray-800 py-[11px] px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none">
                                        <option selected disabled>Select incident type</option>
                                        <?php while ($row = $result_query->fetch_assoc()) : ?>
                                            <option value="<?= htmlspecialchars($row['blotter_type']) ?>">
                                                <?= htmlspecialchars($row['incident_classification']) ?>
                                            </option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="lg:flex gap-x-6 space-y-5 lg:space-y-0">
                                <div class="flex-1 space-y-1 mb-4">
                                    <label for="incidentDetail" class="flex text-base font-medium text-gray-800 mt-2.5">
                                        Incident Detail
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-asterisk size-2 mx-1 text-red-600" viewBox="0 0 16 16">
                                            <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                                        </svg>
                                    </label>
                                    <textarea required id="incidentDetail" name="incidentDetail" type="text" rows="5" class="text-gray-800 py-2 px-3 pe-9 block w-full border border-gray-200 rounded-lg text-base focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-none" placeholder="Enter incident detail ....."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#displayModalBlotter">
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