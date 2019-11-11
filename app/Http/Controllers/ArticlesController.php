<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('sentinel');

        // $this->middleware('sentinel.role');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Tampung data yang akan di kirim ke view articles/index
        // $content = $request->input('content');
        // if(!empty($content))
        // {
        //     $articles = Article::where('title','like','%'.$content.'%')
        //     ->orWhere('content','like','%'.$content.'%')->paginate(3);
        // }else
        // {
        //     $articles = Article::paginate(6);
        // }
        // dd($request->all());
        if ($request->ajax()) {
            $articles = Article::with('comments')->where('title', 'like', '%' . $request->search . '%')->paginate(2);
            $view = (string) view('articles.list')->with('articles', $articles)->render();

            return response()->json(['view' => $view, 'status' => 'success']);
        }
        $articles = Article::paginate(6);
        return view('articles/index')->with('articles', $articles);
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
        Article::create($request->all());
        return redirect()->route('Article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        $comments = Article::find($id)->comments->sortBy('comments.create_at');
        return view('articles/show')->with('article', $article)
            ->with('comments', $comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $article = Article::find($id);
        return view('articles/editform')->with('articles', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Article::find($id)->update($request->all());
        return redirect()->route('Article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::DESTROY($id);
        return redirect()->route('Article.index');
    }

    public function new()
    {
        return view('articles/newarticle');
    }
}
