<div class="user-menu-div">
<ul >
    @if (Route::has('login'))

    @auth

    <li class="user-menu">
     <a href="#" class="menu-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
         <span class="nav-label">{{ Auth::guard('web')->user()->name }}</span> <span class="caret"></span>
     </a>
     <ul class="dropdown-menu">
         <li><a href="{{ route('profile.show') }}">Profile</a></li>
         <li><a href="{{ route('logout') }}">Logout</a></li>
     </ul>
 </li>




    @else

   <li class="nav-item">
       <a  href="{{ route('login') }}" hidden>Login</a>
    </li>
    <li class="nav-item">
       <a href="{{ route('register') }}" hidden>Register</a>
    </li>



    @endauth

    @endif
</ul>

</div>

<div class="container">
    <div class="header_section_top">
       <div class="row">
          <div class="col-sm-12">
             <div class="custom_menu">
                <ul>
                   <li><a href="{{ url('/') }}">Home</a></li>
                   <li><a href="{{ url('/view_product_page') }}">Product</a></li>
                   <li><a href="{{ url('show_cart') }}">Cart</a></li>
                   <li><a href="{{ url('/view_order_page') }}">Orders</a></li>

                   @if (Route::has('login'))

    @auth

    <li hidden>
     <a href="#" class="menu-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
         <span class="nav-label">{{ Auth::guard('web')->user()->name }}</span> <span class="caret"></span>
     </a>
     <ul >
         <li><a href="{{ route('profile.show') }}">Profile</a></li>
         <li><a href="{{ route('logout') }}">Logout</a></li>
     </ul>
 </li>




    @else

   <li >
       <a  href="{{ route('login') }}">Login</a>
    </li>
    <li >
       <a href="{{ route('register') }}">Register</a>
    </li>



    @endauth

    @endif


                </ul>
             </div>
          </div>
       </div>
    </div>
 </div>









