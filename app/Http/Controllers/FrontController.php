<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'DESC') ->paginate(6);
        return view('front.index', compact('posts'));
    }

    public function detail($id, $category_id){
        $post = Post::where('id', $id) -> first();
        $posts_category = Post::where('category_id', $category_id) ->where('id', '!=', $id) ->orderBy('id','DESC') ->get();
        return view('front.detail', compact('post','posts_category'));
    }
}
