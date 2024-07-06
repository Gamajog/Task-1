 <!-- Modal toggle -->
 <button data-modal-target="edit" data-modal-toggle="edit"
 class="block text-black bg-yellow-300 hover:text-white hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800"
 type="button">
 Edit Data
</button>

<!-- Main modal -->
<div id="edit" tabindex="-1" aria-hidden="true"
 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
 <div class="relative p-4 w-full max-w-md max-h-full">
     <!-- Modal content -->
     <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
         <!-- Modal header -->
         <div
             class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
             <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                 Edit Data
             </h3>
             <button type="button"
                 class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                 data-modal-toggle="edit">
                 <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                     fill="none" viewBox="0 0 14 14">
                     <path stroke="currentColor" stroke-linecap="round"
                         stroke-linejoin="round" stroke-width="2"
                         d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                 </svg>
                 <span class="sr-only">Close modal</span>
             </button>
         </div>
         <!-- Modal body -->
         <form class="p-4 md:p-5">
             <div class="grid gap-4 mb-4 grid-cols-2">

                 {{-- Name --}}
                 <div class="col-span-2">
                     <label for="name"
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                     <input type="text" name="name" id="name"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                         placeholder="Type Your Full Name" required="" autocomplete="off">
                 </div>

                 {{-- Date --}}
                 <div class="col-span-2">
                     <label for="name"
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>

                     <div class="relative max-w-sm">
                         <div
                             class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                             <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                 aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                 fill="currentColor" viewBox="0 0 20 20">
                                 <path
                                     d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                             </svg>
                         </div>
                         <input id="datepicker-autohide" datepicker datepicker-autohide
                             datepicker-buttons datepicker-autoselect-today type="text"
                             class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                             placeholder="Select date" required="" autocomplete="off">
                     </div>

                 </div>

                 {{-- Email --}}
                 <div class="col-span-2">
                     <label for="email"
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                     <input type="email" name="email" id="email"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                         placeholder="Your Email" required="" autocomplete="off">
                 </div>

                 {{-- Textarea --}}
                 <div class="col-span-2">
                     <label for="name"
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                     <textarea id="message" rows="4"
                         class="resize-none block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                         placeholder="Descript the student here..."></textarea>
                     {{-- <input type="text" name="name" id="name"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                         placeholder="Type product name" required="" autocomplete="off"> --}}
                 </div>
             </div>

             {{-- Add Button --}}
             <button type="submit"
                 class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                 <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd"
                         d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                         clip-rule="evenodd"></path>
                 </svg>
                 Save Data
             </button>

             {{-- Delete Button --}}
             <button type="reset"
                 class="text-white inline-flex items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                 <svg class="me-1 -ms-1 w-5 h-5 dark:text-white" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     fill="currentColor" viewBox="0 0 24 24">
                     <path fill-rule="evenodd"
                         d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                         clip-rule="evenodd" />
                 </svg>
                 Clear Data
             </button>
         </form>
     </div>
 </div>
</div>