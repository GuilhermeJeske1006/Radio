<?php

namespace App\Http\Controllers;
use App\Models\Ouvinte;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        $ouvinte = Ouvinte::all();

        return view('index', ['ouvinte' => $ouvinte]);
    }

    public function store(Request $request)
    {
        $ouvinte = new Ouvinte;

        $ouvinte->Nome     = $request->Nome;
        $ouvinte->Musica   = $request->Musica;

        $ouvinte->save();
        return redirect('/')->with('msg', 'Musica Cadastrada');
    }

    public function destroy($id)
    {
        Ouvinte::findOrFail($id)->delete();
        return redirect('/')->with('msg', 'Musica deletada');
    }

    public function edit($id)
    {
        Ouvinte::findOrFail($id);
        return view('index', ['ouvinte' => $ouvinte]);
    }

    public function update(Request $request)
    {
      Ouvinte::findOrFail($request->id)->update($request->all());
      return redirect('/')->with('msg', 'Musica editada');

    }
}
