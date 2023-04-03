<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\User;
use Carbon\Carbon;
use Faker\Generator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class learning extends Controller
{
    public function qb()
    {
        // DB::table('posts')
        //     ->insert([
        //         'title' => 'post1',
        //         'body' => 'post 1 body',
        //         'large_image' => 'null',
        //         'small_image' => 'null',
        //         'views' => 5,
        //         'shares' => 5,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::yesterday(),
        //         'cat_id' => category::all()->random()->id,
        //         'cat_id' => 1,
        //     ]);
        DB::table('categories')
            ->insert([
                'title' => 'artist',
                'code' => 'art',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::yesterday(),
            ]);
        
        // DB::table('categories')->where('id', '11')
        //     ->update([
        //         'title' => 'sport',
        //         'code' => 'spt',
        //         'created_at' => Carbon::yesterday(),
        //         'updated_at' => Carbon::now(),
        //     ]);

        // DB::table('categories')->where('id', 12)->delete();

        dd('done');

        dd(DB::table('posts')->offset(10)->limit(5)->get());
        dd(DB::table('posts')->skip(10)->take(5)->get());
        dd(DB::table('posts')->where('views', 5)->union(DB::table('posts')->where('shares', 5))->get());
        $posts = DB::table('posts')
            ->join('categories', 'categories.id', 'posts.cat_id')
            ->select('posts.*', 'categories.title as cat_title', 'categories.code')->get();
        dd($posts);
        $posts = DB::table('posts')->groupBy('id', 'cat_id')->select(DB::raw('count(*)'), DB::raw('min(views)'), 'cat_id')->get();
        dd($posts); 
        $cats = DB::table('categories')->get();
        // dd($cats);

        // $user = DB::table('users')->get();
        // foreach($user as $user){
        //     echo $user->name. '<br>';
        //     echo $user->email . '<br>';
        // }
    }
}
