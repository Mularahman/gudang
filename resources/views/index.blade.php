@extends('layouts.app')
@section('content')
    <!--Container-->
    <div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-4 md:mt-8 mb-16 text-gray-800 leading-normal">

            <!--Console Content-->

            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 xl:w-1/4 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-indigo-600"><i class="fas fa-fw fa-2x fa-boxes text-white"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-400">Total Barang</h5>
                                <h3 class="font-bold text-3xl text-gray-600">{{$total->count()}} </h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/4 p-3">
                    <!--Metric Card-->
                     <a href="/barang_baik">
                    <div class="bg-gray-900 border border-gray-800 rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-green-600"><i class="fas fa-check fa-fw fa-2x text-white"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-400">Barang Baik</h5>
                                <h3 class="font-bold text-3xl text-gray-600">{{$Baik->count()}}<span class="text-green-500"><i
                                            class="fas fa-caret-down"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    </a>
                    <!--/Metric Card-->
                </div>

                {{--  <div class="w-full md:w-1/2 xl:w-1/4 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-green-600"><i
                                        class="fas fa-caret-square-right fa-2x fa-fw text-white"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-400">Barang Masuk</h5>
                                <h3 class="font-bold text-3xl text-gray-600">2 <span class="text-green-600"><i
                                            class="fas fa-caret-down"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>  --}}
   <div class="w-full md:w-1/2 xl:w-1/4 p-3">
                    <!--Metric Card-->
                    <a href="/barang_rusak">
                    <div class="bg-gray-900 border border-gray-800 rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-red-600"><i class="fas fa-times fa-fw fa-2x text-white"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-400">Barang Rusak</h5>
                                <h3 class="font-bold text-3xl text-gray-600">{{$Rusak->count()}}<span class="text-red-500"><i
                                            class="fas fa-caret-up"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    </a>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/4 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-yellow-600"><i class="fas fa-fw fa-2x fa-tags text-white"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-400">Jenis Barang</h5>
                                <h3 class="font-bold text-3xl text-gray-600">{{$Jenis->count()}}</h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>

                {{--  <div class="w-full md:w-1/2 xl:w-1/4 p-3">
                    <!--Metric Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-red-600"><i
                                        class="fas fa-caret-square-left fa-2x fa-fw text-white"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-400">Barang Keluar</h5>
                                <h3 class="font-bold text-3xl text-gray-600">2 <span class="text-red-600"><i
                                            class="fas fa-caret-up"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>  --}}
            </div>

            <!--Divider-->
            <hr class="border-b-2 border-gray-600 my-8 mx-4">

            <div class="flex flex-row flex-wrap flex-grow mt-2">

                <div class="w-full p-3">
                    <!--Graph Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="border-b border-gray-800 p-3 ">
                            <h5 class="font-bold uppercase text-gray-600">Log Barang</h5>





                        </div>

                        <div class="p-5 ">
                            <!-- Modal toggle -->
                            <button data-modal-target="authentication-modal" id="addButton"
                                data-modal-toggle="authentication-modal"
                                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 "
                                type="button">
                                Add Data
                            </button>

                            <!-- Main modal -->
                            <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Add Logs Data
                                            </h3>
                                            <button type="button"
                                                class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="authentication-modal">
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
                                        <div class="p-4 md:p-5 ">
                                            <form class="space-y-4 " action="/add_log" method="POST">
                                                @csrf
                                                <div>
                                                    <label for="tanggal"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                                                    <input type="date" name="tanggal" id="tanggal"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        required>
                                                </div>
                                                <div>
                                                    <label for="ket"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                                                    <select id="ket" name="ket"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                                        <option value="Masuk">Masuk</option>
                                                        <option value="Keluar">Keluar</option>

                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="deskripsi"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                                    <textarea id="deskripsi" name="deskripsi" rows="4"
                                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                                                </div>
                                                <div>
                                                    <label for="kategori"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                                                    <select style="background-color: red"
                                                        class="js-example-basic-multiple " name="kategori[]"
                                                        multiple="multiple">
                                                        <option value="Router">Router</option>
                                                        <option value="Access Point">Access Point</option>
                                                        <option value="CCTV">CCTV</option>
                                                        <option value="Cable">Cable</option>
                                                        <option value="Switch">Switch</option>
                                                    </select>
                                                    <div class="flex items-center mb-4 mt-4">
                                                        <input id="kategori-checkbox" type="checkbox"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        <label for="default-checkbox"
                                                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Masukkan
                                                            Kategori Baru</label>
                                                    </div>
                                                    <input type="text" name="kategori[]"
                                                        placeholder="Masukkan Kategori Baru"
                                                        class="hidden mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        id="Newkategori" disabled>
                                                </div>



                                                <button type="submit"
                                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg pt-5">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-400 uppercase bg-gray-900 border border-gray-800 dark:bg-gray-700 dark:text-gray-300">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Tanggal
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Keterangan
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Deskripsi
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Qty
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr
                                                class="odd:bg-gray-800 odd:dark:bg-gray-900 even:bg-gray-900 even:dark:bg-gray-800 border-b dark:border-gray-700 text-gray-300">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-300 whitespace-nowrap dark:text-white">
                                                    {{ $item->tanggal }}
                                                </th>
                                                <td class="px-6 py-4">
                                                    @if ($item->ket == 'Keluar')
                                                        <span
                                                            class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{ $item->ket }}</span>
                                                    @else($item->ket == 'Masuk')
                                                        <span
                                                            class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ $item->ket }}</span>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $item->deskripsi }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $item->kategoris->sum('pivot.qty') }}
                                                </td>
                                                <td class="px-6 py-4 flex ">
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
                                                                       @include('log_barang.delete')
                                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
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
