@extends('layout.master')
@section('content')

<div class = 'container'>

        <div class = "row justify-content-md-center">
            <div class="col-lg-6">
                <h1>Add New Stock</h1>
                <!-- Form to Add new Inventory -->


                        <form action="/datainventory/create" method="POST">
                            {{csrf_field()}}
                                <div class="mb-3">
                                    <label for="PCode" class="form-label">Product Code</label>
                                    <input type="text" name ="PCode" class="form-control" id="PCode" placeholder="Enter Product Code">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="PName" class="form-label">Product Name</label>
                                    <input type="text" name ="PName" class="form-control" id="PName" placeholder="Enter Product Name ">
                                </div>

                                <div class="mb-3">
                                    <select name ="Description" class="form-select" aria-label="Description">
                                        <option selected>Company</option>
                                        <option value="Nestle">Nestle</option>
                                        <option value="Yeos">Yeos Sam</option>
                                        <option value="FashionBun">FashionBun</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <select name ="qty" class="form-select" aria-label="qty">
                                        <option selected>Quantity</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="double" name ="price" class="form-control" id="price" placeholder="Enter Price ">
                                </div>
                        <!-- Redirect to View Inventory Page -->
                                <button type="submit" >Save changes</button>
                        </form>
                    
                      
            </div>
        </div>
</div>

            
@endsection