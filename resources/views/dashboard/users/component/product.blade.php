<style>
    /* CSS */
    #product-container {
        display: flex;
        flex-wrap: wrap;
        margin-left: 200px;
        margin-right: 200px;
        /* Adjust as needed for spacing and responsiveness */
    }

    .product-box {
        width: 30%; /* Adjust based on your layout requirements */
        border: 1px solid #ddd; /* Add styling as needed */
        padding: 15px;
        text-align: center;
        margin-right: 20px;
        margin-bottom: 30px; /* Adjust spacing between product boxes */
    }

    .product-box img {
        max-width: 100%;
        height: auto;
    }

    .price {
        color: #008000; /* Green color for price, adjust as needed */
    }

    .buy-now-btn {
        background-color: #3498db; /* Blue color for the button, adjust as needed */
        color: #fff;
        padding: 8px 12px;
        border: none;
        cursor: pointer;
        font-size: 14px;
        text-decoration: none; /* Remove default hyperlink styling */
        display: inline-block; /* Ensure button respects the link dimensions */
    }

    .buy-now-btn:hover {
        background-color: #2c3e50; /* Darker blue color on hover, adjust as needed */
    }
</style>

<div id="product-container">
    @foreach ($product as $product)
        <div class="product-box">
            <img width="100%"   name="image" src="{{ asset('product/' . $product->image) }}" alt="Job 1 Image">
            <h3>{{ $product->name }}</h3>
            <p class="price">$ {{ $product->price }}</p>
            <a class="table btn btn-dark" href="{{ url('/product_details',$product->id) }}">Buy Now</a>
        </div>
    @endforeach
</div>
