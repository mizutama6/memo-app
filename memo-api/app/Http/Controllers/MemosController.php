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
        $item = new Memo;
        $item->title = $request->title;
        $item->content = $request->content;
        $item->save();
        return response()->json([
            'data' => $item,
            'message' => 'created a new memo!'
        ], 200);
    }

    /**
     * メモの詳細情報を取得
     */
    public function show(Memo $memo)
    {
        if($memo) {
            return response()->json([
                'data' => $memo,
                'message' => 'showed a memo!'
            ], 200);
        } else {
            return response()->json([
                'message' => 'not found a memo...'
            ], 404);
        }
    }


    /**
     * メモの更新
     */
    public function update(Memo $memo, Request $request)
    {
        $memo->title = $request->title;
        $memo->content = $request->content;
        $memo->save();
        if($memo) {
            return response()->json([
                'message' => 'updated a memo!'
            ], 200);
        } else {
            return response()->json([
                'message' => 'not found a memo...'
            ], 404);
        }
    }

    /**
     * メモの削除
     */
    public function destroy(Memo $memo)
    {
        $memo->delete();
        if($memo) {
            return response()->json([
                'message' => 'deleted a memo!'
            ], 200);
        } else {
            return response()->json([
                'message' => 'not fount a memo...'
            ], 404);
        }
    }
}
