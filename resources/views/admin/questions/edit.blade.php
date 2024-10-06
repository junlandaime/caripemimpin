@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Edit Question</h2>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.questions.update', $question) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="type">Question Type</label>
                        <select name="type" id="type" class="form-control @error('type') is-invalid @enderror">
                            <option value="identify" {{ $question->type == 'identify' ? 'selected' : '' }}>Identify</option>
                            <option value="write" {{ $question->type == 'write' ? 'selected' : '' }}>Write</option>
                        </select>
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="question">Question</label>
                        <input type="text" name="question" class="form-control @error('question') is-invalid @enderror"
                            value="{{ old('question', $question->question) }}">
                        @error('question')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3" id="options-container"
                        style="{{ $question->type == 'write' ? 'display: none;' : '' }}">
                        <label>Options</label>
                        <div class="options-wrapper">
                            @foreach ($question->options ?? [] as $key => $option)
                                <input type="text" name="options[]"
                                    class="form-control mb-2 @error('options.' . $key) is-invalid @enderror"
                                    placeholder="Option {{ $key + 1 }}" value="{{ old('options.' . $key, $option) }}">
                                @error('options.' . $key)
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="answer">Answer</label>
                        <input type="text" name="answer" class="form-control @error('answer') is-invalid @enderror"
                            value="{{ old('answer', $question->answer) }}">
                        @error('answer')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="region_id">Region</label>
                        <select name="region_id" class="form-control @error('region_id') is-invalid @enderror">
                            <option value="">Select Region</option>
                            @foreach ($regions as $region)
                                <option value="{{ $region->id }}"
                                    {{ old('region_id', $question->region_id) == $region->id ? 'selected' : '' }}>
                                    {{ $region->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('region_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update Question</button>
                    <a href="{{ route('admin.questions.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('type').addEventListener('change', function() {
            const optionsContainer = document.getElementById('options-container');
            if (this.value === 'write') {
                optionsContainer.style.display = 'none';
            } else {
                optionsContainer.style.display = 'block';
            }
        });
    </script>
@endsection
