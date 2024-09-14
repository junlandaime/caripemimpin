@extends('layouts.app')

@section('title', 'PilihBandung: Swipe Right for Your Future!')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-purple-600 to-indigo-600">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover mix-blend-overlay"
                src="https://images.unsplash.com/photo-1555899434-94d1368aa7af?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                alt="Bandung Cityscape">
        </div>
        <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">PilihBandung</h1>
            <p class="mt-6 text-xl text-purple-100 max-w-3xl mx-auto">Swipe right for your future! Discover Bandung's next
                leaders and make your voice heard.</p>
            <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                    <a href="#"
                        class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-purple-700 bg-white hover:bg-purple-50 sm:px-8">
                        Meet Candidates
                    </a>
                    <a href="#"
                        class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-purple-500 hover:bg-purple-600 sm:px-8">
                        Take the Quiz
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Candidate Swiper Section -->
    <div class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-8">Swipe Your Way to Democracy</h2>
            <div id="candidate-swiper"></div>
        </div>
    </div>

    <!-- Interactive Quiz Section -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-8">What Kind of Leader Are You?</h2>
            <div id="leadership-quiz"></div>
        </div>
    </div>

    <!-- Social Media Integration -->
    <div class="bg-gradient-to-r from-pink-500 to-purple-500 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-white mb-8">Join the Conversation</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4">Instagram Challenge</h3>
                    <p class="mb-4">Share your vision for Bandung with #BandungMuda</p>
                    <a href="#" class="text-purple-600 hover:underline">#BandungMuda Feed</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4">TikTok Your Vote</h3>
                    <p class="mb-4">Create a TikTok explaining why voting matters</p>
                    <a href="#" class="text-purple-600 hover:underline">Watch TikToks</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4">Twitter Debates</h3>
                    <p class="mb-4">Join live Twitter debates with candidates</p>
                    <a href="#" class="text-purple-600 hover:underline">Upcoming Debates</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Gamification Section -->
    <div class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-8">Level Up Your Civic Engagement</h2>
            <div id="civic-engagement-game"></div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-2xl font-bold">PilihBandung</h3>
                    <p>Empowering Bandung's youth to shape their future</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-2">Quick Links</h4>
                    <ul>
                        <li><a href="#" class="hover:underline">About Us</a></li>
                        <li><a href="#" class="hover:underline">Contact</a></li>
                        <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 text-center">
                <p>&copy; 2023 PilihBandung. All rights reserved.</p>
            </div>
        </div>
    </footer>
@endsection

