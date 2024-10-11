<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Issue $issue)
    {
        $validated = $request->validate([
            'content' => 'required'
        ]);

        $issue->comments()->create([
            'content' => $validated['content'],
            'ip_address' => $request->ip()
        ]);

        return redirect()->back()
            ->with('success', 'Komentar berhasil ditambahkan.');
    }

    public function vote(Request $request, Comment $comment)
    {
        $ip = $request->ip();

        // Check if user has voted in the last 5 minutes
        $recentVote = $comment->votes()
            ->where('ip_address', $ip)
            ->where('created_at', '>=', now()->subMinutes(100000))
            ->exists();

        if ($recentVote) {
            return response()->json([
                'message' => 'Anda sudah memberikan vote pada komentar ini.'
            ], 429);
        }

        $comment->votes()->create(['ip_address' => $ip]);

        return response()->json([
            'message' => 'Vote berhasil ditambahkan',
            'votes_count' => $comment->votes()->count()
        ]);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back()->with('success', 'comment deleted successfully');
    }
}
