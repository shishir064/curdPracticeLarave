<?php

namespace App\Http\Controllers;

use App\Models\TestPost;
use Illuminate\Http\Request;

class TestPostController extends Controller
{
    public function create()
    {
        
        return view('pages.testpostform');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $hotel = new TestPost();
        $hotel->title = $request->title;
        $hotel->body = $request->body;
        $hotel->save();
        return redirect()->route('test.post')->with('success', 'Post created successfully');
    }

    public function edit($id)
    {

        $testpost = TestPost::find($id);
        return view('pages.testpostform', compact('testpost'));
    
        // $hotels = TestPost::all();
        // return view('pages.testpost', compact('hotels'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $testpost = TestPost::find($id);
        $testpost->title = $request->title;
        $testpost->body = $request->body;
        $testpost->save();
        return redirect()->route('test.post')->with('success', 'Post updated successfully');
    }

    public function testviewpost(){
        $testposts = TestPost::all();
        return view('pages.testviewpost', compact('testposts'));
    }
}
