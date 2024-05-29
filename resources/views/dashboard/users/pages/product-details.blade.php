<!DOCTYPE html>
<html lang="en">
   <head>

    <base href="/public">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Eflyer - product Detsils</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- bootstrap css -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
<!-- font awesome -->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--  -->
<!-- owl stylesheets -->
<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesoeet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">


      @include('dashboard.users.component.head')
   </head>
   <body>
      <!-- banner bg main start -->

         <!-- header top section start -->
         @include('dashboard.users.component.nav')
         <!-- header top section start -->

         <!-- logo section end -->
         <!-- header section start -->

         <!-- header section end -->
         <!-- banner section start -->

         <!-- banner section end -->

      <!-- banner bg main end -->


      <div style="margin-bottom: 50px;"><h6>.</h6></div>
      <!-- fashion section start -->
      <div class="content-container">
        <div class="product-details">
          <div class="product-image">
            <img width="350px"  name="image" src="{{ asset('product/' . $product->image) }}" alt="Job 1 Image">
          </div>
          <div class="product-info">
            <h2 class="product-title">{{ $product->name }}</h2>
            <p class="product-description">{{ $product->description }}</p>
            <p class="product-description">{{ $product->category }}</p>
            <div class="product-price">Price: ${{ $product->price }}</div>
            <div class="product-quantity">
                <p class="product-description">Quantity: {{ $product->quantity }}</p>
                <form id="cart_form" action="{{ url('add_cart',$product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="quantity-section">
                      <label for="quantity"></label>
                      <input type="number" id="quantity" name="quantity" min="1" value="1" max="{{ $product->quantity }}">
                    </div>
                    <button type="submit" class="add-to-cart-btn">Add to Cart</button>
                  </form>
          </div>
        </div>
      </div>
      </div>

      <div style="margin-bottom: 50px;"><h6>.</h6></div>


      <!-- fashion section end -->
      





      <!-- footer section start -->



      @include('dashboard.users.component.footer')
      <!-- footer section end -->


      @include('dashboard.admin.components.script')
   </body>
</html>
