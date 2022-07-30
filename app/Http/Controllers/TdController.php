<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Td;
use Illuminate\Support\Facades\Auth;


class TdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $list = Td::all();
        // return view('admin.td.index', ['tds' => $list]);
        if (Auth::user()->id === 1) {
            return view('admin.td.index', ['tds' => $list]);
        } else {
            return view('user.td.index', ['tds' => $list]);
        }
    }
    public function create()
    {
        return view('admin.td.create');
    }
    public function store(Request $request)
    {
        $td = new Td();

        $td->num = $request->input('num');
        $td->title = $request->input('title');
        if ($request->hasFile('pdf')) {
            $td->pdf = $request->pdf->store('tds');
        }

        $td->save();

        return redirect('tds');
    }
    public function edit($id)
    {
        $td = Td::find($id);
        return view('admin.td.edit', ['td' => $td]);
    }
    public function update(Request $request, $id)
    {
        $td = Td::find($id);

        $td->num = $request->input('num');
        $td->title = $request->input('title');
        if ($request->hasFile('pdf')) {
            $td->pdf = $request->pdf->store('tds');
        }
        $td->save();

        return redirect('tds');
    }
    public function destroy(Request $request, $id)
    {
        $td = Td::find($id);
        $td->delete();
        return redirect('tds');
    }
}
