<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\KnowledgeRequest;
class KnowledgeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Knowledges = Post::where('category_id', 2)->orderBy('id', 'desc')->paginate(15);
        return view('admin.knowledges.index', compact('Knowledges'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.knowledges.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KnowledgeRequest $request)
    {
        // dd($request);
        $knowledge = Post::create($request->all());

        // file upload
        $file_name = time().'.'.$request->image->extension();//2242143142.jpg

        $upload = $request->image->move(public_path('images/posts/'), $file_name); // folder upload

        if ($upload) {
            $knowledge->image = "/images/posts/".$file_name;
        }

        $knowledge->save();

        return redirect()->route('admin.knowledges.index');
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
        $knowledge = Post::find($id);
        return view('admin.knowledges.edit', compact('knowledge'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $knowledge = Post::find($id);
        $knowledge->update($request->all());

        if($request->hasFile('image')) {
            // file upload
            $file_name = time().'.'.$request->image->extension();//2242143142.jpg

            $upload = $request->image->move(public_path('images/posts/'), $file_name); // folder upload

            if ($upload) {
                $knowledge->image = "/images/posts/".$file_name;
            }
        }else{
            $knowledge->image = $request->old_image;
        }

        $knowledge->save();
        
        return redirect()->route('admin.knowledges.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $knowledge = Post::find($id);
        $knowledge->delete();

        return redirect()->route('admin.knowledges.index');
    }
}
