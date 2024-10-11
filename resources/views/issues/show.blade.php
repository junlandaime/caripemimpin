@extends('layouts.app')

@section('title', 'Isu ' . $region->full_name . ' - Pilkada Jawa Barat')

@push('skrip')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TPRDHTM1M1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-TPRDHTM1M1');
    </script>
@endpush

@section('content')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Jajak Pendapat Isu {{ $region->full_name }}</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        <!-- Ketentuan dan Aturan -->
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-8">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-lg font-medium text-yellow-800">Ketentuan Pengiriman Isu</h3>
                    <div class="mt-2 text-sm text-yellow-700">
                        <p class="font-medium mb-2">Isu yang dikirimkan harus memenuhi kriteria berikut:</p>
                        <ul class="list-disc list-inside space-y-1">
                            {{-- <li>Berkaitan dengan wilayah Bandung Raya (Kota Bandung, Kab. Bandung, Kab. Bandung Barat, atau
                                Kota Cimahi)</li> --}}
                            <li>Berkaitan dengan wilayah {{ $region->full_name }}</li>
                            <li>Merupakan permasalahan nyata yang dapat diverifikasi kebenarannya</li>
                            <li>Tidak mengandung SARA, hoax, atau ujaran kebencian</li>
                            <li>Tidak bersifat fitnah atau pencemaran nama baik</li>
                            <li>Menggunakan bahasa yang sopan dan tidak mengandung kata-kata kasar</li>
                            <li>Tidak mengandung informasi pribadi pihak lain</li>
                            <li>Tidak bersifat promosi atau iklan</li>
                        </ul>
                        <p class="mt-4 font-medium text-red-600">Peringatan:</p>
                        <ul class="list-disc list-inside space-y-1 text-red-600">
                            <li>Isu yang melanggar ketentuan di atas akan dihapus oleh admin tanpa pemberitahuan</li>
                            <li>IP Address yang berulang kali mengirimkan isu melanggar ketentuan akan diblokir</li>
                            <li>Pelanggaran serius akan dilaporkan kepada pihak berwajib</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Form Tambah Isu -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4">Tambah Isu Baru</h2>
            <form action="{{ route('issues.store') }}" method="POST">
                @csrf
                <input id="region_id" name="region_id" type="hidden" value="{{ $region->id }}">
                <div class="space-y-4">

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Judul Isu</label>
                        <input type="text" name="title" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea name="description" rows="3" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                        Tambah Isu
                    </button>
                </div>
            </form>
        </div>

        <!-- Daftar Isu -->
        <div class="space-y-6">
            @foreach ($issues as $issue)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-semibold">{{ $issue->title }}</h3>
                            <p class="text-gray-600 mt-2">{{ $issue->description }}</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="text-lg font-semibold votes-count">{{ $issue->votes->count() }}</span>
                            <button onclick="voteIssue({{ $issue->id }})"
                                class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600">
                                Vote
                            </button>
                        </div>
                    </div>

                    <!-- Komentar -->
                    <div class="mt-4">
                        <h4 class="font-semibold">Komentar</h4>
                        <div class="space-y-2 mt-2">
                            @foreach ($issue->comments as $comment)
                                <div class="flex justify-between items-center bg-gray-50 p-2 rounded">
                                    <span>{{ $comment->content }}</span>
                                    <div class="flex items-center space-x-2">
                                        <span class="comment-votes-count">{{ $comment->votes->count() }}</span>
                                        <button onclick="voteComment({{ $comment->id }})"
                                            class="text-sm bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">
                                            Vote
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Form Tambah Komentar -->
                        <form action="{{ route('comments.store', $issue) }}" method="POST" class="mt-4">
                            @csrf
                            <div class="flex space-x-2">
                                <input type="text" name="content" required
                                    class="flex-1 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="Tambah komentar...">
                                <button type="submit"
                                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                                    Kirim
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <script>
        // Fungsi untuk menampilkan notifikasi
        function showNotification(message, isError = false) {
            const notification = document.createElement('div');
            notification.className =
                `fixed bottom-4 right-4 p-4 rounded-lg ${isError ? 'bg-red-500' : 'bg-green-500'} text-white`;
            notification.textContent = message;
            document.body.appendChild(notification);
            setTimeout(() => notification.remove(), 3000);
        }

        // Fungsi untuk vote isu
        async function voteIssue(issueId) {
            try {
                const response = await fetch(`/issues/${issueId}/vote`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();

                if (response.ok) {
                    const votesCount = document.querySelector(`#issue-${issueId} .votes-count`);
                    votesCount.textContent = data.votes_count;
                    showNotification(data.message);
                } else {
                    showNotification(data.message, true);
                }
            } catch (error) {
                showNotification('Terjadi kesalahan saat memproses vote', true);
            }
        }

        // Fungsi untuk vote komentar
        async function voteComment(commentId) {
            try {
                const response = await fetch(`/comments/${commentId}/vote`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();

                if (response.ok) {
                    const votesCount = document.querySelector(`#comment-${commentId} .comment-votes-count`);
                    votesCount.textContent = data.votes_count;
                    showNotification(data.message);
                } else {
                    showNotification(data.message, true);
                }
            } catch (error) {
                showNotification('Terjadi kesalahan saat memproses vote', true);
            }
        }
    </script>
@endsection
