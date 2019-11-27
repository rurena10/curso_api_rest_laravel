<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendResponse($result, $message, $code=200)
    {
        $response = [
            'success' => $result?true:false,
            'data' => $result,
            'message' => $message
        ];
        return response()->json($response, $code);
    }

    public function sendError()
    { }
}
