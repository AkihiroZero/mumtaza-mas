<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLevelRequest;
use App\Models\LevelEmas;
use App\Services\LevelService;
use Illuminate\Http\Request;

class LevelEmasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $levels = LevelEmas::query()
            ->when(!blank($request->search), function ($query) use ($request) {
                return $query
                    ->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%');
            })
            ->orderBy('name')
            ->paginate(10);

        return view('level.index', compact('levels'));
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
    public function store(StoreLevelRequest $request, LevelService $levelService)
    {
        return $levelService->create($request)
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
        return view('level.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreLevelRequest $request, $levelEmas, LevelService $levelService)
    {
        $levelEmas = LevelEmas::findOrFail($levelEmas);
        return $levelService->update($request, $levelEmas)
            ? back()->with('success', 'Menu levelEmas has been updated successfully!')
            : back()->with(var_dump($request));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($levelEmas)
    {
        return LevelEmas::findOrFail($levelEmas)->delete()
            ? back()->with('success', 'Menu group has been deleted successfully!')
            : back()->with('failed', 'Menu group was not deleted successfully!');
    }
}
