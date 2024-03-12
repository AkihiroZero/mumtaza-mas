<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKadarRequest;
use App\Models\KadarEmas;
use App\Services\EmasService;
use App\Services\KadarService;
use Illuminate\Http\Request;

class KadarEmasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kadars = KadarEmas::query()
            ->when(!blank($request->search), function ($query) use ($request) {
                return $query
                    ->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%');
            })
            ->orderBy('name')
            ->paginate(10);

        return view('kadar.index', compact('kadars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKadarRequest $request, EmasService $emas)
    {
        return $emas->create($request)
            ? back()->with('success', 'levelEmas group has been created successfully!')
            : back()->with('failed', 'levelEmas group was not created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('kadar.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreKadarRequest $request, $kadarEmas, KadarService $levelService)
    {
        $kadarEmas = KadarEmas::findOrFail($kadarEmas);
        return $levelService->update($request, $kadarEmas)
            ? back()->with('success', 'Menu KadarEmas has been updated successfully!')
            : back()->with('failed', 'Menu KadarEmas has not been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kadarEmas)
    {
        return KadarEmas::findOrFail($kadarEmas)->delete()
            ? back()->with('success', 'KadarEmas has been deleted successfully!')
            : back()->with('failed', 'KadarEmas was not deleted successfully!');
    }
}
