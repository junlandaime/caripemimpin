<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Region;
use App\Models\Question;
use App\Models\Candidate;
use App\Models\CommentVote;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        // Get upcoming elections
        // $upcomingElections = Candidate::select('region_id', 'position', 'election_date')
        //     ->distinct()
        //     ->where('election_date', '>', now())
        //     ->orderBy('election_date')
        //     ->take(5)
        //     ->get();

        // Get featured candidates
        $featuredCandidates = Candidate::inRandomOrder()
            ->take(4)
            ->get();

        // Get list of regions
        $regions = Region::inRandomOrder()
            ->with('pairs')
            ->get();

        // Get total candidates count
        $totalCandidates = Candidate::count();

        $topIssues = Issue::withCount('votes')
            ->with(['comments' => function ($query) {
                $query->withCount('votes')
                    ->orderByDesc(
                        CommentVote::selectRaw('count(*)')
                            ->whereColumn('comment_votes.comment_id', 'comments.id')
                    )
                    ->limit(1);
            }, 'region'])
            ->orderBy('votes_count', 'desc')
            ->take(3)
            ->get();

        return view('home', compact('featuredCandidates', 'regions', 'totalCandidates', 'topIssues'));
    }

    public function about()
    {
        // $regions = Region::withCount('candidates')->paginate(15);
        return view('about');
    }

    public function collab()
    {
        // $regions = Region::withCount('candidates')->paginate(15);
        return view('collab');
    }

    public function amki_salman()
    {
        // $regions = Region::withCount('candidates')->paginate(15);
        return view('amki_salman');
    }

    public function kuis()
    {
        $regions = Region::withCount('questions')->get();
        $questions = Question::inRandomOrder()->get();
        return view('quiz', compact('questions', 'regions'));
    }

    public function kuismulai(Region $region)
    {
        // $regions = Region::withCount('questions')->get();
        // $questions = Question::where('region_id', $region->id)->inRandomOrder()->get();

        $questions = Question::where('region_id', $region->id)->take(10)->inRandomOrder()->get()->map(function ($question) {
            // Ensure each question has an 'options' key, even if it's empty
            $question->options = $question->options ?: [];
            return $question;
        });

        return view('kuis', compact('questions', 'region'));
    }
}
