<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function index(){
        return response()->json([
            'message' => 'List of articles',
            'data' => [
                Article::all()
            ]
        ]);
    }

    function show($id){
        $article = Article::find($id);
        if ($article->count() > 0) {
            return response()->json([
                'message' => 'Article found',
                'data' => $article
            ]);
        } else {
            return response()->json([
                'message' => 'Article not found'
            ], 404);
        }
    }

    function store(Request $request){
        $article = Article::create($request->all());
        return response()->json([
            'message' => 'Article created successfully',
            'data' => $article
        ], 201);
    }

    function update(Request $request, $id){
        $article = Article::find($id);
        if ($article) {
            $article->update($request->all());
            return response()->json([
                'message' => 'Article updated successfully',
                'data' => $article
            ]);
        } else {
            return response()->json([
                'message' => 'Article not found'
            ], 404);
        }
    }

    function delete($id){
        $article = Article::find($id);
        if ($article) {
            $article->delete();
            return response()->json([
                'message' => 'Article deleted successfully'
            ]);
        } else {
            return response()->json([
                'message' => 'Article not found'
            ], 404);
        }
    }
}
