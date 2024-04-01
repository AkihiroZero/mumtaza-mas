<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\CategoryEmas;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryEmasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = CategoryEmas::query()
            ->when(!blank($request->search), function ($query) use ($request) {
                return $query
                    ->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%');
            })
            ->orderBy('name')
            ->paginate(10);

        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request, CategoryService $category)
    {
        return $category->create($request)
            ? back()->with('success', 'category group has been created successfully!')
            : back()->with('failed', 'category group was not created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('profile.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('profile.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoryRequest $request, $categoryEmas, CategoryService $categoryService)
    {
        $categoryEmas = CategoryEmas::findOrFail($categoryEmas);
        return $categoryService->update($request, $categoryEmas)
            ? back()->with('success', 'Category Emas has been updated successfully!')
            : back()->with('failed', 'Category Emas has not been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($categoryId)
    {
        $category = CategoryEmas::findOrFail($categoryId);

        if (!$category) {
            return back()->with('failed', 'Category not found!');
        }

        $oldImagePath = public_path('images/category/' . $category->image);

        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }

        return $category->delete()
            ? back()->with('success', 'KadarEmas has been deleted successfully!')
            : back()->with('failed', 'KadarEmas was not deleted successfully!');
    }
}
