@extends('layouts.app')

@section('title', 'Kuis Kuis - Pilkada Jawa Barat')

@section('content')

    <body class="font-sans bg-gray-100 lg:px-36">
        <main class="container mx-auto px-4 py-8">
            <nav class="text-sm breadcrumbs mb-8">
                <ul class="flex space-x-2">
                    <li><a href="{{ route('home') }}" class="text-blue-600 hover:underline">Beranda</a></li>
                    <li class="before:content-['/'] before:mx-2"><a href="{{ route('kuis') }}"
                            class="text-blue-600 hover:underline">Daftar Kuis</a></li>
                    <li class="before:content-['/'] before:mx-2">Kuis {{ $region->full_name }}</li>
                </ul>
            </nav>

            <h1 class="text-4xl font-bold mb-8 text-center text-primary">Kuis tentang Pemilu dan {{ $region->full_name }}
            </h1>

            <div x-data="quizApp()" class="bg-white p-8 rounded-lg shadow-lg">
                <div x-show="!quizStarted" class="text-center">
                    <p class="text-xl mb-6">Selamat datang di Kuis Pemilu dan {{ $region->full_name }}! Uji pengetahuan Anda
                        tentang
                        Pemilu dan {{ $region->full_name }}.</p>
                    <button @click="startQuiz"
                        class="bg-primary text-white px-6 py-2 rounded hover:bg-secondary transition duration-300">Mulai
                        Kuis</button>
                </div>

                <div x-show="quizStarted && !quizFinished">
                    <div class="mb-8 text-center">
                        <p class="text-2xl mb-4">Pertanyaan <span x-text="currentQuestionIndex + 1"></span> dari <span
                                x-text="questions.length"></span></p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full"
                                :style="`width: ${(currentQuestionIndex + 1) / questions.length * 100}%`"></div>
                        </div>
                    </div>

                    <div class="text-center mb-8">
                        <p class="text-xl mb-4" x-text="currentQuestion.question"></p>
                        <p x-show="currentQuestion.type === 'identify'" class="font-arabic text-6xl mb-6"
                            x-text="currentQuestion.letter"></p>
                        <div x-show="currentQuestion.type === 'write'" class="mb-6">
                            <input type="text" x-model="userAnswer"
                                class="border-2 border-gray-300 p-2 rounded text-center font-arabic text-2xl"
                                placeholder="Ketik huruf Arab di sini">
                        </div>
                    </div>

                    <div x-show="currentQuestion.type === 'identify'" class="grid grid-cols-2 gap-4">
                        <template x-for="option in currentQuestion.options" :key="index">
                            <button @click="selectAnswer(option)"
                                class="bg-primary text-white py-2 px-4 rounded hover:bg-secondary transition duration-300"
                                x-text="option"></button>
                        </template>
                    </div>

                    {{-- <div x-show="currentQuestion.type === 'identify'" class="grid grid-cols-2 gap-4">
                        <template x-for="(option, index) in currentQuestion.options" :key="index">
                            <button @click="selectAnswer(option)"
                                class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-300"
                                x-text="option"></button>
                        </template>
                    </div> --}}


                    <div x-show="currentQuestion.type === 'write'" class="text-center">
                        <button @click="submitAnswer"
                            class="bg-blue-500 text-white py-2 px-6 rounded hover:bg-blue-600 transition duration-300">Submit</button>
                    </div>

                    <div x-show="showFeedback" class="mt-6 text-center">
                        <p x-text="feedbackMessage" :class="isCorrect ? 'text-green-600' : 'text-red-600'"></p>
                        <button @click="nextQuestion"
                            class="mt-4 bg-green-500 text-white py-2 px-6 rounded hover:bg-green-600 transition duration-300">Pertanyaan
                            Selanjutnya</button>
                    </div>
                </div>

                <div x-show="quizFinished" class="text-center">
                    <h2 class="text-2xl font-bold mb-4">Kuis Selesai!</h2>
                    <p class="text-xl mb-4">Skor Anda: <span x-text="score"></span> dari <span
                            x-text="questions.length"></span></p>
                    <button @click="restartQuiz"
                        class="bg-blue-500 text-white py-2 px-6 rounded hover:bg-blue-600 transition duration-300">Ulangi
                        Kuis</button>
                    <div class="bg-yellow-400 text-gray-900 my-10 py-2 px-4 rounded-full font-bold text-sm cursor-pointer select-none transform hover:scale-110 transition-transform duration-200"
                        @click="confetti();">
                        Rayakan
                    </div>
                </div>
            </div>
        </main>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
        <script>
            initParallax() {
                    const scene = document.getElementById('scene');
                    new Parallax(scene);
                },

                confetti() {
                    confetti({
                        particleCount: 100,
                        spread: 70,
                        origin: {
                            y: 0.6
                        }
                    });
                }
        </script>
        <script>
            // function quizApp() {
            //     return {
            //         questions: @json($questions),
            //         currentQuestionIndex: 0,
            //         score: 0,
            //         quizStarted: false,
            //         quizFinished: false,
            //         showFeedback: false,
            //         feedbackMessage: '',
            //         isCorrect: false,
            //         userAnswer: '',

            //         get currentQuestion() {
            //             return this.questions[this.currentQuestionIndex];
            //         },

            //         startQuiz() {
            //             this.quizStarted = true;
            //             this.shuffleQuestions();
            //         },

            //         shuffleQuestions() {
            //             for (let i = this.questions.length - 1; i > 0; i--) {
            //                 const j = Math.floor(Math.random() * (i + 1));
            //                 [this.questions[i], this.questions[j]] = [this.questions[j], this.questions[i]];
            //             }
            //         },

            //         // selectAnswer(selected) {
            //         //     this.checkAnswer(selected);
            //         // },

            //         selectAnswer(selected) {
            //             if (this.currentQuestion.type === 'identify') {
            //                 this.checkAnswer(selected);
            //             }
            //         },
            //         submitAnswer() {
            //             this.checkAnswer(this.userAnswer);
            //         },

            //         checkAnswer(userAnswer) {
            //             const correct = userAnswer.toLowerCase() === this.currentQuestion.answer.toLowerCase();
            //             this.isCorrect = correct;
            //             this.showFeedback = true;
            //             this.feedbackMessage = correct ? "Benar!" :
            //                 `Maaf, jawaban belum benar`;
            //             if (correct) this.score++;
            //         },

            //         nextQuestion() {
            //             this.showFeedback = false;
            //             this.userAnswer = '';
            //             if (this.currentQuestionIndex < this.questions.length - 1) {
            //                 this.currentQuestionIndex++;
            //             } else {
            //                 this.quizFinished = true;
            //             }
            //         },

            //         restartQuiz() {
            //             this.currentQuestionIndex = 0;
            //             this.score = 0;
            //             this.quizFinished = false;
            //             this.showFeedback = false;
            //             this.userAnswer = '';
            //             this.shuffleQuestions();
            //         }


            //     }

            // }

            function quizApp() {
                return {
                    questions: @json($questions),
                    currentQuestionIndex: 0,
                    score: 0,
                    quizStarted: false,
                    quizFinished: false,
                    userAnswer: '',

                    get currentQuestion() {
                        return this.questions[this.currentQuestionIndex];
                    },

                    startQuiz() {
                        this.quizStarted = true;
                        this.shuffleQuestions();
                    },

                    shuffleQuestions() {
                        for (let i = this.questions.length - 1; i > 0; i--) {
                            const j = Math.floor(Math.random() * (i + 1));
                            [this.questions[i], this.questions[j]] = [this.questions[j], this.questions[i]];
                        }
                    },

                    selectAnswer(selected) {
                        if (this.currentQuestion.type === 'identify') {
                            this.checkAnswerAndProgress(selected);
                        }
                    },

                    submitAnswer() {
                        this.checkAnswerAndProgress(this.userAnswer);
                    },

                    checkAnswerAndProgress(userAnswer) {
                        const correct = userAnswer.toLowerCase() === this.currentQuestion.answer.toLowerCase();
                        if (correct) this.score++;

                        if (this.currentQuestionIndex < this.questions.length - 1) {
                            this.currentQuestionIndex++;
                            this.userAnswer = '';
                        } else {
                            this.quizFinished = true;
                        }
                    },

                    restartQuiz() {
                        this.currentQuestionIndex = 0;
                        this.score = 0;
                        this.quizFinished = false;
                        this.userAnswer = '';
                        this.shuffleQuestions();
                    }
                }
            }
        </script>
    @endsection
