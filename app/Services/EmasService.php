<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Emas;
use Illuminate\Http\UploadedFile;

class EmasService
{
    public function create(Request $request): Emas
    {
        $imagePath = $this->storeImage($request->file('image'));
        if ($imagePath !== false) {
            return Emas::create(array_merge(
                $request->validated(),
                [
                    'status' => !blank($request->status),
                    'image' => $imagePath,
                ]
            ));
        }
    }

    public function update(Request $request, Emas $emas): Emas|bool
    {
        return $emas->update(array_merge(
            $request->validated(),
            array(
                'status' => !blank($request->status) ? true : false,
                'image' => $request['image'],
            )
        ));
    }

    protected function storeImage(UploadedFile $image): string|bool
    {
        try {
            $path = $image->store('emas', 'public');
            return $path;
        } catch (\Exception $e) {

            return false;
        }
    }
}
