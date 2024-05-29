


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
                    <h1 class="card-title">Add Products</h1>
                    <form class="forms-sample" action="{{ route('add-product') }}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Product Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Product Description" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Product Quantity" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Product Price" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <select class="form-control" id="category" name="category" required>
                            @foreach ($category as $category)
                            <option>{{ $category->name }}</option>
                            @endforeach

                        </select>
                      </div>



                      <div class="" style="width: 100%; margin-bottom: 40px;" >
                        <label>Image</label>
                        <input style="width: 100%" type="file" name="image" class="custom-file-upload">

                      </div>


                      <style>
                        .custom-file-upload {
  border: 1px solid #ccc;
  display: inline-block;
  padding: 6px 12px;
  cursor: pointer;
  background-color: #f9f9f900;
}
                      </style>



                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>




        </div>
      </div>







      @include('dashboard.admin.components.script')
  </body>
</html>
