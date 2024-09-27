@extends('layouts.admin')

@section('title', 'Edit Pasangan')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6">Edit Pasangan: Nomor Urut {{ $pair->nomor_urut }}</h1>

        <form action="{{ route('admin.pairs.update', $pair) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nomor_urut">
                        Nomor Urut Pasangan
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nomor_urut') border-red-500 @enderror"
                        id="nomor_urut" name="nomor_urut" required>
                        <option value="">Pilih Nomor Urut Pasangan</option>
                        <option value="1" {{ old('nomor_urut', $pair->nomor_urut) == '1' ? 'selected' : '' }}>1
                        </option>
                        <option value="2" {{ old('nomor_urut', $pair->nomor_urut) == '2' ? 'selected' : '' }}>2
                        </option>
                        <option value="3" {{ old('nomor_urut', $pair->nomor_urut) == '3' ? 'selected' : '' }}>3
                        </option>
                        <option value="4" {{ old('nomor_urut', $pair->nomor_urut) == '4' ? 'selected' : '' }}>4
                        </option>
                        <option value="5" {{ old('nomor_urut', $pair->nomor_urut) == '5' ? 'selected' : '' }}>5
                        </option>
                    </select>
                    @error('nomor_urut')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="region_id">
                        Bupati/Walikota/Gubernur
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('region_id') border-red-500 @enderror"
                        id="pemimpin_id" name="pemimpin_id" required>
                        <option value="">Pilih Bupati/Walikota/Gubernur</option>
                        @foreach ($candidates as $candidate)
                            <option value="{{ $candidate->id }}"
                                {{ old('pemimpin_id', $pair->pemimpin->id) == $candidate->id ? 'selected' : '' }}>
                                {{ $candidate->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('pemimpin_id')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="region_id">
                        Wakil Bupati/Walikota/Gubernur
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('region_id') border-red-500 @enderror"
                        id="wakil_id" name="wakil_id" required>
                        <option value="">Pilih wakil</option>
                        @foreach ($candidates as $candidate)
                            <option value="{{ $candidate->id }}"
                                {{ old('wakil_id', $pair->wakil->id) == $candidate->id ? 'selected' : '' }}>
                                {{ $candidate->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('wakil_id')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="party">
                        Partai
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('party') border-red-500 @enderror"
                        id="party" type="text" name="party" value="{{ old('party', $pair->party) }}" required>
                    @error('party')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="region_id">
                        Wilayah
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('region_id') border-red-500 @enderror"
                        id="region_id" name="region_id" required>
                        <option value="">Pilih Wilayah</option>
                        @foreach ($regions as $region)
                            <option value="{{ $region->id }}"
                                {{ old('region_id', $pair->region->id) == $region->id ? 'selected' : '' }}>
                                {{ $region->type }} - {{ $region->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('region_id')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="photo">
                        Foto
                    </label>
                    @if ($pair->image_url)
                        <img src="{{ asset('storage/' . $pair->image_url) }}" alt="{{ $pair->name }}"
                            class="mb-2 w-32 h-32 object-cover">
                    @endif
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('photo') border-red-500 @enderror"
                        id="photo" type="file" name="photo" accept="image/*">
                    <p class="text-gray-600 text-xs italic mt-1">Biarkan kosong jika tidak ingin mengubah foto.</p>
                    @error('photo')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="short_bio">
                        Biografi Singkat
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('short_bio') border-red-500 @enderror"
                        id="short_bio" name="short_bio" rows="3">{{ old('short_bio', $pair->short_bio) }}</textarea>
                    @error('short_bio')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="full_bio">
                        Biografi Lengkap
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('full_bio') border-red-500 @enderror"
                        id="full_bio" name="full_bio" rows="6">{{ old('full_bio', $pair->full_bio) }}</textarea>
                    @error('full_bio')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="visi">
                        Visi
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('visi') border-red-500 @enderror"
                        id="visi" name="visi" rows="6">{{ old('visi', $pair->visi) }}</textarea>
                    @error('visi')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="misi">
                        Misi
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('misi') border-red-500 @enderror"
                        id="misi" name="misi" rows="6">{{ old('misi', $pair->misi) }}</textarea>
                    @error('misi')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="election_date">
                        Tanggal Pemilihan
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('election_date') border-red-500 @enderror"
                        id="election_date" type="date" name="election_date"
                        value="{{ old('election_date', $pair->election_date->format('Y-m-d')) }}" required>
                    @error('election_date')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Update Pasangan
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                        href="{{ route('admin.pairs.index') }}">
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
@endpush
