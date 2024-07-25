<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function suma($num1, $num2)
    {
        $resultado = $num1 + $num2;
        return response()->json([
            'resultado' => $resultado
        ]);
    }

    public function multiplicacion($num1, $num2)
    {
        $resultado = $num1 * $num2;
        return response()->json([
            'resultado' => $resultado
        ]);
    }
}
