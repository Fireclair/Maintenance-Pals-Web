@extends('layout.master')
@section('content')
<!-- This is Add new vendor table blade file -->
<head><!-- Vendor Styling -->
  <style> 
    .vendor .sub {
      width: 100%;
      padding: 30px;
      background: #fff;
      box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
    }

    .vendor .sub .form-group {
      padding-bottom: 8px;
    }

    .vendor .sub .validate {
      display: none;
      color: red;
      margin: 0 0 15px 0;
      font-weight: 400;
      font-size: 13px;
    }

    .vendor .sub .error-message {
      display: none;
      color: #fff;
      background: #ed3c0d;
      text-align: left;
      padding: 15px;
      font-weight: 600;
    }

    .vendor .sub .error-message br+br {
      margin-top: 25px;
    }

    .vendor .sub .sent-message {
      display: none;
      color: #fff;
      background: #18d26e;
      text-align: center;
      padding: 15px;
      font-weight: 600;
    }

    .vendor .sub .loading {
      display: none;
      background: #fff;
      text-align: center;
      padding: 15px;
    }

    .vendor .sub .loading:before {
      content: "";
      display: inline-block;
      border-radius: 50%;
      width: 24px;
      height: 24px;
      margin: 0 10px -6px 0;
      border: 3px solid #18d26e;
      border-top-color: #eee;
      animation: animate-loading 1s linear infinite;
    }

    .vendor .sub .form-group {
      margin-bottom: 15px;
    }

    .vendor .sub label {
      padding-bottom: 8px;
    }

    .vendor .sub input,
    .vendor .sub textarea {
      border-radius: 0;
      box-shadow: none;
      font-size: 14px;
    }

    .vendor .sub input {
      height: 44px;
    }

    .vendor .sub textarea {
      padding: 10px 15px;
    }

    .vendor .sub button[type=submit] {
      background: #149ddd;
      border: 0;
      padding: 10px 24px;
      color: #fff;
      transition: 0.4s;
      border-radius: 4px;
    }

    .vendor .sub button[type=submit]:hover {
      background: #37b3ed;
    }
  </style>
</head>
<section id="vendor" class="vendor"> <!-- Vendor Section-->
  <div class="container">

    <div class="section-title">
      <h2>Add new supplier list</h2>
      <p>Input supplier details</p>
    </div>
    <div class="row">
      <div class="col-lg-14 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="/add/create" method="POST" class="sub"> <!-- Add new vendor form -->
          {{csrf_field()}}
          <div class="row">
            <div class="form-group col-md-6">
              <label for="comp">Company Name</label>
              <input type="text" name="comp" id="comp" class="form-control" placeholder="Company name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="owner">Owner</label>
              <input type="text" id="owner" class="form-control" name="owner" placeholder="Owner name" required>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="contact">Contact</label>
              <input type="text" id="contact" class="form-control" name="contact" placeholder="Contact Number" required>
            </div>
            <div class="form-group col-md-6">
              <label class="labels">Type</label>
              <select class="form-control" style="margin-top: 10px;" name="type" id="type" required>
                  <option disabled selected value="">Select type of product....</option>
                  <option value="food">Food</option>
                  <option value="drink">Drink</option>
                  <option value="Clothe">shirt</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="product">Product</label>
              <input type="number" id="product" class="form-control" name="product" placeholder="total" required>
            </div>
            <div class="form-group col-md-6">
              <label for="date">Date</label>
              <input type="date" id="date" class="form-control" name="date" required min="{{ date('Y-m-d') }}">
            </div>
          </div>
          <button type="submit"> Add</button>
        </form>

      </div>

    </div>

  </div>
</section> <!-- Vendor Section-->

@endsection