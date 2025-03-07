<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $document = Document::all();
        return view('document.index', compact('document'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('document.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation du fichier uploadé : ici, on autorise par exemple les fichiers PDF, DOC, DOCX et TXT
        $request->validate([
            'document' => 'required|file|mimes:pdf,doc,docx,txt'
        ]);

        // Vérifier que le fichier est présent
        if ($request->hasFile('document')) {
            $file = $request->file('document');

            // Renommer le fichier (ici, en ajoutant un timestamp)
            $filename = time() . '_' . $file->getClientOriginalName();

            // Stocker le fichier dans le répertoire 'documents' dans le disque 'public'
            $path = $file->storeAs('document', $filename, 'public');

            // Sauvegarder les informations du fichier dans la base de données
            Document::create([
                'file_name' => $filename,
                'file_path' => $path
            ]);
        }
        return redirect()->route('document.index')->with('success', 'Document uploadé avec succès.');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        return view('document.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        $validated = $request->validate([
            'titre'  => 'required|string|max:255',
            'description'  => 'required|string|max:255',
            'dateUpload'  => 'required|date'
        ]);
    
        $document->update($validated);
        return redirect()->route('document.index')->with('success', 'Document mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->route('document.index')->with('success', 'Document supprimé avec succès.');
    }
}
