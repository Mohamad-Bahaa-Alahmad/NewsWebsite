<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    // stop
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $allnews = News::orderBy('created_at', 'desc')->get();

            return view('news.index', compact('allnews'));

    }

    public function show($id){

            $item = News::findOrFail($id);
            return view('news.show', compact('item'));

    }
    public function create(){

            return view('news.create');

    }
    public function store(Request $request){

            $data = $request->validate([
                'title'       => 'required|min:3',
                'text'     => 'required|min:20',
                'image' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048' ,
            ]);

        $news = new News();
        $news->title = $data['title'];
        $news->text = $data['text'];
        $news->user_id = Auth::user()->id;
        $imageName = $request->image->getClientOriginalName() ;
        $request->image->move(public_path('storage/uploads'), $imageName);
        $news->image = $imageName;
        $news->save();


        return redirect()->route('news.index')->with('status', 'Item added');

    }
    public function edit($id){

        $item = News::findOrFail($id);
            return view('news.edit', compact('item'));

    }

    public function update($id, Request $request){
        $news = News::findOrFail($id);

        $validated = $request->validate([
            'title'       => 'required|min:3',
            'text'     => 'required|min:20',
            'image'    =>  'image|mimes:jpeg,png,jpg,gif|max:2048'

        ]);

        $news->title = $validated['title'];
        $news->text = $validated['text'];
        if ($request['image']){
            $imageName = $request->image->getClientOriginalName() ;
            $request->image->move(public_path('storage/uploads'), $imageName);
            $news->image = $imageName;
        }
        $news->save();

        return redirect()->route('news.index')->with('status', 'Item edited');

    }
    public function destroy($id){

        $news = News::findOrFail($id);

        $news->delete();

        return redirect()->route('news.index')->with('status', 'Item deleted');
    }
}
