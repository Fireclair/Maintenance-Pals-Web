<header>
</header>
<!-- for styling -->
<style>
    body {
        margin-top: 20px;
        color: #2e323c;
        background: #f5f6fa;
        position: relative;
        height: 100%;
    }

    .invoice-container {
        padding: 1rem;
    }

    .invoice-container .invoice-header .invoice-logo {
        margin: 0.8rem 0 0 0;
        display: inline-block;
        font-size: 1.6rem;
        font-weight: 700;
        color: #2e323c;
    }

    .invoice-container .invoice-header .invoice-logo img {
        max-width: 130px;
    }

    .invoice-container .invoice-header address {
        font-size: 0.8rem;
        color: #9fa8b9;
        margin: 0;
    }

    .invoice-container .invoice-details {
        margin: 1rem 0 0 0;
        padding: 1rem;
        line-height: 180%;
        background: #f5f6fa;
    }

    .invoice-container .invoice-details .invoice-num {
        text-align: right;
        font-size: 0.8rem;
    }

    .invoice-container .invoice-body {
        padding: 1rem 0 0 0;
    }

    .invoice-container .invoice-footer {
        text-align: center;
        font-size: 0.7rem;
        margin: 5px 0 0 0;
    }

    .invoice-status {
        text-align: center;
        padding: 1rem;
        background: #ffffff;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        margin-bottom: 1rem;
    }

    .invoice-status h2.status {
        margin: 0 0 0.8rem 0;
    }

    .invoice-status h5.status-title {
        margin: 0 0 0.8rem 0;
        color: #9fa8b9;
    }

    .invoice-status p.status-type {
        margin: 0.5rem 0 0 0;
        padding: 0;
        line-height: 150%;
    }

    .invoice-status i {
        font-size: 1.5rem;
        margin: 0 0 1rem 0;
        display: inline-block;
        padding: 1rem;
        background: #f5f6fa;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;
    }

    .invoice-status .badge {
        text-transform: uppercase;
    }

    @media (max-width: 767px) {
        .invoice-container {
            padding: 1rem;
        }
    }


    .custom-table {
        border: 1px solid #e0e3ec;
    }

    .custom-table thead {
        background: #007ae1;
    }

    .custom-table thead th {
        border: 0;
        color: #ffffff;
    }

    .custom-table>tbody tr:hover {
        background: #fafafa;
    }

    .custom-table>tbody tr:nth-of-type(even) {
        background-color: #ffffff;
    }

    .custom-table>tbody td {
        border: 1px solid #e6e9f0;
    }


    .card {
        background: #ffffff;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        border: 0;
        margin-bottom: 1rem;
    }

    .text-success {
        color: #00bb42 !important;
    }

    .text-muted {
        color: #9fa8b9 !important;
    }

    .custom-actions-btns {
        margin: auto;
        display: flex;
        justify-content: flex-end;
    }

    .custom-actions-btns .btn {
        margin: .3rem 0 .3rem .3rem;
    }

    .table-container {
        text-align: right;
    }
</style>
<div class="container">
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="invoice-container">
                        <div class="invoice-header">
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="custom-actions-btns mb-5">
                                        <a href="#" class="btn btn-primary" onclick="showDownloadMessage()">
                                            <i class="icon-download"></i> Download
                                        </a>
                                        <a href="#" class="btn btn-secondary" onclick="showPrintMessage()">
                                            <i class="icon-printer"></i> Print
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <a href="index.html" class="invoice-logo">
                                        PETAKOM MART
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <address class="text-right">
                                        Universiti Malaysia Pahang<br>
                                        26600 Pekan.<br>
                                        Pahang, Malaysia
                                    </address>
                                </div>
                            </div>
                            <!-- Row end -->
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                    <div class="invoice-details">
                                        <address>
                                            Vendor name

                                        </address>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="invoice-details">
                                        <div class="invoice-num">
                                            <div>Invoice - #009</div>
                                            <div>January 10th 2023</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                        </div>
                        <div class="invoice-body">
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="table-responsive table -container">
                                        <table class="table custom-table m-0">
                                            <thead>
                                                <tr>
                                                    <th>Items</th>
                                                    <th>Product ID</th>
                                                    <th>Quantity</th>
                                                    <th>Sub Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Kerepek pisang
                                                        <p class="m-0 text-muted">
                                                            Kerepek pisang sedap nyummm.
                                                        </p>
                                                    </td>
                                                    <td>#50000981</td>
                                                    <td>9</td>
                                                    <td>RM 50.00</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Cocojar
                                                        <p class="m-0 text-muted">
                                                            Various cocojar type.
                                                        </p>
                                                    </td>
                                                    <td>#50000126</td>
                                                    <td>5</td>
                                                    <td>RM 25.00</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Ice cream
                                                        <p class="m-0 text-muted">
                                                            Various ice cream.
                                                        </p>
                                                    </td>
                                                    <td>#50000821</td>
                                                    <td>6</td>
                                                    <td>RM 30.00</td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td colspan="2">
                                                        <p>
                                                            Subtotal<br>
                                                            Shipping &amp; Handling<br>
                                                            Tax<br>
                                                        </p>
                                                        <h5 class="text-success"><strong>Grand Total</strong></h5>
                                                    </td>
                                                    <td>
                                                        <p>
                                                            RM 50.00<br>
                                                            RM 25.00<br>
                                                            RM 30.00<br>
                                                        </p>
                                                        <h5 class="text-success"><strong>RM105.00</strong></h5>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                        </div>
                        <div class="invoice-footer">
                            Thank you for your Business.
                        </div>
                    </div>
                    <script>
                        function showPrintMessage() {
                            alert("The document is being sent to the printer.");
                            // Perform the print action here
                        }

                        function showDownloadMessage() {
                            alert("The document will be print to the pdf");
                            // Perform the print action here
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>