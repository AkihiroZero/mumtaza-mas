<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\KadarEmas;

class KadarService
{
    public function create(Request $request): KadarEmas
    {
        return KadarEmas::create(array_merge(
            $request->validated(),
            array(
                'status' => !blank($request->status) ? true : false,
            ),
        ));
    }

    public function update(Request $request, KadarEmas $kadarEmas): KadarEmas|bool
    {
        return $kadarEmas->update(array_merge(
            $request->validated(),
            array(
                'status' => !blank($request->status) ? true : false,
            )
        ));
    }
}
