<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Halaman Manajemen Pencatatan Film') }}
            </h2>

            <a href="{{ route('film.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Catat Film Disini
            </a>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="bg-white-100 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">

                @forelse ($dataFilms as $item)
                    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                        <div class="px-6 py-4">
                            <div class="m-2 p-2">
                                <h3 class="font-bold text-3xl mb-2">Judul Film: {{ $item->judul }}</h3>
                                <p class=" text mb-2">Tahun Terbit: {{ $item->tahun }}</p>
                                <p class=" text mb-2">Sudah selesai: {{ $item->isCompleted == 1 ? 'Ya' : 'Tidak' }}</p>
                            </div>
                            <div class="flex m-2 p-2 gap-2">
                                <a href="#"
                                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                    Edit Disini
                                </a>
                                <a href="#"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    Delete Disini
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="flex justify-center">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white text-center">
                            <div class="px-6 py-4">
                                <p class="text-xl">Belum ada data tersimpan</p>
                                <a href="{{ route('film.create') }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">
                                    Catat Film Disini
                                </a>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>

    </div>
</x-app-layout>
