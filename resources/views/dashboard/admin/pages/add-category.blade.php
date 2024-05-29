<style>
    .my-form{
        width: 90%;
        margin:50px;
    }

    .my-form button{
        margin-top: 30px;
        width: 120px;
        height: 50px;
        border-radius: 5px;
        background-color: green;
        color: white;
    }

    .my-form button:hover {
        background-color: rgb(0, 66, 0);
    }


    /* Style for the custom table */
.custom-table {
  width: 60%;
  margin:50px;
  border-collapse: collapse;
  border-spacing: 0;
}

/* Style for table header */
.custom-table thead th {
  background-color: #f2f2f212;
  color: #ffffff;
  font-weight: bold;
  text-align: left;
  padding: 10px;
}

/* Style for table body rows */
.custom-table tbody td {
  padding: 10px;
  border-bottom: 1px solid #ddd;
}

/* Style for alternating rows */
.custom-table tbody tr:nth-child(even) {
  background-color: #f9f9f915;
}

/* Style for images within the table */
.custom-table .my_image {
  max-width: 100px;
  max-height: 100px;
}

/* Style for product names */
.custom-table td:nth-child(2) {
  font-weight: bold;
}

/* Style for product prices */
.custom-table td:nth-child(4) {
  color: #007bff;
}

/* Style for out of stock items */
.custom-table td:nth-child(5) {
  color: #ff0000;
}

/* Style for category */
.custom-table td:nth-child(6) {
  font-style: italic;
}



</style>


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




                  <div class="my-form">
                    <h1>Add Categories</h1>
                    <form class="forms-sample" action="{{ route('add-category') }}" method="Post" enctype="multipart/form-data">
                        @csrf



                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" required>





                      <button type="submit" class="table btn btn-success">Submit</button>
                    </form>
                  </div>





                  <table class="custom-table">
                    <thead>
                      <tr>
                        <th>Category Name</th>
                        <th style="width: 150px;">Action</th>

                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($category as $category)


                      <tr>
                        <td>{{ $category->name }}</td>
                        <td style="align-self: center"><button class="table btn btn-danger" style="width: 100px; height: 40px; margin:5px; margin-left:20px;"><a onclick="return confirm('Are you sure you want to delete this Category?')" href="{{ route('delete-category',$category->id) }}" style="color: white">Delete</a></button></td>

                      </tr>

                      @endforeach

                    </tbody>
                  </table>








        </div>
      </div>







      @include('dashboard.admin.components.script')
  </body>
</html>
