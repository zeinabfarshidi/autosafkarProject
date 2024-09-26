<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Acces;
use App\Models\Category;
use App\Models\Permission;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'text' => 'required|string',
            'categories'=>'required|string',
            'img'=>'nullable|image',
        ]);
        $data['user_id'] = auth()->user()->id;
        if ($request->file('img')){
            $img = $request->file('img');
            $imgName = time() . '_' . $img->getClientOriginalName();
            $directory = 'admin/images/post';
            $img->storeAs('storage/' . $directory, $imgName, 'public_files');
            $data['img'] = "$directory/$imgName";
        }
        $post = Post::create($data);
        foreach (json_decode($request->categories) as $item){
            $category = Category::find($item->id);
            $post->categories()->save($category);
        }

        Permission::store('post', 'مقالات');

        alert()->success('در سایت نمایش داده می شود', 'مقاله با موفقیت منتشر شد');
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'text' => 'required|string',
            'img'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->file('img')){
            File::delete(public_path('storage/' . $post->img));
            $img = $request->file('img');
            $imgName = time() . '_' . $img->getClientOriginalName();
            $directory = 'admin/images/post';
            $img->storeAs('storage/' . $directory, $imgName, 'public_files');
            $data['img'] = "$directory/$imgName";
        }
        $post->update($data);

        alert()->success('تغییرات اعمال شد', 'مقاله با موفقیت ویرایش شد');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
