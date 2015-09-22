<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Website;
use Illuminate\Http\Request;
use Validator;

class WebsiteController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $website = Website::paginate(20);
        return view('website-list')->with('website', $website);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $category = \DB::table('categories')->lists('name', 'id');
        return view('add-new-website')->with('category', $category);
        //return view('add-new-website');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        // Validation //
        $validation = Validator::make($request->all(), [
                    'name' => 'required',
                    'url' => 'required',
                    'rss_url' => 'required',
                    'category_id' => 'required',
        ]);

        // Check if it fails //
        if ($validation->fails()) {
            return redirect()->back()->withInput()
                            ->with('errors', $validation->errors());
        }

        // Process valid data & go to success page //
        $website = new Website;

        $website->id = $request->input('id');
        $website->name = $request->input('name');

        $website->url = $request->input('url');
        $website->rss_url = $request->input('rss_url');
        $website->category_id = $request->input('category_id');
        $website->save();
        return redirect('/website')->with('message', 'You just uploaded a Website!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $website = Website::find($id);
        return view('website.show', compact('webiste'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $website = Website::find($id);
        return view('edit-website', compact('website'));
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
                    'name' => 'required',
                    'url' => 'required',
                    'rss_url' => 'required',
                    'category_id' => 'required',
        ]);

        // Check if it fails //
        if ($validation->fails()) {
            return redirect()->back()->withInput()
                            ->with('errors', $validation->errors());
        }

        // Process valid data & go to success page //
      
        $website = Website::find($id);
        $website->id = $request->input('id');
        $website->name = $request->input('name');
        $website->url = $request->input('url');
        $website->rss_url = $request->input('rss_url');
        $website->category_id = $request->input('category_id');
        $website->save();

        return redirect('/website')->with('message', 'You just updated a Website!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $website = Website::find($id);
        $website->delete();
        return redirect('/website')->with('message', 'You just deleted a Website!');
    }

}
