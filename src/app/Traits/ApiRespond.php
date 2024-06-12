<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiRespond
{
    public function success($data, $code = 200):JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'data' => $data
        ], $code);
    }

    public function error($message, $code = 400): JsonResponse
    {
        return response()->json([
            'status' => 'error',
            'message' => $message
        ], $code);
    }
}