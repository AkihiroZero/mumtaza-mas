<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Emas;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;


class EmasService
{
    public function create(Request $request): Emas
    {
        $file = $request->file('image');
        $filename = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() . '/images/emas', $filename);

        return Emas::create(array_merge(
            $request->validated(),
            [
                'status' => !blank($request->status),
                'image' => $filename,
            ]
        ));
    }

    public function update(Request $request, Emas $emas): Emas|bool
    {
        $file = $request->file('image');

        if ($file) {
            $oldImagePath = public_path('images/emas/' . $emas->image);

            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            $filename = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '/images/emas', $filename);

            return $emas->update(array_merge(
                $request->validated(),
                array(
                    'status' => !blank($request->status) ? true : false,
                    'image' => $filename,
                )
            ));
        }

        return $emas->update(array_merge(
            $request->validated(),
            array(
                'status' => !blank($request->status) ? true : false,
                'image' => $emas->image,
            )
        ));
    }
}
