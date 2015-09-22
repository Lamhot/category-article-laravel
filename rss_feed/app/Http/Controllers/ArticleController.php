<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;
use Validator;

class ArticleController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $article = Article::paginate(20);
        return view('article-list')->with('article', $article);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
       $category = \DB::table('categories')->lists('name', 'id');
       $website = \DB::table('websites')->lists('name', 'id');
        return view('add-new-article')->with('category',$category)->with('website', $website);
       
    }

    /**s
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        // Validation //
        $validation = Validator::make($request->all(), [
                    'title' => 'required',
                    'url' => 'required',
                    'thumnail_url' => 'required',
                    'summary' => 'required',
                    'content' => 'required',
                    'publish_date' => 'required',
                    'website_id' => 'required',
                    'category_id' => 'required',
        ]);

        // Check if it fails //
        if ($validation->fails()) {
            return redirect()->back()->withInput()
                            ->with('errors', $validation->errors());
        }

        // Process valid data & go to success page //
        $article = new Article;
        $article->id = $request->input('id');
        $article->title = $request->input('title');
        $article->url = $request->input('url');
        $article->thumnail_url = $request->input('thumnail_url');
        $article->summary = $request->input('summary');
        $article->content = $request->input('content');
        $article->publish_date = $request->input('publish_date');
        $article->website_id = $request->input('website_id');
        $article->category_id = $request->input('category_id');
        $article->save();
        return redirect('/article')->with('message', 'You just uploaded a Article!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $article = Article::find($id);
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $article = Article::find($id);
        return view('edit-article', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        // Validation //
        $validation = Validator::make($request->all(), [
                    'title' => 'required',
                    'url' => 'required',
                    'thumnail_url' => 'required',
                    'summary' => 'required',
                    'content' => 'required',
                    'publish_date' => 'required',
                    'website_id' => 'required',
                    'category_id' => 'required',
        ]);

        // Check if it fails //
        if ($validation->fails()) {
            return redirect()->back()->withInput()
                            ->with('errors', $validation->errors());
        }

        // Process valid data & go to success page //

        $article = Article::find($id);
        $article->id = $request->input('id');
        $article->title = $request->input('title');
        $article->url = $request->input('url');
        $article->thumnail_url = $request->input('thumnail_url');
        $article->summary = $request->input('summary');
        $article->content = $request->input('content');
        $article->publish_date = $request->input('publish_date');
        $article->website_id = $request->input('website_id');
        $article->category_id = $request->input('category_id');
        $article->save();

        return redirect('/article')->with('message', 'You just updated a Article!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $article = Article::find($id);
        $article->delete();
        return redirect('/article')->with('message', 'You just deleted a Article!');
    }

}
