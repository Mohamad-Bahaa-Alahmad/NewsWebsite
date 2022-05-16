<?php

namespace App\Http\Controllers;

use App\Models\Sessies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessiesController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $sessies = Sessies::orderBy('created_at', 'desc')->get();

        return view('sessies.index', compact('sessies'));

    }

    public function show($id){

        $sessie = Sessies::findOrFail($id);
        return view('sessies.show', compact('sessie'));

    }
    public function create(){

            return view('sessies.create');

    }
    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required|min:3',
            'beschrijving' => 'required|min:20',
            'speaker' => 'required|min:3' ,
            'date' => 'required|date|after:tomorrow',
            'time' => 'required',
        ]);

        $sessie = new Sessies();
        $sessie->name = $data['name'];
        $sessie->beschrijving = $data['beschrijving'];
        $sessie->speaker = $data['speaker'];
        $sessie->date = $data['date'];
        $sessie->time = $data['time'];
        $sessie->user_id = Auth::user()->id;
        $sessie->save();

        return redirect()->route('sessie.index')->with('status', 'Sessie added');

    }
    public function edit($id){

            $sessie = Sessies::findOrFail($id);
            return view('sessies.edit', compact('sessie'));

    }

    public function update($id, Request $request){
        $sessie = Sessies::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|min:3',
            'beschrijving' => 'required|min:20',
            'speaker' => 'required|min:3' ,
            'date' => 'required|date|after:tomorrow',
            'time' => 'required',
        ]);

        $sessie->name = $validated['name'];
        $sessie->beschrijving = $validated['beschrijving'];
        $sessie->speaker = $validated['speaker'];
        $sessie->date = $validated['date'];
        $sessie->time = $validated['time'];

        $sessie->save();

        return redirect()->route('sessie.index')->with('status', 'Sessie edited');

    }
    public function destroy($id){

        $sessie = Sessies::findOrFail($id);

        $sessie->delete();

        return redirect()->route('sessie.index')->with('status', 'Sessie deleted');
    }
}