@push('scripts')
    <script src="https://unpkg.com/react@17/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
    <script type="text/babel">
        // Candidate Swiper Component
        function CandidateSwiper() {
            const [candidates, setCandidates] = React.useState([
                { id: 1, name: "Rina Gunawan", slogan: "Bandung Kreatif", image: "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" },
                { id: 2, name: "Arief Widodo", slogan: "Bandung Cerdas", image: "https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" },
                { id: 3, name: "Siti Nurhaliza", slogan: "Bandung Sehat", image: "https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" },
            ]);
            const [currentIndex, setCurrentIndex] = React.useState(0);

            const handleSwipe = (direction) => {
                if (direction === 'right') {
                    console.log(`Liked ${candidates[currentIndex].name}`);
                } else {
                    console.log(`Passed on ${candidates[currentIndex].name}`);
                }
                setCurrentIndex((prevIndex) => (prevIndex + 1) % candidates.length);
            };

            return (
                <div className="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src={candidates[currentIndex].image} alt={candidates[currentIndex].name} className="w-full h-64 object-cover"/>
                    <div className="p-4">
                        <h3 className="font-bold text-xl mb-2">{candidates[currentIndex].name}</h3>
                        <p className="text-gray-700">{candidates[currentIndex].slogan}</p>
                    </div>
                    <div className="flex justify-around p-4">
                        <button onClick={() => handleSwipe('left')} className="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                            Pass
                        </button>
                        <button onClick={() => handleSwipe('right')} className="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                            Like
                        </button>
                    </div>
                </div>
            );
        }

        ReactDOM.render(<CandidateSwiper />, document.getElementById('candidate-swiper'));

        // Leadership Quiz Component
        function LeadershipQuiz() {
            const [currentQuestion, setCurrentQuestion] = React.useState(0);
            const [showResult, setShowResult] = React.useState(false);
            const [score, setScore] = React.useState(0);

            const questions = [
                {
                    question: "How would you approach city development?",
                    answers: ["Focus on infrastructure", "Prioritize education", "Boost local businesses", "Improve healthcare"],
                },
                {
                    question: "What's your stance on environmental policies?",
                    answers: ["Strict regulations", "Incentivize green practices", "Focus on renewable energy", "Improve waste management"],
                },
                {
                    question: "How would you address youth unemployment?",
                    answers: ["Vocational training programs", "Attract more companies", "Support startups", "Internship initiatives"],
                },
            ];

            const handleAnswer = (answer) => {
                setScore(score + 1);
                const nextQuestion = currentQuestion + 1;
                if (nextQuestion < questions.length) {
                    setCurrentQuestion(nextQuestion);
                } else {
                    setShowResult(true);
                }
            };

            return (
                <div className="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden p-6">
                    {showResult ? (
                        <div>
                            <h3 className="font-bold text-xl mb-4">Quiz Complete!</h3>
                            <p>You answered {score} out of {questions.length} questions.</p>
                            <p className="mt-4">Based on your answers, you might be interested in local politics! Check out our candidate profiles to learn more.</p>
                        </div>
                    ) : (
                        <div>
                            <h3 className="font-bold text-xl mb-4">{questions[currentQuestion].question}</h3>
                            <ul>
                                {questions[currentQuestion].answers.map((answer, index) => (
                                    <li key={index} className="mb-2">
                                        <button
                                            onClick={() => handleAnswer(answer)}
                                            className="w-full text-left bg-purple-100 hover:bg-purple-200 py-2 px-4 rounded"
                                        >
                                            {answer}
                                        </button>
                                    </li>
                                ))}
                            </ul>
                        </div>
                    )}
                </div>
            );
        }

        ReactDOM.render(<LeadershipQuiz />, document.getElementById('leadership-quiz'));

        // Civic Engagement Game Component
        function CivicEngagementGame() {
            const [points, setPoints] = React.useState(0);
            const [level, setLevel] = React.useState(1);

            const handleAction = (action) => {
                let pointsEarned = 0;
                switch(action) {
                    case 'vote':
                        pointsEarned = 100;
                        break;
                    case 'volunteer':
                        pointsEarned = 50;
                        break;
                    case 'share':
                        pointsEarned = 10;
                        break;
                }
                const newPoints = points + pointsEarned;
                setPoints(newPoints);
                setLevel(Math.floor(newPoints / 100) + 1);
            };

            return (
                <div className="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden p-6">
                    <h3 className="font-bold text-xl mb-4">Civic Engagement Game</h3>
                    <p className="mb-4">Level: {level} | Points: {points}</p>
                    <div className="space-y-4">
                        <button onClick={() => handleAction('vote')} className="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                            Cast Your Vote (+100 points)
                        </button>
                        <button onClick={() => handleAction('volunteer')} className="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                            Volunteer for a Campaign (+50 points)
                        </button>
                        <button onClick={() => handleAction('share')} className="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                            Share on Social Media (+10 points)
                        </button>
                    </div>
                </div>
            );
        }

        ReactDOM.render(<CivicEngagementGame />, document.getElementById('civic-engagement-game'));
        function CandidateComparison() {
            const [candidates, setCandidates] = React.useState([
                { id: 1, name: "Rina Gunawan", education: "S2 Administrasi Publik", experience: "10 tahun di DPRD", vision: "Bandung Kreatif dan Inovatif" },
                { id: 2, name: "Arief Widodo", education: "S3 Ekonomi", experience: "CEO Startup Teknologi", vision: "Bandung Smart City" },
                { id: 3, name: "Siti Nurhaliza", education: "S2 Lingkungan", experience: "Aktivis Lingkungan", vision: "Bandung Hijau dan Sehat" },
            ]);
            const [selectedCandidates, setSelectedCandidates] = React.useState([]);

            const handleSelectCandidate = (candidateId) => {
                const candidate = candidates.find(c => c.id === candidateId);
                if (selectedCandidates.length < 2 && !selectedCandidates.includes(candidate)) {
                    setSelectedCandidates([...selectedCandidates, candidate]);
                }
            };

            const handleResetComparison = () => {
                setSelectedCandidates([]);
            };

            return (
                <div className="mt-8">
                    <h3 className="text-2xl font-bold mb-4">Bandingkan Calon</h3>
                    <div className="grid grid-cols-3 gap-4 mb-4">
                        {candidates.map(candidate => (
                            <button
                                key={candidate.id}
                                onClick={() => handleSelectCandidate(candidate.id)}
                                className="bg-purple-100 hover:bg-purple-200 py-2 px-4 rounded"
                            >
                                {candidate.name}
                            </button>
                        ))}
                    </div>
                    {selectedCandidates.length === 2 && (
                        <div className="grid grid-cols-2 gap-4">
                            {selectedCandidates.map(candidate => (
                                <div key={candidate.id} className="bg-white p-4 rounded-lg shadow">
                                    <h4 className="font-bold text-lg mb-2">{candidate.name}</h4>
                                    <p><strong>Pendidikan:</strong> {candidate.education}</p>
                                    <p><strong>Pengalaman:</strong> {candidate.experience}</p>
                                    <p><strong>Visi:</strong> {candidate.vision}</p>
                                </div>
                            ))}
                        </div>
                    )}
                    {selectedCandidates.length === 2 && (
                        <button
                            onClick={handleResetComparison}
                            className="mt-4 bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded"
                        >
                            Reset Perbandingan
                        </button>
                    )}
                </div>
            );
        }

        ReactDOM.render(<CandidateComparison />, document.getElementById('candidate-comparison'));

        // Interactive Timeline Component
        function ElectionTimeline() {
            const events = [
                { date: "1 September 2023", event: "Pendaftaran Calon Dibuka" },
                { date: "15 Oktober 2023", event: "Debat Kandidat Pertama" },
                { date: "1 November 2023", event: "Kampanye Dimulai" },
                { date: "15 Desember 2023", event: "Debat Kandidat Terakhir" },
                { date: "14 Februari 2024", event: "Hari Pemilihan" },
            ];

            return (
                <div className="mt-8">
                    <h3 className="text-2xl font-bold mb-4">Timeline Pemilu</h3>
                    <div className="relative">
                        <div className="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-purple-200"></div>
                        {events.map((event, index) => (
                            <div key={index} className={`relative mb-8 ${index % 2 === 0 ? 'left-1/2 pl-8' : 'right-1/2 pr-8 text-right'}`}>
                                <div className="absolute top-0 -mt-1 rounded-full w-4 h-4 bg-purple-500"></div>
                                <div className="bg-white p-4 rounded-lg shadow">
                                    <h4 className="font-bold">{event.date}</h4>
                                    <p>{event.event}</p>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            );
        }

        ReactDOM.render(<ElectionTimeline />, document.getElementById('election-timeline'));

        // Virtual Town Hall Component
        function VirtualTownHall() {
            const [messages, setMessages] = React.useState([]);
            const [newMessage, setNewMessage] = React.useState('');

            const handleSubmitMessage = (e) => {
                e.preventDefault();
                if (newMessage.trim()) {
                    setMessages([...messages, { user: 'Anda', text: newMessage }]);
                    setNewMessage('');
                    // Simulate a response from a candidate (in a real app, this would be more complex)
                    setTimeout(() => {
                        setMessages(prevMessages => [...prevMessages, { user: 'Calon', text: 'Terima kasih atas pertanyaan Anda. Kami akan mempertimbangkan masukan ini dalam program kami.' }]);
                    }, 1000);
                }
            };

            return (
                <div className="mt-8">
                    <h3 className="text-2xl font-bold mb-4">Virtual Town Hall</h3>
                    <div className="bg-white p-4 rounded-lg shadow">
                        <div className="h-64 overflow-y-auto mb-4">
                            {messages.map((message, index) => (
                                <div key={index} className={`mb-2 ${message.user === 'Anda' ? 'text-right' : 'text-left'}`}>
                                    <span className="font-bold">{message.user}:</span> {message.text}
                                </div>
                            ))}
                        </div>
                        <form onSubmit={handleSubmitMessage} className="flex">
                            <input
                                type="text"
                                value={newMessage}
                                onChange={(e) => setNewMessage(e.target.value)}
                                placeholder="Tulis pertanyaan atau komentar Anda..."
                                className="flex-grow mr-2 p-2 border rounded"
                            />
                            <button type="submit" className="bg-purple-500 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded">
                                Kirim
                            </button>
                        </form>
                    </div>
                </div>
            );
        }

        ReactDOM.render(<VirtualTownHall />, document.getElementById('virtual-town-hall'));
    </script>
@endpush
