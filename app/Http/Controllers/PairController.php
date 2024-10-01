<?php

namespace App\Http\Controllers;

use App\Models\Pair;
use App\Models\Region;
use App\Models\PairView;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PairController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidates = Candidate::with('region')->get();
        $pairs = Pair::with(['pemimpin', 'wakil', 'region'])->get();
        $regions = Region::all();
        $positions = Candidate::distinct('position')->pluck('position');
        $parties = Candidate::distinct('partai')->pluck('partai');

        return view('admin.pairs.index', compact('candidates', 'regions', 'positions', 'parties', 'pairs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $candidates = Candidate::all();
        $regions = Region::all();
        return view('admin.pairs.create', compact('candidates', 'regions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nomor_urut' => 'required',
            'party' => 'required|max:255',
            'pemimpin_id' => 'required|exists:candidates,id',
            'wakil_id' => 'required|exists:candidates,id',
            'region_id' => 'required|exists:regions,id',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'short_bio' => 'required',
            'full_bio' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'election_date' => 'required|date',
        ]);

        if ($request->hasFile('photo')) {
            $validatedData['image_url'] = $request->file('photo')->store('pairs', 'public');
            // $validated['foto']$img_url = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
        }

        Pair::create($validatedData);

        return redirect()->route('admin.pairs.index')->with('success', 'Pasangan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pair $pair)
    {
        $regions = Region::all();
        $candidates = Candidate::all();
        return view('admin.pairs.edit', compact('candidates', 'regions', 'pair'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pair $pair)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nomor_urut' => 'required|in:1,2,3,4,5',
            'party' => 'required|max:255',
            'pemimpin_id' => 'required|exists:candidates,id',
            'wakil_id' => 'required|exists:candidates,id',
            'region_id' => 'required|exists:regions,id',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'short_bio' => 'required',
            'full_bio' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'election_date' => 'required|date',
        ]);

        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($pair->image_url) {
                Storage::disk('public')->delete($pair->image_url);
            }
            $validatedData['image_url'] = $request->file('photo')->store('pairs', 'public');
        }

        $pair->update($validatedData);

        return redirect()->route('admin.pairs.index')->with('success', 'Pasangan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pair $pair)
    {
        //
    }


    public function frontindex(Request $request)
    {
        $region = $request->query('region');
        $pairs = Pair::when($region, function ($query, $region) {
            return $query->byRegion($region);
        })
            // ->upcoming()
            ->inRandomOrder()
            // ->orderBy('name', 'ASC')
            ->paginate(18);

        $regions = Region::all();
        return view('pairs.index', compact('pairs', 'regions'));
    }

    public function show(Pair $pair, Request $request)
    {
        $viewed = $request->session()->get('viewed_pairs', []);
        if (!in_array($pair->id, $viewed)) {
            $pairView = new PairView();
            $pairView->pair_id = $pair->id;
            $pairView->ip_address = $request->ip();
            $pairView->user_agent = $request->userAgent();
            $pairView->save();

            $viewed[] = $pair->id;
            $request->session()->put('viewed_pairs', $viewed);

            $pair->increment('views');
        }
        return view('pairs.show', compact('pair'));
    }

    public function search(Request $request)
    {
        // dd($request);
        $query = $request->input('query');
        $paris = Pair::where('name', 'like', "%{$query}%")
            // ->orWhere('position', 'like', "%{$query}%")
            // ->orWhere('party', 'like', "%{$query}%")
            // ->orWhere('region', 'like', "%{$query}%")
            ->paginate(10);

        return view('pairs.index', compact('paris', 'query'));
    }

    public function getShortInfo($id)
    {
        // return response()->json([
        //     'name' => $candidate->name,
        //     'position' => $candidate->position,
        //     'party' => $candidate->party,
        //     'short_description' => $candidate->short_description,
        //     'image_url' => $candidate->image_url,
        // ]);

        $candidate = Pair::with('region')->findOrFail($id);
        return response()->json([
            'id' => $candidate->id,
            'pemimpin' => $candidate->pemimpin->name,
            'wakil' => $candidate->wakil->name,
            'party' => $candidate->party,
            'region' => $candidate->region->full_name,
            'nomor_urut' => $candidate->nomor_urut,
            'visi' => nl2br(e($candidate->visi)),
            'misi' => nl2br(e($candidate->misi)),
            // 'short_description' => $candidate->short_bio,
            // 'election_date' => $candidate->election_date->format('d M Y')
        ]);
    }
}
