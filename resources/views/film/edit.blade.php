<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Halaman Manajemen Pencatatan Film') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="bg-white-100 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex items-center justify-center p-4">
                <div class="bg-white flex items-center justify-center flex-col">

                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-2 py-2 rounded relative"
                            role="alert" x-data="{ show: true }" x-show="show">
                            <ul class="mt-1 mb-0 list-inside list-disc text-sm text-red-700">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('film.update', $data->id) }}') }}" method="POST" class="w-full bg-white rounded-lg p-8">
                        @csrf
                        @method('PUT')
                        <div class="py-4">
                            <h2 class="text-3xl font-bold tracking-wide text-black text-center">Ubah data film disini!
                            </h2>
                        </div>
                        <div class="flex flex-col space-y-4">
                            <div>
                                <label for="text" class="text-black">Judul :</label>
                                <input type="text" placeholder="Masukan judul" id="text" name="judul" value="{{ $data->judul }}"
                                    class="border border-gray-300 rounded-md p-2" />
                                @error('judul')<p class="text-xs text-red-600">{{ $message }}</p>@enderror
                            </div>

                            <div>
                                <label for="number" class="text-black">Tahun : </label>
                                <input type="number" placeholder="Masukan tahun terbit film" id="number" value="{{ $data->tahun }}""
                                    name="tahun" class="border border-gray-300 rounded-md p-2" />
                                @error('tahun')<p class="text-xs text-red-600">{{ $message }}</p>@enderror

                            </div>
                            <div class="flex items-center">
                                <input type="hidden" name="isCompleted" value="0">
                                <input type="checkbox" id="checkbox" class="mr-2" name="isCompleted" value="1" {{ $data->isCompleted ? 'checked' : ''}}/>
                                <label for="checkbox" class="text-black">Sudah selesai ditonton?</label>
                                @error('isCompleted')<p class="text-xs text-red-600">{{ $message }}</p>@enderror

                            </div>
                            <button type="submit"
                                class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-700 w-full">
                                Simpan
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
