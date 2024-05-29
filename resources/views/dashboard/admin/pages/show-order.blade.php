<style>
    /* Style for the custom table */
.custom-table {
  width: 90%;
  margin:50px;
  border-collapse: collapse;
  border-spacing: 0;
}

/* Style for table header */
.custom-table thead th {
  background-color: #f2f2f216;
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
  background-color: #f9f9f91f;
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

    <style>
        .my_image {
    /* Add your styles here */
    width: 500px; /* Example width */
    height: auto; /* Maintain aspect ratio */
    border: 2px solid #ccc; /* Example border */
    border-radius: 5px; /* Example border radius */
    margin: 10px; /* Example margin */
    /* Add more styles as needed */
}
    </style>


  </head>
  <body>
    <div class="container-scroller">

      @include('dashboard.admin.components.sidebar')



      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">



            <div class="search_button_section" style="text-align: center;">
                <form action="{{ url('search2') }}" method="GET">

                    @csrf

                    <input style="height: 50px; width: 500px; border-radius: 8px; padding-left: 10px;" type="text" name="search" placeholder="Search Here">
                    <input style="height: 50px; width: 100px; border-radius: 8px;" class=" btn btn-danger" type="submit" value="Search">
                </form>
            </div>




                  <table class="custom-table">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Payment Status</th>
                        <th>Delivery Status</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>

                        @forelse  ($data as $data)


                      <tr>
                        <td><img class="my_image" src="{{ asset('product/' . $data->image) }}"></td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->quantity }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->payment_status }}</td>
                        <td>{{ $data->delivery_status }}</td>






                        @if ($data->delivery_status == 'Processing')
                        {


                            <td style="align-self: center"><button class="table btn btn-danger" style="width: 100px; height: 40px; margin:5px; margin-left:20px;"><a onclick="return confirm('Are you sure The Order is Delivered?')" href="{{ url('/updatestatus',$data->id) }}"  style="color: white">Delivered?</a></button></td>

                        }

                        @else
                        {
                            <td style="align-self: center"><button class="table btn btn-success" style="width: 100px; height: 40px; margin:5px; margin-left:20px;"><a style="color: white">Delivered</a></button></td>
                        }

                        @endif




                      </tr>


                      @empty

            <tr><td colspan="16">No Data Found</td></tr>


                      @endforelse

                    </tbody>
                  </table>





        </div>
      </div>







      @include('dashboard.admin.components.script')
  </body>
</html>
