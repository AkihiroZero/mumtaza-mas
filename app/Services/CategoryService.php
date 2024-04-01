<?php

namespace App\Services;

use App\Models\CategoryEmas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryService
{
    public function create(Request $request): CategoryEmas
    {
        $file = $request->file('image');
        $filename = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() . '/images/categories', $filename);

        return CategoryEmas::create(array_merge(
            $request->validated(),
            [
                'status' => !blank($request->status),
                'image' => $filename,
            ]
        ));
    }

    public function update(Request $request, CategoryEmas $categoryEmas): CategoryEmas|bool
    {
        $file = $request->file('image');

        if ($file) {
            $oldImagePath = public_path('images/categories/' . $categoryEmas->image);

            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            $filename = time() . Str::slug($request->categories) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '/images/emas', $filename);

            return $categoryEmas->update(array_merge(
                $request->validated(),
                array(
                    'status' => !blank($request->status) ? true : false,
                    'image' => $filename,
                )
            ));
        }

        return $categoryEmas->update(array_merge(
            $request->validated(),
            array(
                'status' => !blank($request->status) ? true : false,
                'image' => $categoryEmas->image,
            )
        ));
    }
}
