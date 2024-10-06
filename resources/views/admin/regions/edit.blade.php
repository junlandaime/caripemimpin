@extends('layouts.admin')

@section('title', 'Edit Wilayah')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6">Edit Wilayah: {{ $region->name }}</h1>

        <form action="{{ route('admin.regions.update', $region) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Basic Information -->
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Nama Wilayah
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                            id="name" type="text" name="name" value="{{ old('name', $region->name) }}" required>
                        @error('name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="type">
                            Tipe Wilayah
                        </label>
                        <select
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('type') border-red-500 @enderror"
                            id="type" name="type" required>
                            <option value="">Pilih Tipe Wilayah</option>
                            <option value="Kota" {{ old('type', $region->type) == 'Kota' ? 'selected' : '' }}>Kota
                            </option>
                            <option value="Kabupaten" {{ old('type', $region->type) == 'Kabupaten' ? 'selected' : '' }}>
                                Kabupaten</option>
                            <option value="Provinsi" {{ old('type', $region->type) == 'Provinsi' ? 'selected' : '' }}>
                                Provinsi</option>
                        </select>
                        @error('type')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Images -->
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="bendera">
                            Bendera
                        </label>
                        @if ($region->bendera)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $region->bendera) }}" class="h-32 w-auto">
                            </div>
                        @endif
                        <input type="file" name="bendera" id="bendera" class="w-full">
                        @error('bendera')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="lambang">
                            Lambang
                        </label>
                        @if ($region->lambang)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $region->lambang) }}" class="h-32 w-auto">
                            </div>
                        @endif
                        <input type="file" name="lambang" id="lambang" class="w-full">
                        @error('lambang')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Additional Information -->
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="julukan">
                            Julukan
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="julukan" name="julukan" rows="3">{{ old('julukan', $region->julukan) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="motto">
                            Motto
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="motto" type="text" name="motto" value="{{ old('motto', $region->motto) }}">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="lokasi">
                            Lokasi
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="lokasi" type="text" name="lokasi" value="{{ old('lokasi', $region->lokasi) }}">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="latitude">
                                Latitude
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="latitude" type="number" step="any" name="latitude"
                                value="{{ old('latitude', $region->latitude) }}">
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="longitude">
                                Longitude
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="longitude" type="number" step="any" name="longitude"
                                value="{{ old('longitude', $region->longitude) }}">
                        </div>
                    </div>

                    <!-- Government Information -->
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="kepdar">
                            Kepala Daerah
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="kepdar" type="text" name="kepdar" value="{{ old('kepdar', $region->kepdar) }}">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="wakepdar">
                            Wakil Kepala Daerah
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="wakepdar" type="text" name="wakepdar"
                            value="{{ old('wakepdar', $region->wakepdar) }}">
                    </div>

                    <!-- Submit Buttons -->
                    <div class="col-span-2 flex items-center justify-between mt-6">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Update Wilayah
                        </button>
                        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                            href="{{ route('admin.regions.index') }}">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

{{-- @extends('layouts.admin')

@section('title', 'Edit Wilayah')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6">Edit Wilayah: {{ $region->name }}</h1>

        <form action="{{ route('admin.regions.update', $region) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Nama Wilayah
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                        id="name" type="text" name="name" value="{{ old('name', $region->name) }}" required>
                    @error('name')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="type">
                        Tipe Wilayah
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('type') border-red-500 @enderror"
                        id="type" name="type" required>
                        <option value="Kota" {{ old('type', $region->type) == 'Kota' ? 'selected' : '' }}>Kota</option>
                        <option value="Kabupaten" {{ old('type', $region->type) == 'Kabupaten' ? 'selected' : '' }}>
                            Kabupaten</option>
                    </select>
                    @error('type')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="population">
                        Populasi
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('population') border-red-500 @enderror"
                        id="population" type="number" name="population"
                        value="{{ old('population', $region->population) }}" required>
                    @error('population')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="area">
                        Luas Wilayah (km²)
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('area') border-red-500 @enderror"
                        id="area" type="number" step="0.01" name="area" value="{{ old('area', $region->area) }}"
                        required>
                    @error('area')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                        Deskripsi
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror"
                        id="description" name="description" rows="4">{{ old('description', $region->description) }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Update Wilayah
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                        href="{{ route('admin.regions.index') }}">
                        Batal
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        // Tambahkan script JavaScript untuk validasi form client-side jika diperlukan
    </script>
@endpush --}}
