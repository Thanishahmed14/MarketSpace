<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show_order()
    {
        $data = Order::all();
        return view('dashboard.admin.pages.show-order', compact('data'));
    }

    public function updatestatus($id)
    {
        $data=Order::find($id);

        $data->delivery_status= "Delivered";

        $data->payment_status= "Paid";

        $data->save();

        return redirect()->back();
    }



    public function searchdata2(Request $request)
        {
            $searchtext = $request->search;

            $data = Order::where('name', 'LIKE', "%$searchtext%")
                 ->orWhere('title', 'LIKE', "%$searchtext%")
                 ->orWhere('payment_status', 'LIKE', "%$searchtext%")
                 ->orWhere('email', 'LIKE', "%$searchtext%")
                 ->get();


            return view('dashboard.admin.pages.show-order', compact('data'));
        }



        public function searchdata3(Request $request)
        {
            $product=Product::all();
            $category = Category::all();
            $searchtext = $request->search;

            $data = Product::where('name', 'LIKE', "%$searchtext%")

                 ->orWhere('category', 'LIKE', "%$searchtext%")

                 ->get();


            return view('dashboard.admin.pages.show-products', compact('data','category'));
        }


}
