<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Cour;
use Illuminate\Support\Facades\Auth;

class CourController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }
    public function index()
    {
        $list = Cour::all();
        // return view('admin.cour.index', ['cours' => $list]);
        if (Auth::user()->id === 1) {
            return view('admin.cour.index', ['cours' => $list]);
        } else {
            return view('user.cour.index', ['cours' => $list]);
        }
    }
    public function create()
    {
        return view('admin.cour.create');
    }
    public function store(Request $request)
    {
        $cour = new Cour();

        $cour->chap = $request->input('chap');
        $cour->title = $request->input('title');
        if ($request->hasFile('pdf')) {
            $cour->pdf = $request->pdf->store('cours');
        }

        $cour->save();

        return redirect('cours');
    }
    public function edit($id)
    {
        $cour = Cour::find($id);
        return view('admin.cour.edit', ['cour' => $cour]);
    }
    public function update(Request $request, $id)
    {
        $cour = Cour::find($id);

        $cour->chap = $request->input('chap');
        $cour->title = $request->input('title');
        if ($request->hasFile('pdf')) {
            $cour->pdf = $request->pdf->store('cours');
        }
        $cour->save();

        return redirect('cours');
    }
    public function destroy(Request $request, $id)
    {
        $cour = Cour::find($id);
        $cour->delete();
        return redirect('cours');
    }
}
