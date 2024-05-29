


<!DOCTYPE html>
<html lang="en">
  <head>

    @include('dashboard.admin.components.head')


  </head>
  <body>
    <div class="container-scroller">

      @include('dashboard.admin.components.sidebar')



      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">








            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h1 class="card-title">Update Products</h1>
                    <form class="forms-sample" action="{{ route('update-product',$product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Product Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
                      </div>

                      <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category"  name="category"  required style="color: white">
                            <option style="color: white">{{ $product->category }}</option>
                            @foreach ($category as $category)
                            <option style="color: white">{{ $category->name }}</option>
                            @endforeach

                        </select>
                      </div>



                      <div class="" style="width: 100%; margin-bottom: 40px;" >
                        <label>Image</label>
                        <input style="width: 100%" type="file" name="image" class="custom-file-upload">

                      </div>









                      <button type="submit" class="btn btn-primary mr-2">Update</button>




                    </form>




                    <h1 style="margin-top: 100px">Update Your Image</h1>

                    <form class="forms-sample" action="{{ route('update-product-image',$product->id) }}" method="POST" enctype="multipart/form-data" style="margin-top: 30px">
                        @csrf



                        <label style="margin-top: 30px">Old Image</label>
                        <img width="100px"   name="image" src="{{ asset('product/' . $product->image) }}" alt="Job 1 Image" style="margin-bottom: 30px">



                        <div class="" style="width: 100%; margin-bottom: 40px;" style="margin-top: 60px">
                          <label>New Image</label>
                          <input style="width: 100%" type="file" name="image" class="custom-file-upload">

                        </div>











                  <button type="submit" class="btn btn-primary mr-2">Update</button>
                </form>






                  </div>
                </div>
              </div>




        </div>
      </div>







      @include('dashboard.admin.components.script')
  </body>
</html>
