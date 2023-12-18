@extends('layout.master')
@section('content')

<!DOCTYPE html>
<html>

<body>

<div class = 'container'>



<div class="row">
    <div class="col-5 ">
        <h1>Manage Inventory</h1>
    </div>
    <!-- Button to go to add Inventory Page -->
    <div>
        <a href="Add" class="btn btn-primary" style="background-color: #86d4f5; border: none;"><i class="bx bx-plus me-1"></i>Add Inventory</a>
     </div>
     <!-- Table for Inventory Details -->
    <div class="card shadow mb-1">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Product Name</th>
                                <th>Company</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <!-- Data from add Inventory Display here -->
                        <tbody>

                            @foreach($data_inventory as $inventory)
                            <tr>
                                <td>{{$inventory->PCode}}</td>
                                <td>{{$inventory->PName}}</td>
                                <td>{{$inventory->Description}}</td>
                                <td>{{$inventory->qty}}</td>
                                <td>{{$inventory->price}}</td>
                                <td>{{$inventory->t_price}}</td>

                        <!-- Butoon to go to Edit Inventory Page -->    
                                <td>
                                <a href="datainventory/{{$inventory->id}}/edit" class="btn btn1" style="background-color: blue; color: white;">Update</a>
                                </td>

                                <!-- Button to Delete Inventory -->
                                <td><a href="datainventory/{{$inventory->id}}/delete" onclick = "return confirm('Are you sure?')" class="btn btn1" style="background-color: red; color: white;">Delete</a></td>
                            </tr>
                            @endforeach

                            </tr>
                           
                            </tbody>
                    </table>
                </div>
            </div>

          </div>
        
</html>    


@endsection