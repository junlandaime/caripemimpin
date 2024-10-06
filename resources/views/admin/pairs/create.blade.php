@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create New Pair</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.pairs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="nomor_urut">Nomor Urut</label>
                        <select name="nomor_urut" class="form-control @error('nomor_urut') is-invalid @enderror">
                            @foreach (['1', '2', '3', '4', '5'] as $number)
                                <option value="{{ $number }}" {{ old('nomor_urut') == $number ? 'selected' : '' }}>
                                    {{ $number }}
                                </option>
                            @endforeach
                        </select>
                        @error('nomor_urut')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="party">Party</label>
                        <input type="text" name="party" class="form-control @error('party') is-invalid @enderror"
                            value="{{ old('party') }}">
                        @error('party')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="region_id">Region</label>
                        <select name="region_id" class="form-control @error('region_id') is-invalid @enderror">
                            @foreach ($regions as $region)
                                <option value="{{ $region->id }}" {{ old('region_id') == $region->id ? 'selected' : '' }}>
                                    {{ $region->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('region_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="pemimpin_id">Pemimpin</label>
                        <select name="pemimpin_id" class="form-control @error('pemimpin_id') is-invalid @enderror">
                            @foreach ($candidates as $candidate)
                                <option value="{{ $candidate->id }}"
                                    {{ old('pemimpin_id') == $candidate->id ? 'selected' : '' }}>
                                    {{ $candidate->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('pemimpin_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="wakil_id">Wakil</label>
                        <select name="wakil_id" class="form-control @error('wakil_id') is-invalid @enderror">
                            @foreach ($candidates as $candidate)
                                <option value="{{ $candidate->id }}"
                                    {{ old('wakil_id') == $candidate->id ? 'selected' : '' }}>
                                    {{ $candidate->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('wakil_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="short_bio">Short Bio</label>
                        <textarea name="short_bio" class="form-control @error('short_bio') is-invalid @enderror">{{ old('short_bio') }}</textarea>
                        @error('short_bio')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="full_bio">Full Bio</label>
                        <textarea name="full_bio" class="form-control @error('full_bio') is-invalid @enderror">{{ old('full_bio') }}</textarea>
                        @error('full_bio')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="visi">Visi</label>
                        <textarea name="visi" class="form-control @error('visi') is-invalid @enderror">{{ old('visi') }}</textarea>
                        @error('visi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="misi">Misi</label>
                        <textarea name="misi" class="form-control @error('misi') is-invalid @enderror">{{ old('misi') }}</textarea>
                        @error('misi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="election_date">Election Date</label>
                        <input type="date" name="election_date"
                            class="form-control @error('election_date') is-invalid @enderror"
                            value="{{ old('election_date') }}">
                        @error('election_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Create Pair</button>
                    <a href="{{ route('admin.pairs.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

{{-- @extends('layouts.admin')

@section('title', 'Tambah Pasangan Baru')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6">Tambah Pasangan Baru</h1>

        <form action="{{ route('admin.pairs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nomor_urut">
                        Nomor Urut Pasangan
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nomor_urut') border-red-500 @enderror"
                        id="nomor_urut" name="nomor_urut" required>
                        <option value="">Pilih Nomor Urut Pasangan</option>
                        <option value="1" {{ old('nomor_urut') == '1' ? 'selected' : '' }}>1</option>
                        <option value="2" {{ old('nomor_urut') == '2' ? 'selected' : '' }}>2</option>
                        <option value="3" {{ old('nomor_urut') == '3' ? 'selected' : '' }}>3</option>
                        <option value="4" {{ old('nomor_urut') == '4' ? 'selected' : '' }}>4</option>
                        <option value="5" {{ old('nomor_urut') == '5' ? 'selected' : '' }}>5</option>
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
                                {{ old('pemimpin_id') == $candidate->id ? 'selected' : '' }}>
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
                                {{ old('wakil_id') == $candidate->id ? 'selected' : '' }}>
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
                        id="party" type="text" name="party" value="{{ old('party') }}" required>
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
                            <option value="{{ $region->id }}" {{ old('region_id') == $region->id ? 'selected' : '' }}>
                                {{ $region->type }} -
                                {{ $region->name }}
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
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('photo') border-red-500 @enderror"
                        id="photo" type="file" name="photo" accept="image/*">
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
                        id="short_bio" name="short_bio" rows="3">{{ old('short_bio') }}</textarea>
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
                        id="full_bio" name="full_bio" rows="6">{{ old('full_bio') }}</textarea>
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
                        id="visi" name="visi" rows="6">{{ old('visi') }}</textarea>
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
                        id="misi" name="misi" rows="6">{{ old('misi') }}</textarea>
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
                        id="election_date" type="date" name="election_date" value="{{ old('election_date') }}"
                        required>
                    @error('election_date')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Simpan Pasangan
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
@endpush --}}
