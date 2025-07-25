<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Halaman Manajemen Pencatatan Film') }}
            </h2>

            <div class="flex flex-col md:flex-row items-center">
                <div class="mb-4 md:mb-0 md:mr-4 w-full md:w-auto">
                    <a href="{{ route('film.create') }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded block text-center">
                        Catat Film Disini
                    </a>
                </div>

                <div class="w-full md:w-auto">
                    <input type="text" id="filmSearchInput" placeholder="Cari judul atau tahun film..."
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>
            </div>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="bg-white-100 overflow-hidden shadow-sm sm:rounded-lg">
            <div id="filmCardsContainer"
                class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">

                @forelse ($dataFilms as $item)
                    <div class="film-card max-w-sm rounded overflow-hidden shadow-lg bg-white">
                        <div class="px-6 py-4">
                            <div class="m-2 p-2">
                                <h3 class="film-title font-bold text-3xl mb-2">Judul Film: {{ $item->judul }}</h3>
                                <p class="film-year text mb-2">Tahun Terbit: {{ $item->tahun }}</p>
                                <p class=" text mb-2">Sudah selesai: {{ $item->isCompleted == 1 ? 'Ya' : 'Tidak' }}</p>
                            </div>
                            <div class="flex m-2 p-2 gap-2">
                                <a href="{{ route('film.edit', $item->id) }}"
                                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                    Edit Disini
                                </a>
                                <form action="{{ route('film.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')"
                                        class="bg-red-500
                                        hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete
                                        Disini</button>
                                </form>

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

                <div id="noSearchResultsMessage" class="col-span-full flex justify-center" style="display: none;">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white text-center">
                        <div class="px-6 py-4">
                            <p class="text-xl text-gray-700">Tidak ada film yang cocok dengan pencarian Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-app-layout>
