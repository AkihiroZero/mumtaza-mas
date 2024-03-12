<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmasRequest;
use App\Models\Emas;
use App\Models\KadarEmas;
use App\Models\LevelEmas;
use App\Services\EmasService;
use Illuminate\Http\Request;

class EmasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $emass = Emas::query()
            ->when(!blank($request->search), function ($query) use ($request) {
                return $query
                    ->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%');
            })
            ->orderBy('name')
            ->paginate(10);
        $levels = LevelEmas::orderBy('name')->get();
        $kadars = KadarEmas::orderBy('name')->get();

        return view('emas.index', compact('emass', 'levels', 'kadars'));
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
    public function store(StoreEmasRequest $request)
    {
        return $request;
        // return $emas->create($request)
        //     ? back()->with('success', 'levelEmas group has been created successfully!')
        //     : back()->with('failed', 'levelEmas group was not created successfully!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
