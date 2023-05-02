<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index')->with([
            'product' => Product::all()
        ]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validate = $request->validate();

        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return  redirect('product')->with('msg', 'Add new product Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    { {
            $data = Product::find($id);
            return view('product.formedit')->with([
                'name' => $data->name,
                'price' => $data->price,
                'id' => $id,
            ]);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request,  $id)
    {
        $data = Product::find($id);
        $data->name = $request->name;
        $data->price = $request->price;
        $data->save();
        return redirect('product')->with('msg', ' Data dengan nama product' . $data->name . ' berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect('product')->with('msg', ' Data dengan nama product' . $data->name . ' berhasil dihapus');
    }
}
