<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemosController extends Controller
{
    /**
     * 全てのメモを取得
     */
    public function index(Memo $memo)
    {
        $items = $memo->all();
        return response()->json([
            'data' => $items,
            'message' => 'got all memos!'
        ], 200);
    }

    /**
     * メモの新規作成
     */
    public function create(Request $request)
    {
        $memo = new Memo;
        $memo->title = $request->title;
        $memo->content = $request->content;
        $memo->save();
        return response()->json([
            'data' => $memo,
            'message' => 'create new memo!'
        ], 200);
    }

    /**
     * メモの詳細情報を表示
     */
    public function show()
    {
    }


    /**
     * メモの更新
     */
    public function edit()
    {
    }

    /**
     * メモの削除
     */
    public function delete()
    {
    }
}
