<?php

namespace App\Http\Controllers\Api;

use App\Step;
use App\Http\Controllers\Controller;

class StepController extends Controller
{
    public function show($product_id, $lan)
    {
        $data = Step::where(['product_id' => $product_id])->pluck($lan);
        return response()->json([
            'code' => 0,
            'message' => 'Get success.',
            'data' => $data,
        ]);
    }
}
