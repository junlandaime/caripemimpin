<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Candidate;
use App\Models\RegionView;
use Illuminate\Http\Request;
use App\Http\Requests\RegionRequest;
use Illuminate\Support\Facades\Storage;

class RegionController extends Controller
{
    /**
     * Display a listing of the regions.
     */

    public function index()
    {
        $regions = Region::withCount('candidates')->get();
        return view('admin.regions.index', compact('regions'));
    }



    public function create()
    {
        return view('admin.regions.create');
    }

    public function store(RegionRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('bendera')) {
            $data['bendera'] = $request->file('bendera')->store('regions', 'public');
        }

        if ($request->hasFile('lambang')) {
            $data['lambang'] = $request->file('lambang')->store('regions', 'public');
        }

        Region::create($data);

        return redirect()->route('admin.regions.index')->with('success', 'Wilayah berhasil ditambahkan.');
    }

    public function edit(Region $region)
    {
        return view('admin.regions.edit', compact('region'));
    }

    public function update(RegionRequest $request, Region $region)
    {
        $data = $request->validated();

        if ($request->hasFile('bendera')) {
            if ($region->bendera) {
                Storage::disk('public')->delete($region->bendera);
            }
            $data['bendera'] = $request->file('bendera')->store('regions', 'public');
        }

        if ($request->hasFile('lambang')) {
            if ($region->lambang) {
                Storage::disk('public')->delete($region->lambang);
            }
            $data['lambang'] = $request->file('lambang')->store('regions', 'public');
        }

        $region->update($data);

        return redirect()->route('admin.regions.index')->with('success', 'Wilayah berhasil diperbarui.');
    }

    public function frontindex()
    {
        // $regions = Region::withCount('candidates')->get();
        $totalRegions = Region::count();
        $totalCities = Region::where('type', 'kota')->count();
        $totalRegencies = Region::where('type', 'kabupaten')->count();

        $regions = Region::with('candidates')
            ->select('id', 'name', 'type', 'slug',  'created_at')
            ->get()
            ->map(function ($region) {
                return [
                    'id' => $region->id,
                    'name' => $region->name,
                    'slug' => $region->slug,
                    'type' => $region->type,
                    // 'population' => $region->population,
                    'created_at' => $region->created_at->toDateString()
                ];
            });

        return view('regions.index', compact('regions', 'totalRegions', 'totalCities', 'totalRegencies'));
    }

    /**
     * Display the specified region.
     */
    public function show(Region $region, Request $request)
    {
        $viewed = $request->session()->get('viewed_regions', []);
        if (!in_array($region->id, $viewed)) {
            $regionView = new RegionView();
            $regionView->region_id = $region->id;
            $regionView->ip_address = $request->ip();
            $regionView->user_agent = $request->userAgent();
            $regionView->save();

            $viewed[] = $region->id;
            $request->session()->put('viewed_regions', $viewed);

            $region->increment('views');
        }
        $candidates = $region->candidates()->paginate(10);
        // $upcomingElections = $region->upcomingElections()->get();

        return view('regions.show', compact('region', 'candidates'));
    }

    /**
     * Display regions by type (Kota or Kabupaten).
     */
    public function byType($type)
    {
        $regions = Region::ofType($type)->withCount('candidates')->get();
        return view('regions.by_type', compact('regions', 'type'));
    }

    /**
     * Search for regions.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');
        $regions = Region::where('name', 'like', "%{$query}%")
            ->orWhere('type', 'like', "%{$query}%")
            ->withCount('candidates')
            ->paginate(10);

        return view('regions.search', compact('regions', 'query'));
    }

    /**
     * Display statistics for all regions.
     */
    public function statistics()
    {
        $statistics = [
            'total_regions' => Region::count(),
            'total_kota' => Region::ofType('Kota')->count(),
            'total_kabupaten' => Region::ofType('Kabupaten')->count(),
            'region_most_candidates' => Region::withCount('candidates')
                ->orderBy('candidates_count', 'desc')
                ->first(),
            'total_candidates' => Candidate::count(),
            'average_candidates_per_region' => Candidate::count() / Region::count(),
        ];

        return view('regions.statistics', compact('statistics'));
    }

    // public function destroy(Region $region)
    // {
    //     try {
    //         // Check if the region has any associated candidates
    //         if ($region->candidates()->exists()) {
    //             return redirect()->route('admin.regions.index')
    //                 ->with('error', 'Tidak dapat menghapus wilayah karena masih ada kandidat yang terkait.');
    //         }

    //         // Delete the region
    //         $region->delete();

    //         return redirect()->route('admin.regions.index')->with('success', 'Wilayah berhasil dihapus.');
    //     } catch (ModelNotFoundException $e) {
    //         return redirect()->route('admin.regions.index')->with('error', 'Wilayah tidak ditemukan.');
    //     } catch (\Exception $e) {
    //         return redirect()->route('admin.regions.index')->with('error', 'Gagal menghapus wilayah. ' . $e->getMessage());
    //     }
    // }

    public function destroy(Region $region)
    {
        try {
            if ($region->candidates()->exists()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Tidak dapat menghapus wilayah karena masih ada kandidat yang terkait.'
                ], 422);
            }
            if ($region->bendera) {
                Storage::disk('public')->delete($region->bendera);
            }
            if ($region->lambang) {
                Storage::disk('public')->delete($region->lambang);
            }

            $region->delete();
            return response()->json(['success' => true])->redirect()->route('admin.regions.index')
                ->with('success', 'Region deleted successfully');
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
