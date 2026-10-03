<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $total_posts = \App\Models\Post::count();
        $total_latters = \App\Models\Post::where('category_id', 1)->count();
        $total_knowledges = \App\Models\Post::where('category_id', 2)->count();
        $total_reviews = \App\Models\Review::count();
        $reviews = \App\Models\Review::orderBy('created_at', 'DESC')->get();
        return view('admin.index', compact('total_posts', 'total_latters', 'total_knowledges', 'total_reviews', 'reviews'));
    }
}
