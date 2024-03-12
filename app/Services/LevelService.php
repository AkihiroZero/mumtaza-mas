<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\LevelEmas;

class LevelService
{
    public function create(Request $request): LevelEmas
    {
        return LevelEmas::create(array_merge(
            $request->validated(),
            array(
                'status' => !blank($request->status) ? true : false,
            ),
        ));
    }

    public function update(Request $request, LevelEmas $levelEmas): LevelEmas|bool
    {
        return $levelEmas->update(array_merge(
            $request->validated(),
            array(
                'status' => !blank($request->status) ? true : false,
            )
        ));
    }
}
