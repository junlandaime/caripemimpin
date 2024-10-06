<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Question;
use App\Models\Candidate;
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

        return view('home', compact('featuredCandidates', 'regions', 'totalCandidates'));
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

    public function cek()
    {
        // Get upcoming elections
        $upcomingElections = Candidate::select('region_id', 'position', 'election_date')
            ->distinct()
            ->where('election_date', '>', now())
            ->orderBy('election_date')
            ->take(5)
            ->get();

        // Get featured candidates
        $featuredCandidates = Candidate::inRandomOrder()
            ->take(4)
            ->get();

        // Get list of regions
        $regions = Region::all();

        // Get total candidates count
        $totalCandidates = Candidate::count();

        return view('cek', compact('upcomingElections', 'featuredCandidates', 'regions', 'totalCandidates'));
    }
}
