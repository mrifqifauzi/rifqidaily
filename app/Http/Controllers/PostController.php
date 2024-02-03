<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function createposts(){
        return view('post.create');
    }

    public function store(Request $request){
        $request->validate([
            'judul' => ['required'],
            'keterangan' => ['required'],
            'gambar' => ['required','mimes:png,jpg,jpeg,webp']
        ]);

        $imagePath = $this->storeImage($request->file('gambar'));

        Post::create([
            'user_id' => Auth::id(),
            'title' => $request->judul,
            'caption' => $request->keterangan,
            'image' => $imagePath
        ]);

        return redirect()->route('index');

    }

    private function storeImage ($file): string {
        $fileName = rand() . $file->getClientOriginalName();
        $file->move('uploads', $fileName);
        return "/uploads/" . $fileName;
    }


    public function index(){
        $user = User::find(Auth::id());

        return view ('post.index',[
            'user' => $user,
            'posts' => $user->Posts()->latest()->get()
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'judul' => ['required'],
            'keterangan' => ['required'],
        ]);

        $post = Post::find($id);

        $post->title = $request->judul;
        $post->caption = $request->keterangan;
        $post->image = $request->file('gambar') ? $this->storeImage($request->file('gambar')) : $post->image;

        $post->save();
        return redirect()->route('index');
    }

    public function viewupdate($id){
        $post = Post::find($id);

        return view('post.viewupdate',['post' => $post]);
    }

    public function delete($id){
        Post::find($id)->delete();
        return redirect()->route('index');
    }
}


