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
                                    <input type="text" name ="PCode" class="form-control" id="PCode" placeholder="Enter Product Code" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="PName" class="form-label">Product Name</label>
                                    <input type="text" name ="PName" class="form-control" id="PName" placeholder="Enter Product Name " required>
                                </div>

                                <div class="mb-3">
                                <label for="Description" class="form-label">Company Name</label>
                                    <select name ="Description" class="form-select" aria-label="Description" required>
                                        <option disabled selected value>Company</option>
                                        <option value="Nestle">Nestle</option>
                                        <option value="Yeos">Yeos Sam</option>
                                        <option value="FashionBun">FashionBun</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                <label for="qty" class="form-label">Total Quantity</label>
                                    <select name ="qty" id="qtyy" class="form-select" aria-label="qty" required>
                                        <option disabled selected value>Quantity</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="price" class="form-label">Unit Price</label>
                                    <input type="double" name ="price" class="form-control" id="price" placeholder="Enter Price " required onchange="calculateTotalPrice()">
                                </div>

                                <div class="mb-3">
                                    <label for="t_price" class="form-label">Total Price</label>
                                    <input type="double" name ="t_price" class="form-control" id="t_price" placeholder="Calculate Price " readonly>
                                </div>
                        <!-- Redirect to View Inventory Page -->
                                <button type="submit" class="btn btn-primary" style="background-color: #86d4f5; border: none;">Save changes</button>
                        </form>
                    
                      
            </div>
        </div>
</div>
<script>
    function calculateTotalPrice() {
            // Get the selected duration value
            var qty = document.getElementById('qtyy').value;
            var price = document.getElementById('price').value;
            // Calculate total price (assuming RM 100 per month)
            var totalPrice = qty * price;

            // Update the Total Price input field
            document.getElementById('t_price').value = totalPrice
        }
</script>
            
@endsection