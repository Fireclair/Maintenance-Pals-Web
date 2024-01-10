@extends('layout.master')
@section('content')

<!DOCTYPE html>
<html>

<body>
<div class = 'container'>
    
            @if(session('success'))
        <div class="alert alert-primary" role="alert">
        {{session('success')}}
        </div>
            @endif
        </div>
        <!-- Form to Update Inventory  -->
        <div class = "row justify-content-md-center">
            <div class="col-lg-6">
            <h1>Update Inventory</h1>
        <form action="/datainventory/{{$data_inventory->id}}/update" method="POST">
                        {{csrf_field()}}
                        <div class="mb-3">
                                    <label for="PCode" class="form-label">Product Code</label>
                                    <input type="text" name ="PCode" class="form-control" id="PCode" placeholder="Enter Product Code" value="{{$data_inventory->PCode}}">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="PName" class="form-label">Product Name</label>
                                    <input type="text" name ="PName" class="form-control" id="PName" placeholder="Enter Product Name " value="{{$data_inventory->PName}}">
                                </div>

                                <div class="mb-3">
                                    <select name ="Description" class="form-select" aria-label="Description">
                                        <option selected>Company</option>
                                        <option value="Nestle"  @if($data_inventory->Description =='Nestle') selected @endif>Nestle</option>
                                        <option value="Yeos"  @if($data_inventory->Description =='Yeos') selected @endif>Yeos Sam</option>
                                        <option value="FashionBun"  @if($data_inventory->Description =='FashionBun') selected @endif>FashionBun</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <select name ="qty" class="form-select" aria-label="qty">
                                        <option selected>Quantity</option>
                                        <option value="10" @if($data_inventory->qty =='10') selected @endif>10</option>
                                        <option value="20" @if($data_inventory->qty =='20') selected @endif>20</option>
                                        <option value="30" @if($data_inventory->qty =='30') selected @endif>30</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="double" name ="price" class="form-control" id="price" placeholder="Enter Price " value="{{$data_inventory->price}}">
                                </div>

                                <!-- Redirect to View Inventory Page -->
                            <button type="submit" class="btn btn-primary float-end">Update</button>
                            </form>
                            </div>
        </div>
    
</body>
</html>    
@endsection