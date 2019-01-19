<?php

namespace App\Http\Controllers;

use App\Model\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return Articles::all();
    }

    public function show($id)
    {
        return Articles::find($id);
    }

    public function store(Request $request)
    {
        $article = Articles::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, $id)
    {
        $article = Articles::findOrFail($id);

        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete($id)
    {
        $article = Articles::findOrFail($id);

        $article->delete();

        return response()->json(null, 204);
    }
}
