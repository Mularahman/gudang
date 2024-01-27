 <div class="relative p-4 w-full max-w-2xl max-h-full">
     <!-- Modal content -->
     <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
         <!-- Modal header -->
         <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
             <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                 Delete Data
             </h3>
             <button type="button"
                 class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                 data-modal-hide="hapus{{ $barang->id }}">
                 <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 14 14">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                 </svg>
                 <span class="sr-only">Close
                     modal</span>
             </button>
         </div>
            <form action="/delete_barang/{{$barang->id}}" method="POST">
                @csrf
                @method('DELETE')
<!-- Modal body -->
         <div class="p-4 md:p-5 space-y-4">


             <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                   Are You Sure Delete This Data ?
               </p>
         </div>


           <!-- Modal footer -->
         <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
             <button data-modal-hide="hapus" type="submit"
                 class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
             <button data-modal-hide="hapus{{ $barang->id }}" type="button"
                 class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
         </div>
        </form>


     </div>
 </div>
