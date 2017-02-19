<?php
namespace App\Http\Controllers;

use App\Movie;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getIndex()
    {
        $arrayPeliculas = Movie::all();
        return view('catalog.index' )->with('arrayPeliculas', $arrayPeliculas);

    }

    public function getShow($id)
    {
        $peli = Movie::find($id);
        return view( 'catalog.show', array(
            'peli'=>$peli,
            'id'=>$id) );
    }

    public function getCreate(){
        return view('catalog.create');
    }

    public function getEdit($id)
    {
        $peli = Movie::findOrFail($id);
        return view('catalog.edit', array('peli' => $peli));
    }
}