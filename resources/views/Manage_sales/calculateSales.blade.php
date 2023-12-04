@extends('layout.master')
@section('content')

    <head>
        <title>SALES RESULT</title>

    </head>

    <body style="margin:20px">
        <div class="col-auto">
            @can('user-create')
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#ModalCreate">
                    <span style="color:white"></span> {{ _('New') }}
                </a>
            @endcan
        </div>
        <h3>Opening form data</h3>
        <table class="custom-table1">

            <tr>
                <th>No.</th>
                <th>Quantity Sold Bread</th>
                <th>Quantity Sold Biscut</th>
                <th>Quantity Sold Mineral water</th>
                <th>Quantity Sold Lyschee drink</th>
                <th>Quantity Sold Milo drink</th>
                <th>Quantity Sold Soya soy drink</th>
                <th>Quantity Sold Ice lemon tea drink</th>
                <th>Quantity Sold Wanda coffea can</th>
            </tr>
            @php
                $counter =1;
            @endphp
                @foreach ($data_cashier as $cashier)
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td>{{ $cashier->quantity_sold_bread }}</td>
                    <td>{{ $cashier->quantity_sold_biscut }}</td>
                    <td>{{ $cashier->quantity_sold_water }}</td>
                    <td>{{ $cashier->quantity_sold_lychee }}</td>
                    <td>{{ $cashier->quantity_sold_milo }}</td>
                    <td>{{ $cashier->quantity_sold_soy }}</td>
                    <td>{{ $cashier->quantity_sold_lemon }}</td>
                    <td>{{ $cashier->quantity_sold_wanda }}</td>
                    <td><a href="sales/{{ $cashier->id }}/delete"><button type="button"
                                onclick="return confirm('Are You Sure?')"> Delete</button> </a></td><!-- Redirect to MAIN REPORT  Page -->
                </tr>
            @endforeach
        </table>
        <br>
        <h3>Closing form data</h3>
        <table class="custom-table1">

            <tr>
                <th>No.</th>
                <th>Quantity Sold Bread</th>
                <th>Quantity Sold Biscut</th>
                <th>Quantity Sold Mineral water</th>
                <th>Quantity Sold Lyschee drink</th>
                <th>Quantity Sold Milo drink</th>
                <th>Quantity Sold Soya soy drink</th>
                <th>Quantity Sold Ice lemon tea drink</th>
                <th>Quantity Sold Wanda coffea can</th>
            </tr>
            @php
                $counter =1;
            @endphp
                @foreach ($data_cashier_closing as $cashier)
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td>{{ $cashier->quantity_sold_bread0 }}</td>
                    <td>{{ $cashier->quantity_sold_biscut0 }}</td>
                    <td>{{ $cashier->quantity_sold_water0 }}</td>
                    <td>{{ $cashier->quantity_sold_lychee0 }}</td>
                    <td>{{ $cashier->quantity_sold_milo0 }}</td>
                    <td>{{ $cashier->quantity_sold_soy0 }}</td>
                    <td>{{ $cashier->quantity_sold_lemon0 }}</td>
                    <td>{{ $cashier->quantity_sold_wanda0 }}</td>
                    <td><a href="saless/{{ $cashier->id }}/delete"><button type="button" 
                                onclick="return confirm('Are You Sure?')"> Delete</button> </a></td><!-- Redirect to MAINS REPORT Page -->
                </tr>
            @endforeach
        </table>
