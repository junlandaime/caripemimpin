<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Candidate;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CandidateView;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{
    /**
     * Display a listing of the candidates.
     */

    public function index()
    {
        $candidates = Candidate::with('region')->get();
        $regions = Region::all();
        $positions = Candidate::distinct('position')->pluck('position');
        $parties = Candidate::distinct('partai')->pluck('partai');

        return view('admin.candidates.index', compact('candidates', 'regions', 'positions', 'parties'));
    }

    public function frontindex(Request $request)
    {
        $region = $request->query('region');
        $candidates = Candidate::when($region, function ($query, $region) {
            return $query->byRegion($region);
        })
            // ->upcoming()
            ->inRandomOrder()
            // ->orderBy('name', 'ASC')
            ->paginate(12);

        $regions = Region::all();
        return view('candidates.index', compact('candidates', 'regions'));
    }

    public function create()
    {
        $regions = Region::all();
        return view('admin.candidates.create', compact('regions'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'party' => 'required|max:255',
            'region_id' => 'required|exists:regions,id',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'short_bio' => 'required',
            'full_bio' => 'required',
            'election_date' => 'required|date',
        ]);

        if ($request->hasFile('photo')) {
            $validatedData['image_url'] = $request->file('photo')->store('candidates', 'public');
            // $validated['foto']$img_url = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
        }

        Candidate::create($validatedData);

        return redirect()->route('admin.candidates.index')->with('success', 'Kandidat berhasil ditambahkan.');
    }

    public function edit(Candidate $candidate)
    {
        $regions = Region::all();
        return view('admin.candidates.edit', compact('candidate', 'regions'));
    }

    public function update(Request $request, Candidate $candidate)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'party' => 'required|max:255',
            'region_id' => 'required|exists:regions,id',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'short_bio' => 'required',
            'full_bio' => 'required',
            'election_date' => 'required|date',
        ]);

        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($candidate->image_url) {
                Storage::disk('public')->delete($candidate->image_url);
            }
            $validatedData['image_url'] = $request->file('photo')->store('candidates', 'public');
        }

        $candidate->update($validatedData);

        return redirect()->route('admin.candidates.index')->with('success', 'Kandidat berhasil diperbarui.');
    }
    /**
     * Display the specified candidate.
     */
    public function show(Candidate $candidate, Request $request)
    {
        $viewed = $request->session()->get('viewed_candidates', []);
        if (!in_array($candidate->id, $viewed)) {
            $candidateView = new CandidateView();
            $candidateView->candidate_id = $candidate->id;
            $candidateView->ip_address = $request->ip();
            $candidateView->user_agent = $request->userAgent();
            $candidateView->save();

            $viewed[] = $candidate->id;
            $request->session()->put('viewed_candidates', $viewed);

            $candidate->increment('views');
        }
        return view('candidates.show', compact('candidate'));
    }

    /**
     * Get candidate short info for modal.
     */
    public function getShortInfo($id)
    {
        // return response()->json([
        //     'name' => $candidate->name,
        //     'position' => $candidate->position,
        //     'party' => $candidate->party,
        //     'short_description' => $candidate->short_description,
        //     'image_url' => $candidate->image_url,
        // ]);

        $candidate = Candidate::with('region')->findOrFail($id);
        return response()->json([
            'id' => $candidate->id,
            'name' => $candidate->full_name,
            'position' => $candidate->position,
            'party' => $candidate->partai,
            'region' => $candidate->region->name,
            'karir' => nl2br(e($candidate->karir)),
            // 'short_description' => $candidate->short_bio,
            // 'election_date' => $candidate->election_date->format('d M Y')
        ]);
    }

    /**
     * Search candidates.
     */
    public function search(Request $request)
    {
        // dd($request);
        $query = $request->input('query');
        $candidates = Candidate::where('name', 'like', "%{$query}%")
            // ->orWhere('position', 'like', "%{$query}%")
            // ->orWhere('party', 'like', "%{$query}%")
            // ->orWhere('region', 'like', "%{$query}%")
            ->paginate(10);

        return view('candidates.index', compact('candidates', 'query'));
    }

    // public function search(Request $request)
    // {
    //     $query = $request->input('query');
    //     $region = $request->input('region');
    //     $candidates = Candidate::with('region')
    //         ->when($query, function ($q) use ($query) {
    //             return $q->where('name', 'like', "%{$query}%");
    //         })
    //         ->when($region, function ($q) use ($region) {
    //             return $q->where('region_id', $region);
    //         })
    //         ->paginate(15);

    //     return response()->json($candidates);
    // }


    // public function destroy(Candidate $candidate)
    // {
    //     try {
    //         // Delete the candidate's photo if it exists
    //         if ($candidate->image_url) {
    //             Storage::disk('public')->delete($candidate->image_url);
    //         }

    //         // Delete the candidate
    //         $candidate->delete();

    //         return redirect()->route('admin.candidates.index')->with('success', 'Kandidat berhasil dihapus.');
    //     } catch (\Exception $e) {
    //         return redirect()->route('admin.candidates.index')->with('error', 'Gagal menghapus kandidat. ' . $e->getMessage());
    //     }
    // }

    public function destroy(Candidate $candidate)
    {
        try {
            if ($candidate->image_url) {
                Storage::disk('public')->delete($candidate->image_url);
            }
            $candidate->delete();
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
