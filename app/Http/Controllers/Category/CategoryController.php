<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('category.index')->with([
            'category' => Category::all()
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate();

        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return  redirect('category')->with('msg', 'Add new students Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Category::find($id);
        return view('category.formedit')->with([
            'name' => $data->name,
            'id' => $id,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request,  $id)
    {
        $data = Category::find($id);
        $data->name = $request->name;
        $data->save();

        return redirect('category')->with('msg', ' Data dengan nama category' . $data->name . ' berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Category::find($id);
        $data->delete();
        return redirect('category')->with('msg', ' Data dengan nama category' . $data->name . ' berhasil dihapus');
    }
}
