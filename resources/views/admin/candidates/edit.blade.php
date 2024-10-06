@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Edit Candidate</h1>
        <form action="{{ route('admin.candidates.update', $candidate) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="prename">Prename</label>
                <input type="text" name="prename" id="prename" class="form-control"
                    value="{{ old('prename', $candidate->prename) }}">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control"
                    value="{{ old('name', $candidate->name) }}" required>
            </div>
            <div class="form-group">
                <label for="aftername">Aftername</label>
                <input type="text" name="aftername" id="aftername" class="form-control"
                    value="{{ old('aftername', $candidate->aftername) }}">
            </div>
            <div class="form-group">
                <label for="ttl">TTL</label>
                <input type="text" name="ttl" id="ttl" class="form-control"
                    value="{{ old('ttl', $candidate->ttl) }}">
            </div>
            <div class="form-group">
                <label for="domisili">Domisili</label>
                <input type="text" name="domisili" id="domisili" class="form-control"
                    value="{{ old('domisili', $candidate->domisili) }}">
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" name="agama" id="agama" class="form-control"
                    value="{{ old('agama', $candidate->agama) }}" required>
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" name="position" id="position" class="form-control"
                    value="{{ old('position', $candidate->position) }}" required>
            </div>
            <div class="form-group">
                <label for="partai">Partai</label>
                <input type="text" name="partai" id="partai" class="form-control"
                    value="{{ old('partai', $candidate->partai) }}" required>
            </div>
            <div class="form-group">
                <label for="region_id">Region</label>
                <select name="region_id" id="region_id" class="form-control" required>
                    @foreach ($regions as $region)
                        <option value="{{ $region->id }}" {{ $candidate->region_id == $region->id ? 'selected' : '' }}>
                            {{ $region->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="riwayatpen">Riwayat Pendidikan</label>
                <textarea name="riwayatpen" id="riwayatpen" class="form-control">{{ old('riwayatpen', $candidate->riwayatpen) }}</textarea>
            </div>
            <div class="form-group">
                <label for="prestasi">Prestasi</label>
                <textarea name="prestasi" id="prestasi" class="form-control">{{ old('prestasi', $candidate->prestasi) }}</textarea>
            </div>
            <div class="form-group">
                <label for="karir">Karir</label>
                <textarea name="karir" id="karir" class="form-control">{{ old('karir', $candidate->karir) }}</textarea>
            </div>
            <div class="form-group">
                <label for="akun">Akun</label>
                <input type="text" name="akun" id="akun" class="form-control"
                    value="{{ old('akun', $candidate->akun) }}">
            </div>
            <div class="form-group">
                <label for="nominal">Nominal</label>
                <input type="text" name="nominal" id="nominal" class="form-control"
                    value="{{ old('nominal', $candidate->nominal) }}">
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control-file">
                @if ($candidate->foto)
                    <img src="{{ asset('storage/' . $candidate->foto) }}" alt="{{ $candidate->name }}" class="mt-2"
                        style="max-width: 200px;">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

{{-- @extends('layouts.admin')

@section('title', 'Edit Kandidat')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6">Edit Kandidat: {{ $candidate->name }}</h1>

        <form action="{{ route('admin.candidates.update', $candidate) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Nama
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                        id="name" type="text" name="name" value="{{ old('name', $candidate->name) }}" required>
                    @error('name')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="position">
                        Posisi
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('position') border-red-500 @enderror"
                        id="position" type="text" name="position" value="{{ old('position', $candidate->position) }}"
                        required>
                    @error('position')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="party">
                        Partai
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('party') border-red-500 @enderror"
                        id="party" type="text" name="party" value="{{ old('party', $candidate->party) }}" required>
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
                                {{ old('region_id', $candidate->region_id) == $region->id ? 'selected' : '' }}>
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
                    @if ($candidate->image_url)
                        <img src="{{ asset('storage/' . $candidate->image_url) }}" alt="{{ $candidate->name }}"
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
                        id="short_bio" name="short_bio" rows="3">{{ old('short_bio', $candidate->short_bio) }}</textarea>
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
                        id="full_bio" name="full_bio" rows="6">{{ old('full_bio', $candidate->full_bio) }}</textarea>
                    @error('full_bio')
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
                        value="{{ old('election_date', $candidate->election_date->format('Y-m-d')) }}" required>
                    @error('election_date')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Update Kandidat
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                        href="{{ route('admin.candidates.index') }}">
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
