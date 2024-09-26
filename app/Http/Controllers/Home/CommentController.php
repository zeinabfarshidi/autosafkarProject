<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Acces;
use App\Models\Comment;
use App\Models\Permission;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentController extends Controller
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
            'text'=>'required|string',
            'score'=>'required|integer',
            'commentable_type'=> 'required|string',
            'commentable_id'=>'required|integer',
            'comment_id'=>'nullable|exists:comments,id',
        ]);
        $data['user_id'] = auth()->user()->id;
        $data['text'] = nl2br($request->text);
        if ($request->comment_id){
            $comment = Comment::find($request->comment_id);
            $comment->comments()->create([
                'user_id'=>$data['user_id'],
                'text'=>$data['text']
            ]);
        }
        else{
            Comment::create($data);
            Permission::store('comment', 'نظرات');
//            $model = $request->commentable_type::find($request->commentable_id);
//            $model->comments()->create([
//                'user_id'=>auth()->user()->id,
//                'text'=>nl2br($request->text)
//            ]);
        }

        alert()->success('در صورت تایید نمایش داده می شود', 'نظر شما با موفقیت ثبت شده و در انتظار تاییده');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
