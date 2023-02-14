<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function getPosts(){
        $post= User::select('id','name')->with('posts')->get();
        
     return view("posts.posts", compact("post"));
    }
    public function post()
    {



    //     $post = DB::table('users as u')
    //         ->join('posts as p', 'p.user_id', '=', 'u.id')
    //         // ->leftJoin('likes as l','l.post_id','=','p.id')
    //         ->orderBy('u.name')
    //         ->groupBy('p.id')
    //         ->select( 'p.id as p_id', 'u.name as userName', 'p.title as post_title')
    //         ->get();
        
                
    //     $likes = DB::table('likes')->selectRaw('post_id, count(*) as count_ofLikes')

    //         ->groupBy('post_id')
    //         ->get();
    //    return   $data=[...$post,...$likes];

    //     return view("posts.posts", compact("post")); 
    }
}
