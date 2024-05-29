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
<title>Eflyer - product Cart</title>
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

<style>
    #productTable {
    width: 90%;
    margin-left: auto;
    margin-right: auto;
    border-collapse: collapse;
    margin-top: 20px; /* Adjust as needed */
}

#productTable th, #productTable td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

#productTable th {
    background-color: #f2f2f2;
}

#productTable tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

</style>
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

      <table id="productTable">
        <thead>
            <tr>
                <th style="text-align: center;">Product Title</th>
                <th style="text-align: center;">Product Quantity</th>
                <th style="text-align: center;">Price</th>
                <th style="text-align: center;">Payment Status</th>
                <th style="text-align: center;">Delivery Status</th>
                <th style="text-align: center; width: 220px;">Image</th>
            </tr>
        </thead>



      @foreach ($order as $order)


        <tbody>
            <td style="text-align: center;">{{ $order->title }}</td>
            <td style="text-align: center;">{{ $order->quantity }}</td>
            <td style="text-align: center;">{{ $order->price }}</td>
            <td style="text-align: center;">{{ $order->payment_status }}</td>
            <td style="text-align: center;">{{ $order->delivery_status }}</td>
            <td><img width="200px"   name="image" src="{{ asset('product/' . $order->image) }}" alt="Job 1 Image"></td>
        </tbody>


      @endforeach

    </table>




      <!-- fashion section end -->
      <div style="margin-bottom: 200px;"><h6>.</h6></div>





      <!-- footer section start -->



      @include('dashboard.users.component.footer')
      <!-- footer section end -->


      @include('dashboard.admin.components.script')
   </body>


</html>
