<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Region;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function index()
    {
        $regions = Region::withCount('issues')->get();
        $issues = Issue::with(['comments.votes', 'votes', 'region'])->latest()->get();
        return view('issues.index', compact('issues', 'regions'));
    }

    public function show(Region $region)
    {
        $issues = Issue::where('region_id', $region->id)->with(['comments.votes', 'votes', 'region'])->latest()->get();

        return view('issues.show', compact('issues', 'region'));

        // $issues = Issue::with(['comments.votes', 'votes', 'region'])->latest()->get();
        // return view('issues.index', compact('issues'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'region_id' => 'required|exists:regions,id'
        ]);

        Issue::create($validated);

        return redirect()->back()
            ->with('success', 'Isu berhasil ditambahkan.');
    }

    public function vote(Request $request, Issue $issue)
    {
        $ip = $request->ip();

        // Check if user has voted in the last 5 minutes
        $recentVote = $issue->votes()
            ->where('ip_address', $ip)
            ->where('created_at', '>=', now()->subMinutes(100))
            ->exists();

        // if ($recentVote) {
        //     return response()->json([
        //         'message' => 'Anda harus menunggu 5 menit sebelum dapat memberikan vote lagi.'
        //     ], 429);
        // }
        if ($recentVote) {
            return response()->json([
                'message' => 'Anda sudah memberikan vote pada Isu Ini.'
            ], 429);
        }

        $issue->votes()->create(['ip_address' => $ip]);

        return response()->json([
            'message' => 'Vote berhasil ditambahkan',
            'votes_count' => $issue->votes()->count()
        ]);
    }
}
