<div class="fashion_section" style="margin-top: 50px;">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
          <div class="carousel-item active">
             <div class="container">
                <h1 class="fashion_taital">Products</h1>
                <div class="fashion_section_2">
                   <div class="row">


                    

                    @foreach ($product as $products)



                      <div class="col-lg-4 col-sm-4">
                         <div class="box_main">
                            <h4 class="shirt_text">{{ $products->name }}</h4>
                            <p class="price_text">Price  <span style="color: #262626;">$ {{ $products->price }}</span></p>
                            <div class="tshirt_img"> <img width="100%"   name="image" src="{{ asset('product/' . $products->image) }}" alt="Job 1 Image"></div>
                            <div class="btn_main">
                               <div class="buy_bt"><a href="{{ url('/product_details',$products->id) }}">Buy Now</a></div>

                            </div>
                         </div>
                      </div>


                      @endforeach




                      {{ $product->withQueryString()->links('pagination::bootstrap-5') }}





                   </div>
                </div>
             </div>
          </div>

       </div>

       </a>
    </div>
 </div>
