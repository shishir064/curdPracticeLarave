<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\TestPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostControllers extends Controller
{

    public function createPost()
    {
        $tags = Tag::all();
        $categories = Category::all();

        // if(Auth::user()->hasRole('admin')) {
        //     return view('pages.createpost', compact('categories'), compact('tags'));
        // }
       
        return view('pages.createpost',['hotel' => new TestPost()], compact('categories','tags'));
   
    }

    public function poststore(Request $request)
    {

        $categories = Category::all();
        // $request->validate([
        //     'title' => 'required',
        //     'body' => 'required',
        // ]);
        // $post = new Post();
        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->save();
        // return redirect()->route('createpostform')->with('success', 'Post created successfully');

        $data = $request->all();
        //  dd($data);
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'tags' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);
        // $path = Storage::putFile('image', $request->file('images'));

        $path = $request->file('image')->store('images', 'public');
        // $path = Storage::putFile('images', $request->file('image'));

       $post = Post::create([
            'title' => $request->title,
            'category_id' => $request->category,
            'body' => $request->body,
            'image' => $path
        ]);
        $post->tags()->sync($request->tags);

        return redirect()->route('createpostform')->with('success', 'Post created successfully');
    }

    public function viewPost()
    {
        $tags = Tag::all();
        $posts = Post::latest()->get();
        return view('pages.viewpost', compact('posts'), compact('tags'));
    }

    public function editPost($id)
    {
        $tags = Tag::all();
        $categories = Category::all();
        $post = Post::find($id);
        return view('pages.editpost', compact('post','categories', 'tags'));
    }

    public function updatePost(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->category_id = $request->category_id;

        $post->body = $request->body;
        if ($request->hasFile('image')) {

            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }

            $path = $request->file('image')
                ->store('images', 'public');

            $post->image = $path;
        }
        $post->save();
        $post->tags()->sync($request->tags);
        return redirect()->route('viewpost')->with('success', 'Post updated successfully');
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('viewpost')->with('success', 'Post deleted successfully');
    }
}
