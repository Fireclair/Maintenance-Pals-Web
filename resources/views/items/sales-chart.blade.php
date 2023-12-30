@extends('layout.master')
@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Mart Report</title>
        <br>
        <br>
        <style>
            /* Define your CSS styles here */
            body {
                background-color: #eee;
            }

            .project-list-table {
                border-collapse: separate;
                border-spacing: 0 12px
            }

            .project-list-table tr {
                background-color: #fff
            }

            .table-nowrap td,
            .table-nowrap th {
                white-space: nowrap;
            }

            .table-borderless>:not(caption)>*>* {
                border-bottom-width: 0;
            }

            .table>:not(caption)>*>* {
                padding: 0.75rem 0.75rem;
                background-color: var(--bs-table-bg);
                border-bottom-width: 1px;
                box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
            }

            .avatar-sm {
                height: 2rem;
                width: 2rem;
            }

            .rounded-circle {
                border-radius: 50% !important;
            }

            .me-2 {
                margin-right: 0.5rem !important;
            }

            img,
            svg {
                vertical-align: middle;
            }

            a {
                color: #3b76e1;
                text-decoration: none;
            }

            .badge-soft-danger {
                color: #f56e6e !important;
                background-color: rgba(245, 110, 110, .1);
            }

            .badge-soft-success {
                color: #63ad6f !important;
                background-color: rgba(99, 173, 111, .1);
            }

            .badge-soft-primary {
                color: #3b76e1 !important;
                background-color: rgba(59, 118, 225, .1);
            }

            .badge-soft-info {
                color: #57c9eb !important;
                background-color: rgba(87, 201, 235, .1);
            }

            .avatar-title {
                align-items: center;
                background-color: #3b76e1;
                color: #fff;
                display: flex;
                font-weight: 500;
                height: 100%;
                justify-content: center;
                width: 100%;
            }

            .bg-soft-primary {
                background-color: rgba(59, 118, 225, .25) !important;
            }
        </style>
    </head>

    <body>
        <h1> Order Report - Daily</h1>
        <br>
        <br>
        {{-- <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Total sales</th>

            </tr>
        </thead>
        <tbody>
            <?php
            // Assuming you have an array of daily graph orders named $orders
            //foreach ($salesreport as $salesreport) {
            // echo "<tr>";
            // echo "<td>" . $salesreport['id'] . "</td>";
            // echo "<td>" . $salesreport['Total_sales'] . "</td>";

            // echo "</tr>";
            // }
            ?>
        </tbody>
    </table> --}}

        <body style="margin-left: 20px; margin-right: 20px;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="section-title">
                            <h2><a href="#" style="color:#2a3457;">Sales report</a></h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                            <div>
                                <ul class="nav nav-pills">

                                </ul>
                            </div>
                            <div>
                                <a href="/calcu" class="btn btn-primary"
                                    style="background-color: #86d4f5; border: none;"><i class="bx bx-plus me-1"></i>Add
                                    New</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="table-responsive">
                                <table class="table project-list-table table-nowrap align-middle table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="ps-4" style="width: 50px;">
                                                {{--  <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck" /><label class="form-check-label" for="contacusercheck"></label></div>  --}}
                                            </th>
                                            <th scope="col">Order ID </th>
                                            <th scope="col">Total Sales</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($salesreport as $salesreport)
                                            <tr>
                                                <th scope="row" class="ps-4">
                                                </th>
                                                <td>{{ $salesreport->id }}</td>

                                                <td>{{ $salesreport->Total_sales }}</td>


                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </body>

    </html>
@endsection
