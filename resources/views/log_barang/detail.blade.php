@extends('layouts.app')
@section('content')
    <!--Container-->
    <div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-4 md:mt-8 mb-16 text-gray-800 leading-normal">



            <!--Divider-->
            <hr class="border-b-2 border-gray-600 my-8 mx-4">

            <div class="flex flex-row flex-wrap flex-grow mt-2">

                <div class="w-full p-3">
                    <!--Graph Card-->
                    <div class="bg-gray-900 border border-gray-800 rounded shadow">
                        <div class="border-b border-gray-800 p-3">
                            <h5 class="font-bold uppercase text-gray-600">List Barang {{ $data->tanggal }}</h5>
                        </div>
                        <div class="p-5">
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
                                                Add Data
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
                                            <form class="space-y-4 " action="/add_barang/{{ $data->id }}"
                                                method="POST">
                                                @csrf
                                                <div>

                                                    <label for="kategori"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                                                    <select
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        name="kategori_id">
                                                        @foreach ($allkategoris as $allkategori)
                                                            <option value="{{ $allkategori->id }}">
                                                                {{ $allkategori->nama_kategori }}</option>
                                                        @endforeach

                                                    </select>

                                                </div>
                                                <div>
                                                    <label for="nama_barang"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                                        Barang</label>
                                                    <input type="text" name="nama_barang" id="nama_barang"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        required>
                                                </div>
                                                <div>
                                                    <label for="jenis_barang"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                                        Barang</label>
                                                    <input type="text" name="jenis_barang" id="jenis_barang"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        required>
                                                </div>
                                                <div>
                                                    <label for="kode_barang"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
                                                        Barang</label>
                                                    <input type="text" name="kode_barang" id="kode_barang"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        required>
                                                </div>
                                                <div>
                                                    <label for="kondisi"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kondisi</label>
                                                    <select id="kondisi" name="kondisi"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                                        <option value="Baik">Baik</option>
                                                        <option value="Rusak">Rusak</option>

                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="deskripsi"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                                    <textarea id="deskripsi" name="deskripsi" rows="4"
                                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                                                </div>




                                                <button type="submit"
                                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5" id="accordion-collapse" data-accordion="collapse">
                                @foreach ($data->kategoris as $kategori)
                                    <h2 id="accordion-collapse-heading-{{ $kategori->id }}">
                                        <button type="button"
                                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-300 border border-b-0 border-gray-700  focus:ring-4 focus:ring-gray-700 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-300 hover:bg-gray-700 dark:hover:bg-gray-800 gap-3"
                                            data-accordion-target="#accordion-collapse-body-{{ $kategori->id }}"
                                            aria-expanded="true"
                                            aria-controls="accordion-collapse-body-{{ $kategori->id }}">
                                            <span>{{ $kategori->nama_kategori }}
                                                <span
                                                    class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                                    {{ $kategori->barangs->where('log_id', $data->id)->count() }}</span>
                                            </span>
                                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M9 5 5 1 1 5" />
                                            </svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-collapse-body-{{ $kategori->id }}" class="hidden"
                                        aria-labelledby="accordion-collapse-heading-{{ $kategori->id }}">
                                        <div
                                            class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">

                                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                                <table
                                                    class="w-full text-sm text-left rtl:text-right text-gray-300 dark:text-gray-400">
                                                    <thead
                                                        class="text-xs text-gray-300 uppercase bg-gray-900 dark:bg-gray-700 dark:text-gray-400">
                                                        <tr>
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
                                                            <th scope="col" class="px-6 py-3">
                                                                Action
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($kategori->barangs->where('log_id', $data->id) as $barang)
                                                            <tr
                                                                class="odd:bg-gray-800 odd:dark:bg-gray-900 even:bg-gray-900 even:dark:bg-gray-800 border-b dark:border-gray-700 text-gray-300">
                                                                <td scope="row"
                                                                    class="px-6 py-4 font-medium text-gray-300 whitespace-nowrap dark:text-white">
                                                                    {{ $barang->nama_barang }}
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 font-medium text-gray-300 whitespace-nowrap dark:text-white">
                                                                    {{ $barang->kode_barang }}
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 font-medium text-gray-300 whitespace-nowrap dark:text-white">
                                                                    {{ $barang->jenis_barang }}
                                                                </td>

                                                                <td
                                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    @if ($barang->kondisi == 'Rusak')
                                                                        <span
                                                                            class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">{{ $barang->kondisi }}</span>
                                                                    @else($barang->kondisi == 'Baik')
                                                                        <span
                                                                            class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ $barang->kondisi }}</span>
                                                                    @endif
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 font-medium text-gray-300 whitespace-nowrap dark:text-white">
                                                                    {{ $barang->deskripsi }}
                                                                </td>

                                                                <td class="px-6 py-4 flex gap-2">


                                                                    <!-- Modal toggle -->
                                                                    <button
                                                                        data-modal-target="default-modal{{ $barang->id }}"
                                                                        data-modal-toggle="default-modal{{ $barang->id }}"
                                                                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                                        type="button">
                                                                        <i class="fas fa-edit"></i>
                                                                    </button>

                                                                    <!-- Main modal -->
                                                                    <div id="default-modal{{ $barang->id }}"
                                                                        tabindex="-1" aria-hidden="true"
                                                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                                        @include('edit')
                                                                    </div>



                                                                    <!-- Modal delete toggle -->
                                                                    <button data-modal-target="hapus{{ $barang->id }}"
                                                                        data-modal-toggle="hapus{{ $barang->id }}"
                                                                        class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                                                                        type="button">
                                                                        <i class="fas fa-trash-alt"></i>
                                                                    </button>

                                                                    <!-- Main delete modal -->
                                                                    <div id="hapus{{ $barang->id }}" tabindex="-1"
                                                                        aria-hidden="true"
                                                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                                        @include('barang.delete')
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
@endsection
