<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Session, Redirect, Validator;

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
        $validator = Validator::make($request->all(), Comment::valid());
        
        // if ($request->ajax()){
        //     $comment = Comment::create($request->all());
        //     $view = (String) view('articles.comment')->with('comments', $comment)->render();
        //     return response()->json(['view' => $view, 'status' => 'Success']);
        // }

        if ($request->ajax()) {
            $comment = Comment::create($request->all());
            $view = (String) view('articles.show')->with('comments', $comment)->render();
            return response()->json(['view' => $view, 'status' => 'Successs']);
        } else {
            $comment = Comment::create($request->all());
            $view = (String) view('articles.comment')->with('comments', $comment)->render();
            return response()->json(['view' => $view, 'status' => 'Successs']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
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
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
