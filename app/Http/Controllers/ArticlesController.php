<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;

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
        $pathImage = 'images/article/';

        $modelArticle = new Article();
        if ($request->article_image){
            //Rename file upload to Image_articlerandom.extensiondile
            $article_image = 'image_article-'.str_random(5).time().'.'.$request->file('article_image')->getClientOriginalExtension();
            //Path Location file 
            $request->article_image->move(public_path('images/article/'), $article_image);
            //Save name file to field article_image
            $modelArticle->article_image = $article_image;
        }
        $title = $request->get('title');
        $content = $request->get('content');
        $modelArticle->title =$title;
        $modelArticle->content = $content;
        $modelArticle->save();
        
        return redirect()->route('Article.index');
        // Article::create($request->all());
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
        $pathImage = 'images/article/';
        $modelArticle =  Article::find($id);
        $patsebelum = 'images/article/'. $modelArticle->article_image;

        if (file_exists($patsebelum)){
            unlink($patsebelum);
        }

        if ($request->article_image){
            //Rename file upload to Image_articlerandom.extensiondile
            $article_image = 'image_article-'.str_random(5).time().'.'.$request->file('article_image')->getClientOriginalExtension();
            //Path Location file 
            $request->article_image->move(public_path('images/article/'), $article_image);
            //Save name file to field article_image
            $modelArticle->article_image = $article_image;
        }
        $title = $request->get('title');
        $content = $request->get('content');

        $modelArticle->title =$title;
        $modelArticle->content = $content;        

        $modelArticle->save();

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