<!--Create table -->
        <table class="table table-bordered">

            <div class="card shadow mb-1">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="custom-table table table-bordered table-sm" id="dataTable" width="100%"
                            cellspacing="5">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Items</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr onclick="dis('1.10', )">
                                    <th scope="row">1</th>
                                    <td>Gardenia bread</td>

                                </tr>
                                <tr onclick="dis('4.50', )">
                                    <th scope="row">2</th>
                                    <td>Biscut</td>


                                </tr>
                                <tr onclick="dis('1.20', )">
                                    <th scope="row">4</th>
                                    <td>Lychee drink</td>

                                </tr>
                                <tr onclick="dis('1.50', )">
                                    <th scope="row">5</th>
                                    <td>Milo drink</td>

                                </tr>
                                <tr onclick="dis('1.20', )">
                                    <th scope="row">6</th>
                                    <td>Soya soy drink</td>

                                </tr>
                                <tr onclick="dis('1.20', )">
                                    <th scope="row">7</th>
                                    <td>Ice lemon tea drink</td>

                                </tr>
                                <tr onclick="dis('2.00', )">
                                    <th scope="row">8</th>
                                    <td>Wanda coffee can</td>

                                </tr>
                            </tbody>
                    </div>

        </table>
        <br>
        <br>
        <br>
        <br>
        <!DOCTYPE html>
        <html>

        <head>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.4/math.js"
                integrity="sha512-BbVEDjbqdN3Eow8+empLMrJlxXRj5nEitiCAK5A1pUr66+jLVejo3PmjIaucRnjlB0P9R3rBUs3g5jXc8ti+fQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.4/math.min.js"
                integrity="sha512-iphNRh6dPbeuPGIrQbCdbBF/qcqadKWLa35YPVfMZMHBSI6PLJh1om2xCTWhpVpmUyb4IvVS9iYnnYMkleVXLA=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <!-- for styling -->
            <style>
                .custom-table {
                    width: 50%;
                    margin: 0 auto;
                }

                
                .custom-table thead th:first-child {
                    font-weight: bold;
                }

                table {
                    border: 1px solid black;
                    margin-left: auto;
                    margin-right: auto;
                }

                input[type="button"] {
                    width: 100%;
                    padding: 20px 40px;
                    background-color: rgb(29, 127, 226);
                    color: white;
                    font-size: 24px;
                    font-weight: bold;
                    border: none;
                    border-radius: 5px;
                }

                input[type="text"] {
                    padding: 20px 30px;
                    font-size: 24px;
                    font-weight: bold;
                    border: none;
                    border-radius: 5px;
                    border: 2px solid black;
                }

                .center-button {
                    display: flex;
                    justify-content: center;
                }

                . {}
            </style>
        </head>
        <!-- create table -->

        <body>
            <form action="/calcu/create" method="post">
                {{ csrf_field() }}
                <table id="calcu">
                    <tr>
                        <td colspan="3"><input type="text" id="result" name="Total_sales" value=""></td>
                        <!-- clr() function will call clr to clear all value -->
                        <td><input type="button" value="c" onclick="clr()" /> </td>
                    </tr>
                    <tr>
                        <!-- create button and assign value to each button -->
                        <!-- dis("1") will call function dis to display value -->
                        <td><input type="button" value="1" onclick="dis('1')" onkeydown="myFunction(event)"> </td>
                        <td><input type="button" value="2" onclick="dis('2')" onkeydown="myFunction(event)"> </td>
                        <td><input type="button" value="3" onclick="dis('3')" onkeydown="myFunction(event)"> </td>
                        <td><input type="button" value="/" onclick="dis('/')" onkeydown="myFunction(event)"> </td>
                    </tr>
                    <tr>
                        <td><input type="button" value="4" onclick="dis('4')" onkeydown="myFunction(event)"> </td>
                        <td><input type="button" value="5" onclick="dis('5')" onkeydown="myFunction(event)"> </td>
                        <td><input type="button" value="6" onclick="dis('6')" onkeydown="myFunction(event)"> </td>
                        <td><input type="button" value="*" onclick="dis('*')" onkeydown="myFunction(event)"> </td>
                    </tr>
                    <tr>
                        <td><input type="button" value="7" onclick="dis('7')" onkeydown="myFunction(event)"> </td>
                        <td><input type="button" value="8" onclick="dis('8')" onkeydown="myFunction(event)"> </td>
                        <td><input type="button" value="9" onclick="dis('9')" onkeydown="myFunction(event)"> </td>
                        <td><input type="button" value="-" onclick="dis('-')" onkeydown="myFunction(event)"> </td>
                    </tr>
                    <tr>
                        <td><input type="button" value="0" onclick="dis('0')" onkeydown="myFunction(event)"> </td>
                        <td><input type="button" value="." onclick="dis('.')" onkeydown="myFunction(event)"> </td>
                        <!-- solve function call function solve to evaluate value -->
                        <td><input type="button" value="=" onclick="solve()"> </td>

                        <td><input type="button" value="+" onclick="dis('+')" onkeydown="myFunction(event)"> </td>
                    </tr>
                </table>

                <br>
                <br>
                <div class="center-button">
                    <button type="submit" class="btn btn-primary" data-target="#staticBackdrop">
                        Confirm
                    </button>
                </div>
                {{-- <p id="confirm"></p> --}}
            </form>


            <script>
                // Function that display value
                function dis(val) {
                    document.getElementById("result").value += val
                }

                function myFunction(event) {
                    if (event.key == '0' || event.key == '1' ||
                        event.key == '2' || event.key == '3' ||
                        event.key == '4' || event.key == '5' ||
                        event.key == '6' || event.key == '7' ||
                        event.key == '8' || event.key == '9' ||
                        event.key == '+' || event.key == '-' ||
                        event.key == '*' || event.key == '/')
                        document.getElementById("result").value += event.key;
                }

                var cal = document.getElementById("calcu");
                cal.onkeyup = function(event) {
                    if (event.keyCode === 13) {
                        console.log("Enter");
                        let x = document.getElementById("result").value
                        console.log(x);
                        solve();
                    }
                }

                // Function that evaluates the digit and return result
                function solve() {
                    let x = document.getElementById("result").value
                    let y = math.evaluate(x)
                    document.getElementById("result").value = y
                }

                // Function that clear the display
                function clr() {
                    document.getElementById("result").value = ""
                }
            </script>
        </body>

        </html>
        <br>
        <br>


        <script>
            function showConfirmation() {
                if (confirm("Are you sure you want to proceed?")) {
                    let person = prompt("Please enter your name", "");
                    if (person != null) {
                        document.getElementById("confirm").innerHTML =
                            "Hello " + person + "The data been saved";
                    }
                }
            }
        </script>

    </body>



    @include('users.modal.create')
@endsection
