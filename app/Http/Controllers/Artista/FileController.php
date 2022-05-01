<?php

namespace App\Http\Controllers\Artista;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;

use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $files = File::where('artista_id', auth()->user()->id)->paginate(24);
        return view('dashboard.artista.files.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.artista.files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image'
        ]);

        $imagenes = $request->file('file')->store('public/imagenes');

        $url = Storage::url($imagenes);



        File::create([
            'artista_id' => auth()->user()->id,
            'url' => $url
        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($file)
    {


        $files = File::where('artista_id', auth()->user()->id)->paginate(24);
        return view('dashboard.artista.files.show', compact('files'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($filr)
    {
        return view('dashboard.artista.files.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($file)
    {
        $file = File::where('id',$file)->first();

        $url = str_replace('storage','public',$file->url);

        Storage::delete($url);

        $file->delete();
        return redirect()->route('artista.files.index')->with('eliminar','ok');
    }
}
