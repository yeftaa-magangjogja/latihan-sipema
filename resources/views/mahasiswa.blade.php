@extends('components.dosen')

@section('content')

    <!-- resources/views/mahasiswa.blade.php -->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mahasiswa</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>

    <body class="bg-gray-100">
        {{-- <x-sidebar></x-sidebar>> --}}
        <div class="flex min-h-screen">
            <!-- Sidebar -->

            <main class="flex-grow p-4 mr-3">
                <div class="container mx-auto my-4">
                    <!-- Box Container -->
                    <div
                    class="w-full bg-white dark:bg-gray-800 p-4 shadow-lg rounded-lg border border-gray-300 dark:border-gray-700">
                    <!-- Title -->
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-300 mb-4">Data Mahasiswa</h2>
                    <!-- Dropdown Form -->
                    <form action="{{ route('dosen.filterByClass') }}" method="GET" class="w-auto">
                        <div class="relative">
                            <select name="kelas_id" id="kelas" onchange="this.form.submit()"
                                class="bg-white border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 appearance-none">
                                <option disabled {{ !request()->has('kelas_id') ? 'selected' : '' }}>Silahkan Pilih Kelas</option>
                                @foreach ($kelas as $item)
                                    <option value="{{ $item->id }}" {{ request()->get('kelas_id') == $item->id ? 'selected' : '' }}>
                                        {{ $item->name }}
                                    </option>
                                @endforeach
                                <option value="no_class" {{ request()->get('kelas_id') === 'no_class' ? 'selected' : '' }}>
                                    Belum memiliki kelas
                                </option>
                            </select>
                        </div>
                    </form>
                </div>

                @if (isset($mahasiswas))
                    <!-- Tabel Mahasiswa -->
                    <div class="bg-white dark:bg-gray-800 p-4 shadow-md rounded-lg mb-6">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                            <div class="flex-1 flex items-center space-x-2">
                                <h5>
                                    <span class="text-gray-500">Tabel Data Mahasiswa</span>
                                </h5>
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row items-stretch md:items-center md:space-x-3 space-y-3 md:space-y-0 justify-between mx-4 py-4 border-t dark:border-gray-700">
                        </div>
                        <div id="tampil" class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="p-4 text-center">No</th>
                                        <th scope="col" class="p-4 text-center">NIM</th>
                                        <th scope="col" class="p-4 text-center">Nama</th>
                                        <th scope="col" class="p-4 text-center">Tempat Lahir</th>
                                        <th scope="col" class="p-4 text-center">Tanggal Lahir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($mahasiswas as $m)
                                        <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <td class="px-4 py-3 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $no++ }}
                                            </td>
                                            <td class="px-4 py-3 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $m->nim }}
                                            </td>
                                            <td class="px-4 py-3 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $m->nama }}
                                            </td>
                                            <td class="px-4 py-3 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $m->tempat_lahir }}
                                            </td>
                                            <td class="px-4 py-3 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $m->tanggal_lahir }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </main>
                
        </div>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@latest/dist/flowbite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    </body>

    </html>

@endsection