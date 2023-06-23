<?php

namespace App\Http\Controllers;

use App\Models\BlogArticle;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BlogArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = BlogArticle::all();
        return view('blog.article', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.ajout-article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newArticle = BlogArticle::create([
            'title' => $request->title,
            'titre' => $request->titre,
            'text' => $request->text,
            'texte' => $request->texte,
            'user_id' => Auth::user()->id
        ]);

        return redirect(route('blog.article'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogArticle  $blogArticle
     * @return \Illuminate\Http\Response
     */
    public function show(BlogArticle $blogArticle)
    {
        return view ('blog.show-article', ['blogArticle' => $blogArticle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogArticle  $blogArticle
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogArticle $blogArticle)
    {
        // dd($blogArticle);
        // die();

        return view('blog.edit-article', ['blogArticle' => $blogArticle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogArticle  $blogArticle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogArticle $blogArticle)
    {
        $blogArticle->update([
            'title' => $request->title,
            'text' => $request->text,
            'titre' => $request->titre,
            'texte' => $request->texte,
        ]);

        return redirect(route('blog.show-article', $blogArticle));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogArticle  $blogArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogArticle $blogArticle)
    {
        $blogArticle->delete();

        return redirect(route('blog.article'));
    }
}
