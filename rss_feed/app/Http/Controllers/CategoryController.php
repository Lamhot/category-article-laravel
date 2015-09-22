<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Category;
use Illuminate\Http\Request;
use Validator;

class CategoryController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $category = Category::paginate(20);
        return view('category-list')->with('category', $category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('add-new-category');
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
        ]);

        // Check if it fails //
        if ($validation->fails()) {
            return redirect()->back()->withInput()
                            ->with('errors', $validation->errors());
        }

        // Process valid data & go to success page //
        $category = new Category;

        $category->id = $request->input('id');
        $category->name = $request->input('name');
        $category->save();

        return redirect('/category')->with('message', 'You just uploaded a Category!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $category = Category::find($id);
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $category = Category::find($id);
        return view('edit-category', compact('category'));
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
        ]);

        // Check if it fails //
        if ($validation->fails()) {
            return redirect()->back()->withInput()
                            ->with('errors', $validation->errors());
        }

        // Process valid data & go to success page //
        $category = Category::find($id);


        $category->id = $request->input('id');
        $category->name = $request->input('name');
        $category->save();

        return redirect('/category')->with('message', 'You just updated a Category!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect('/category')->with('message', 'You just deleted a Category!');
    }

}
