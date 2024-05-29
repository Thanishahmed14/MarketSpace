<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function index()
     {
        $product=Product::all();
        $usertype=Auth::user();
        $category=Category::all();
         return view('dashboard.admin.pages.add-products',compact('category','usertype'));
     }


     public function show()
     {
        $category=Category::all();
         $product=Product::all();
         return view('dashboard.admin.pages.show-products',compact('product','category'));
     }


     public function view_update_product($id)
    {
        $category=Category::all();
        $product=Product::find($id);
        return view('dashboard.admin.pages.update-product', compact("category","product"));
    }

    public function update(Request $request, $id)
    {
        $product=Product::find($id);

        $product->name=$request->name;
        $product->description=$request->description;
        $product->category=$request->category;
        $product->quantity=$request->quantity;
        $product->price=$request->price;

        $product->save();

        return redirect()->back();
    }

    public function update_image(Request $request, $id)
    {
        $data=Product::find($id);

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
                    $request->image->move('product',$imagename);

        $data->image=$imagename;

        $data->save();

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Product;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
                    $request->image->move('product',$imagename);

        $data->image=$imagename;

        $data->name = $request->name;
        $data->description = $request->description;
        $data->category = $request->category;
        $data->quantity = $request->quantity;
        $data->price = $request->price;


        $data->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect()->back();
    }
}
