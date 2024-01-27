@extends('layouts.app')
@section('content')
    <!--Container-->
    <div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-4 md:mt-8 mb-16 text-gray-800 leading-normal">

            <!--Console Content-->



            <div class="flex flex-row flex-wrap flex-grow mt-2">

                <div class="w-full p-3">
                    <!--Graph Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="border-b border-gray-800 p-3 ">
                            <h5 class="font-bold uppercase text-gray-600">Barang Tersedia</h5>





                        </div>

                        <div class="p-5 ">
                            <div class="flex justify-between">
                            <div class="flex ">
                                <a href="/cetakPDF_baik"
                                    class="block me-2 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 "
                                    type="button">
                                     <i class="fas fa-print"></i> Cetak PDF
                                </a>
                                <a href="/cetakEXCEL_baik"
                                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 "
                                    type="button">
                                     <i class="fas fa-print"></i> Cetak EXCEL
                                </a>
</div>


<form action="" method="GET">


        <div class="relative w-full">
            <input type="search" name="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search..." required value="{{request('search')}}">
            <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </div>

</form>
</div>


                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg pt-5">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-400 uppercase bg-gray-900 border border-gray-800 dark:bg-gray-700 dark:text-gray-300">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                No
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Nama Barang
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Kode Barang
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Jenis Barang
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Kondisi
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Deskripsi
                                            </th>

                                            {{--  <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>  --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr
                                                class="odd:bg-gray-800 odd:dark:bg-gray-900 even:bg-gray-900 even:dark:bg-gray-800 border-b dark:border-gray-700 text-gray-300">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-300 whitespace-nowrap dark:text-white">
                                                    {{ $loop->iteration }}
                                                </th>
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-300 whitespace-nowrap dark:text-white">
                                                    {{ $item->nama_barang }}
                                                </th>
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-300 whitespace-nowrap dark:text-white">
                                                    {{ $item->kode_barang }}
                                                </th>
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-300 whitespace-nowrap dark:text-white">
                                                    {{ $item->jenis_barang }}
                                                </th>
                                                <td class="px-6 py-4">
                                                    @if ($item->kondisi == 'Rusak')
                                                        <span
                                                            class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{ $item->kondisi }}</span>
                                                    @else($item->kondisi == 'Baik')
                                                        <span
                                                            class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ $item->kondisi }}</span>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $item->deskripsi }}
                                                </td>

                                                {{--  <td class="px-6 py-4 flex ">
                                                    <a href="/detail/{{$item->id}}"
                                                        class="block me-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-1/3 py-2.5  text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i
                                                            class="fas fa-fw fa-eye text-blue"></i></a>

                                                              <!-- Modal delete toggle -->
                                                                    <button
                                                                        data-modal-target="hapus{{ $item->id }}"
                                                                        data-modal-toggle="hapus{{ $item->id }}"
                                                                        class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                                                                        type="button">
                                                                        <i class="fas fa-trash-alt"></i>
                                                                    </button>

                                                                    <!-- Main delete modal -->
                                                                    <div id="hapus{{ $item->id }}"
                                                                        tabindex="-1" aria-hidden="true"
                                                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                                       @include('delete')
                                                                    </div>
                                                </td>  --}}
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
<div class="mt-5 flex justify-end">
    {{$data->links('layouts.partial.pagination')}}
</div>
                        </div>
                    </div>
                    <!--/Graph Card-->
                </div>




            </div>

            <!--/ Console Content-->

        </div>


    </div>
    <!--/container-->
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });

        const addButton = document.getElementById('addButton')
        const newKategori = document.getElementById('kategori-checkbox')
        const kategoriInput = document.getElementById('Newkategori')

        addButton.addEventListener('click', function() {
            const SelectBox = document.querySelector('[dir="ltr"]');
            SelectBox.style.width = "100%";

        });

        newKategori.addEventListener('click', function() {
            if (this.checked) {
                kategoriInput.classList.remove('hidden')
                kategoriInput.removeAttribute('disabled', '')
                kategoriInput.setAttribute('enabled', '')
            } else {
                kategoriInput.setAttribute('disabled', '')
                kategoriInput.removeAttribute('enabled', '')
                kategoriInput.classList.add('hidden')
            }
        });
    </script>
@endsection
