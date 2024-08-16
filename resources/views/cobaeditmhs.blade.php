<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Edit Mahasiswa</h1>
        <form action="{{ route('mhs.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('POST')

            <div class="mb-4">
                <label for="nim" class="block text-sm font-medium text-gray-700">NIM</label>
                <input type="text" id="nim" name="nim" value="{{ old('nim', $mahasiswa->nim) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required>
            </div>

            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama', $mahasiswa->nama) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required>
            </div>

            <div class="mb-4">
                <label for="tempat_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir"
                    value="{{ old('tempat_lahir', $mahasiswa->tempat_lahir) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required>
            </div>

            <div class="mb-4">
                <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                    value="{{ old('tanggal_lahir', $mahasiswa->tanggal_lahir) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required>
            </div>

            <div class="mb-4">
                <label for="kelas_id" class="block text-sm font-medium text-gray-700">Kelas ID</label>
                <input type="number" id="kelas_id" name="kelas_id" value="{{ old('kelas_id', $mahasiswa->kelas_id) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                    Update
                </button>
            </div>
        </form>
    </div>
</body>

</html>
