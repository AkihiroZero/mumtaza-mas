<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmasRequest;
use App\Models\CategoryEmas;
use App\Models\Emas;
use App\Models\KadarEmas;
use App\Models\LevelEmas;
use App\Services\EmasService;
use App\Services\KadarService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


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
                    ->orWhere('barcode', 'like', '%' . $request->search . '%')
                    ->orWhere('berat', 'like', '%' . $request->search . '%')
                    ->orWhere('warna', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%');
            })
            ->orderBy('name')
            ->paginate(10);
        $levels = LevelEmas::orderBy('name')->get();
        $kadars = KadarEmas::orderBy('name')->get();
        $categories = CategoryEmas::orderBy('name')->get();

        return view('emas.index', compact('emass', 'levels', 'kadars', 'categories'));
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
    public function store(StoreEmasRequest $request, EmasService $emas)
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
        return view('emas.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEmasRequest $request, $emas, EmasService $emasService)
    {
        $emas = Emas::findOrFail($emas);
        return $emasService->update($request, $emas)
            ? back()->with('success', 'Data Emas has been updated successfully!')
            : back()->with('failed', 'Data Emas has not been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($emasId)
    {
        $emas = Emas::findOrFail($emasId);

        if (!$emas) {
            return back()->with('failed', 'Emas not found!');
        }

        $oldImagePath = public_path('images/emas/' . $emas->image);

        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }

        return $emas->delete()
            ? back()->with('success', 'KadarEmas has been deleted successfully!')
            : back()->with('failed', 'KadarEmas was not deleted successfully!');
    }
}
