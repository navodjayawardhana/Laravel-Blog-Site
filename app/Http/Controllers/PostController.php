<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Post; // Import the Post model
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'title' => 'required',
            'description'=>'required'
        ]);
        if ($validator->fails()) {
            return back()->with('status','Somthing Wrong!');
           
        }else{
            Post::create([
                'user_id' => auth()->user()->id,
                'title' =>$request->title,
                'description' =>$request->description
            ]);
        }
        

        return redirect(route('posts.all'))->with('status','Posts Added Sucsessfully!');
    }

    public function show($postId){
        $post=Post::findOrFail($postId);
        return view ('posts.show',compact('post'));
    }

    public function edit($postId){
        $post=Post::findOrFail($postId);
        return view('posts.edit',compact('post'));
    }

    public function update($postId,Request $request){
        Post::findOrFail($postId)->update($request->all());

        return redirect(route('posts.all'))->with('status','Post updated successfully!');
    }

    public function delete($postId){
        Post::findOrFail($postId)->delete();
        return redirect(route('posts.all'))->with('status','Post Delete successfully!');
    }
}
