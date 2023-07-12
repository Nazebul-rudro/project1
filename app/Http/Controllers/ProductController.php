<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\category;
use App\Models\product;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = product::all();
        return view('backend.product.index', ['products' => $products]);
    }
    public function create()
    {
        $categories = category::all();
        return view('backend.product.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'productName' => ['required'],
            // 'productDescription' => ['required'],
            // "productImage" => 'mimes:jpeg,jpg,png,gif|required|file',
        ]);

        try {
//dd($request->all());

            $exe = $request->file('productImages')->getClientOriginalExtension();
            $fileName = time() . uniqid() . '.' . $exe;
           $request->file('productImages')->storeAs('/public/products', $fileName);
            product::create([
                'productName' => $request->productName,
                'productDescription' => $request->productDescription,
                'category_id' => $request->category,
                'price' => $request->price,
                'productImages' => $fileName,
            ]);

            // dd('ok');
            return redirect()->route('product')->with('massage', 'Product Create Successfully');
        } catch (QueryException $e) {
            return $e->getMessage();
        }
    }
    public function show($id)
    {
        $products = product::find($id);
        return view('backend.product.show', ['products' => $products]);
    }
    public function edit(product $product)
    {
        $categories = category::all();
        return view('backend.product.edit', compact('product', 'categories'));
    }
    public function update(ProductRequest  $request, product $product)
    {
        $exe = $request->file('productImages')->getClientOriginalExtension();
        $fileName = time() . uniqid() . '.' . $exe;
        if($request->hasFile('productImages')){
            $request->file('productImages')->storeAs('/public/products', $fileName);
        }
        //  $exe = $request->file('productImages')->getClientOriginalExtension();
        // $fileName = time() . uniqid() . '.' . $exe;
        // $request->file('productImages')->storeAs('/public/products', $fileName);
        $requestData = ([
            'productName' => $request->productName,
            'productDescription' => $request->productDescription,
            'category_id' => $request->category,
            'price' => $request->price,
             'productImages' => $fileName,
            // 'productImages' => $request->productImages,
            'productImages' =>$fileName ?? $product->productImages,
        ]);
        $product->update($requestData);
        return redirect()->route('product')->with('massage', "Product Update Successfully");
    }
    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('product')->with('massage', "Product Delete Successfully");
    }

    public function trash(){
       $trashData = product::onlyTrashed()->get();
        return view('backend.product.truste', compact('trashData'));
    }

    public function restore($id){
$restoreData = product::onlyTrashed()->findOrFail($id);
$restoreData->restore();
return redirect()->route('product')->with('massage', "Product Restore Successfully");
    }


    public function delete($id){
$delete = product::onlyTrashed()->findOrFail($id);
$delete->forceDelete();
return redirect()->route('product.trashed')->with('massage', 'Product Parmanently Delete Successfully');
    }
}
