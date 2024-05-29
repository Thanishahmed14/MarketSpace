<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Session;
use Stripe;

class HomeController extends Controller
{

    public function index()
    {
        $product=Product::paginate(3);
        return view('dashboard.users.pages.home', compact('product'));
    }

    public function view_product_page()
    {
        $product=Product::all();
        return view('dashboard.users.pages.product', compact('product'));
    }

    public function view_order_page()
{
    // Get the current user's ID
    $userId = Auth::id();

    // Retrieve orders where user_id is equal to the current user's ID
    $order = Order::where('user_id', $userId)->get();

    return view('dashboard.users.pages.order', compact('order'));
}


    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            $total_product = Product::all()->count();
                $total_order = Order::all()->count();
                $total_customer = User::where('usertype', '0')->count();
                $total_revenue = Order::all()->sum('price');
                $order_delivered = Order::where('delivery_status', 'Delivered')->count();
                $order_pending = Order::where('delivery_status', 'Processing')->count();

            return view('dashboard.admin.pages.home',compact('total_product', 'total_order', 'total_customer', 'total_revenue',  'order_delivered', 'order_pending'));
        }
        else
        {
            $product=Product::paginate(3);
        return view('dashboard.users.pages.home', compact('product'));
        }
    }


    function logoutUser(){
        Auth::guard('web')->logout();
        return redirect('/');
    }

    public function dashboard2()
    {
        return view('dashboard');
    }


    public function product_details($id)
    {
        $product=Product::find($id);
        return view('dashboard.users.pages.product-details',compact('product'));
    }



    public function add_cart(Request $request, $id)
        {
            if (Auth::id() && Auth::user()->usertype == 0) {
                $user = Auth::user();
                $product = Product::find($id);

                if (!$product) {
                    // Handle case where product with given $id is not found
                    return redirect()->back()->with('error', 'Product not found.');
                }

                if ($product->quantity < $request->quantity) {
                    // Handle case where requested quantity exceeds available stock
                    return redirect()->back()->with('error', 'Insufficient stock.');
                }

                // Calculate the price based on the discounted price or regular price
                $price = ($product->discount_price != null) ? $product->discount_price * $request->quantity : $product->price * $request->quantity;

                // Create a new cart item
                $cartItem = new Cart;
                $cartItem->user_id = $user->id;
                $cartItem->product_id = $product->id;
                $cartItem->name = $user->name;
                $cartItem->email = $user->email;
                $cartItem->product_title = $product->name;
                $cartItem->quantity = $request->quantity;
                $cartItem->price = $price;
                $cartItem->image = $product->image;

                // Save the cart item to the database
                $cartItem->save();

                // Subtract the quantity from the product table

                $product->save();

                return redirect()->back()->with('success', 'Product added to cart successfully.');
            } else {
                return redirect('login');
            }
        }


        public function show_cart()
        {
            if (!Auth::check()) {
                return redirect()->route('login'); // Redirect to the login page
            }

            $id = Auth::user()->id;
            $cart = Cart::where('user_id', '=', $id)->get();
            return view('dashboard.users.pages.cart', compact('cart'));
        }




        public function cash_order()
        {
            $id=Auth::user()->id;
            $data=Cart::where('user_id' , '=' , $id)->get();



            foreach($data as $data)
            {
                $order=new Order;

                $order->user_id = $data->user_id;
                $order->product_id = $data->product_id;
                $order->name = $data->name;
                $order->email = $data->email;
                $order->title = $data->product_title;
                $order->quantity = $data->quantity;
                $order->price = $data->price;
                $order->image = $data->image;
                $order->payment_status ='Cash';
                $order->delivery_status ='Processing';

                $order->save();



                $product = Product::find($order->product_id);

                // Update the product quantity
                if ($product) {
                    $product->quantity -= $order->quantity;
                    $product->save();

                }


                $data->delete();

            }

            return redirect()->back()->with('success', 'Order Successful');



        }






        public function stripe($totalprice)
        {
            return view('dashboard.users.pages.stripe',compact('totalprice'));
        }


        public function stripePost(Request $request, $totalprice)
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([
                "amount" => $totalprice * 100,
                "currency" => "USD",
                "source" => $request->stripeToken,
                "description" => "Payment Received"
        ]);




        $id=Auth::user()->id;
        $data=Cart::where('user_id' , '=' , $id)->get();



            foreach($data as $data)
            {
                $order=new Order;

                $order->user_id = $data->user_id;
                $order->product_id = $data->product_id;
                $order->name = $data->name;
                $order->email = $data->email;
                $order->title = $data->product_title;
                $order->quantity = $data->quantity;
                $order->price = $data->price;
                $order->image = $data->image;
                $order->payment_status ='Paid';
                $order->delivery_status ='Processing';

                $order->save();



                $product = Product::find($order->product_id);

                // Update the product quantity
                if ($product) {
                    $product->quantity -= $order->quantity;
                    $product->save();

                }


                $data->delete();

            }




        Session::flash('success', 'Payment successful!');

        return back();
    }

    public function delete_cart($id) {
        $cart=Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('success','cart deleted!');

    }



}
