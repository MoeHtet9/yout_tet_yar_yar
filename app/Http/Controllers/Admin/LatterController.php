<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\LatterRequest;
class LatterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Latters = Post::where('category_id', 1)->orderBy('id','desc')->paginate(15);
        return view('admin.latters.index',compact('Latters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.latters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LatterRequest $request)
    {
        // dd($request);
        $latter = Post::create($request->all());

        // file upload
        $file_name = time().'.'.$request->image->extension();//2242143142.jpg

        $upload = $request->image->move(public_path('images/posts/'), $file_name); // folder upload

        if ($upload) {
            $latter->image = "/images/posts/".$file_name;
        }

        $latter->save();

        return redirect()->route('admin.latters.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $latter = Post::find($id);
        return view('admin.latters.edit', compact('latter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $latter = Post::find($id);
        $latter->update($request->all());

        if($request->hasFile('image')) {
            // file upload
            $file_name = time().'.'.$request->image->extension();//2242143142.jpg

            $upload = $request->image->move(public_path('images/posts/'), $file_name); // folder upload

            if ($upload) {
                $latter->image = "/images/posts/".$file_name;
            }
        }else{
            $latter->image = $request->old_image;
        }

        $latter->save();
        
        return redirect()->route('admin.latters.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $latter = Post::find($id);
        $latter->delete();

        return redirect()->route('admin.latters.index');
    }
}
