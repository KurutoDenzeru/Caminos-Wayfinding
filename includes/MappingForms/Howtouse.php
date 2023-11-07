
<div class="text-center text-gray-300 pt-4 border-5">
    <hr />
</div>

<p class="text-md text-start pt-6" data-modal-target="popup-modal" data-modal-toggle="popup-modal" style="cursor:pointer;">
    How to use?
</p>

<!-- <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal" style="cursor:pointer;" 
    class="text-gray-900 opacity-50 bg-white w-1/2 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
    How to use?
</button> -->

<div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6">
                <!-- <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg> -->

                <img src="../../assets/img/caminoslogo.png" class="mx-auto w-48 md:w-34 sm:w-28">

                <!-- Instructiions -->
                <h3 class="text-lg text-start font-extrabold text-gray-900">Instructions:</h3>
                <div class="py-3">
                    <p class="text-md">
                    1. Search for your desired destination (e.g., Building 1, Room 1 / B1 R1). <br>
                    2. An updated map picture will pop up to guide you to your desired location. <br>
                    3. Enjoy the rest of the system schematics that will navigate you through the entire school.
                    </p> 
                </div>               

                <!-- Legends -->
                <h3 class="text-lg text-start font-extrabold text-gray-900">Legends:</h3>
                <div class="py-3">
                    <p class="text-md">
                    1. Green Line - Main path. <br>
                    2. Red Line - Alternative path (If there is available alternative route to your destination). <br>
                    </p> 
                </div>                        

                <!-- Buttons -->
                <div class="text-center justify-between">
                    <button data-modal-hide="popup-modal" type="button" class="text-white text-center bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        I understand
                    </button>
                    <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">
                        Close
                    </button>
                </div>

                
            </div>
        </div>
    </div>
</div>