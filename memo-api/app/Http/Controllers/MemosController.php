<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemosController extends Controller
{
    public function index(Memo $memo)
    {
        /**
         * 全てのメモを取得
         */
        $items = $memo->all();
        return response()->json([
            'data' => $items,
            'message' => 'got all memos!'
        ], 200);
    }
}
