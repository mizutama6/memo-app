<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemosController extends Controller
{
    /**
     * 全てのmemoを取得
     * $items = 全てのmemoの情報
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
     * memoの新規作成
     * $item = 新しいmemoの情報
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
     * memoの詳細情報を取得
     * $memo = 特定のmemoの情報
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
     * memoの更新
     * $memo = 特定のmemoの情報
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
     * memoの削除
     * $memo = 特定のmemoの情報
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
