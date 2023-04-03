<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        
        // $messages = 'hello';
        // dd(Hash::make($messages));

        // $enc = encrypt($messages);
        // dd($enc);

        // $dec = decrypt($enc . 12);
        // dd($dec);


        
        $posts = post::orderBy('created_at', 'desc')->paginate();
        // dd($posts->category->toArray());
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.add-post', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     'title' => ['required', 'unique:posts', 'between:5,50'],
        //     'body' => ['required', 'string'],
        //     'category_id' => ['required', 'Integer'],
        // ]);

        $rules = [
            'title' => ['required', 'unique:posts', 'between:5,50'],
            'body' => ['required', 'string'],
            'category_id' => ['required', 'Integer'],
        ];

        $messages = [
            // 'required' => 'this input required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $post = new post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->category_id;

        $post_image = $request->file('post_image');
        $file_name = $post->title . time() . '.' . $post_image->extension();
        $post_image->move('post_images', $file_name);

        $post->small_image = $file_name;
        $post->large_image = $file_name;

        $post->save();

        // $post = post::create([
        //     'title' => $request->title,
        //     'body' => $request->body,
        //     'category_id' => $request->category_id,
        // ]);



        return redirect()->route('post.index')->with('success', 'the post has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        

        return view('admin.posts.show', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        $categories = Category::all();

        return view('admin.posts.edit-post', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $post->update([
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('post.index')->with('update', 'the post has been added updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post->delete();

        return redirect()->route('post.index');
    }
}
