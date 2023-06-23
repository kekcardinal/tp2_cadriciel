<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::all();
        return view('document.index', ['documents' => $documents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('document.ajout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nomfichier= time().'.'.$request->fichier->extension();
       $request->file('fichier')->storeAs(
        'docsCharges',
        $nomfichier,
        'public'
       );

        $newDocument = Document::create([
            'title' => $request->title,
            'titre' => $request->titre,
            'nom_document'=> $nomfichier,
            'user_id' => Auth::user()->id
        ]);

        return redirect(route('document.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        // dd($document);
        // die();

        return view ('document.show', ['Document' => $document]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        return view('document.edit', ['Document' => $document]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        $nomfichier= time().'.'.$request->fichier->extension();
        $request->file('fichier')->storeAs(
         'docsCharges',
         $nomfichier,
         'public'
        );
        
        $document->update([
            'title' => $request->title,
            'titre' => $request->titre,
            'nom_document'=> $nomfichier
        ]);

        return redirect(route('document.show', $document));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $document->delete();

        return redirect(route('document.index'));
    }
}
