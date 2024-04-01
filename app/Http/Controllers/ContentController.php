<?php

namespace App\Http\Controllers;

use App\Models\CategoryEmas;
use App\Models\Emas;
use App\Models\KadarEmas;
use App\Models\LevelEmas;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = CategoryEmas::where('status', '1')->get();
        return view('content.home', compact('categories'));
    }

    /**
     * Display a web details.
     */
    public function about(Request $request)
    {
        return view('content.about');
    }

    /**
     * Display a emas list of web products.
     */
    public function list(Request $request)
    {
        $emass = Emas::query()
            ->when(!blank($request->search), function ($query) use ($request) {
                return $query
                    ->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('barcode', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%');
            })
            ->orderBy('name')
            ->paginate(10);
        return view('content.emas', compact('emass'));
    }
    public function listCategory(Request $request, $category)
    {
        $emass = Emas::query()
            ->where(function ($query) use ($category) {
                $query->where('name', 'like', '%' . $category . '%');
            })
            ->orderBy('name')
            ->paginate(10);
        return view('content.emas', compact('emass'));
    }

    /**
     * Display a emas list of web products.
     */
    public function Search(Request $request)
    {

        return view('content.emas', compact('emass'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $emas = Emas::findOrFail($id);
        return view('content.detail', compact('emas'));
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
