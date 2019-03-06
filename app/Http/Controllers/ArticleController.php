<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Kind;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listArticle = Article::all();
        return view('admin.article.listArticle', compact('listArticle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idtheloai = Category::pluck('TenTL','id');
        $idloaitin = Kind::pluck('Ten','id');
        return view('admin.article.addArticle', compact('idtheloai', 'idloaitin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('POST'))
        {
            $imageObject = $request->Image;
            $nameFile = $imageObject->getClientOriginalName(); // get ten file
            $listArticle = Article::create([
            'TieuDe' => $request->input('TieuDe'),
            'NoiDung' => $request->input('NoiDung'),
            'Image' => $nameFile,
             'idTL'=> $request->input('idTL'),
             'idLT' => $request->input('idLT')
            ]);
             // upload file
            if($request->hasFile('Image'))
            {
                $imageObject->move('images', $nameFile);
            }
        }
        return redirect()->route('article.index', compact($listArticle));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
