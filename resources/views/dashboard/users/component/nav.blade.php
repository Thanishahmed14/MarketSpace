<ul class="navbar">
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ url('/view_product_page') }}">Products</a></li>
    <li><a href="{{ url('show_cart') }}">Cart</a></li>
    <li><a href="{{ url('/view_order_page') }}">Orders</a></li>
</ul>





@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
