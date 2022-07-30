<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EleveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // public function index()
    // {
    //     if (Auth::user() === 1) {
    //         $list = Eleve::all();
    //         return view('admin.eleve.index', ['eleves' => $list]);
    //     } else {
    //         $eleve = Eleve::where('user_id', Auth::user()->id)->get();
    //         return view('user.eleve.show', ['eleve' => $eleve]);
    //     }
    // }
    public function indexa()
    {
        $list = Eleve::all();
        return view('admin.eleve.index', ['eleves' => $list]);
    }

    public function indexu()
    {
        $eleve = Eleve::where('user_id', Auth::user()->id)->get();
        return view('user.eleve.show', ['eleve' => $eleve]);
    }
    public function create()
    {
        return view('user.eleve.create');
    }
    public function store(Request $request)
    {
        $eleve = new Eleve();

        $eleve->user_id = Auth::user()->id;
        $eleve->nom = $request->input('nom');
        $eleve->prenom = $request->input('prenom');
        if ($request->hasFile('photo')) {
            $eleve->photo = $request->photo->store('photos');
        }
        $eleve->genre = $request->input('genre');
        $eleve->cin = $request->input('cin');
        $eleve->cne = $request->input('cne');
        $eleve->dateNaissance = $request->input('dateNaissance');
        $eleve->lieuNaissance = $request->input('lieuNaissance');
        $eleve->email = $request->input('email');
        $eleve->telephone = $request->input('telephone');
        $eleve->adresse = $request->input('adresse');

        $eleve->save();

        return redirect('/user');
    }
    public function edit($id)
    {
        $eleve = Eleve::find($id);
        return view('user.eleve.edit', ['eleve' => $eleve]);
    }
    public function update(Request $request, $id)
    {
        $eleve = Eleve::find($id);

        $eleve->nom = $request->input('nom');
        $eleve->prenom = $request->input('prenom');
        if ($request->hasFile('photo')) {
            $eleve->photo = $request->photo->store('photos');
        }
        $eleve->genre = $request->input('genre');
        $eleve->cin = $request->input('cin');
        $eleve->cne = $request->input('cne');
        $eleve->dateNaissance = $request->input('dateNaissance');
        $eleve->lieuNaissance = $request->input('lieuNaissance');
        $eleve->email = $request->input('email');
        $eleve->telephone = $request->input('telephone');
        $eleve->adresse = $request->input('adresse');

        $eleve->save();

        return redirect('/eleves');
    }
    public function show($id)
    {
        $eleve = Eleve::find($id);

        return view('admin.eleve.show', ['eleve' => $eleve]);
    }
}
