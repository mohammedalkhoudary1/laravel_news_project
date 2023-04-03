<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

 class frontsiteController extends Controller
{
    public function showhome() 
    {
        $posts = post::orderBy('created_at', 'desc')->paginate(4);

        return view('frontsite.index', compact('posts'));
    }

    public function showblog() {

        return view('frontsite.blog');
    }

    public function showsingle($id) 
    {
        $post = post::findOrFail($id);

        return view('frontsite.single', [
            'post' => $post,
            'id' => $id,
        ]);
    }

    public function showcontact() {

        return view('frontsite.contact_us');
    }

}
