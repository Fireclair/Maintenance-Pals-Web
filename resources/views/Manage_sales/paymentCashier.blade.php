<div class="container">
    <div class="card">
        <div class="card-body">
            <div id="invoice">
                <div class="toolbar hidden-print">
                    <div class="text-end">
                        <button type="button1" class="btn btn-dark"><i class="fa fa-print"></i> Print</button>
                        <button type="button2" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Export as
                            PDF</button>
                    </div>
                    <hr>
                </div>
                <div class="invoice overflow-auto">
                    <div style="min-width: 600px">
                        <header>
                            <div class="row">
                                <div class="col">
                                    <a href="javascript:;">
                                        <img src="assets/images/logo-icon.png" width="80" alt="">
                                    </a>
                                </div>
                                <div class="col company-details">
                                    <h2 class="name">
                                        <a target="_blank" href="javascript:;">
                                            PETAKOM MART
                                        </a>
                                    </h2>
                                    <script>
                                        // Get the print button element
                                        var printButton = document.getElementById('print-button');

                                        // Add a click event listener to the print button
                                        printButton.addEventListener('click', function() {
                                            // Hide the print and export buttons
                                            var toolbar = document.querySelector('.toolbar');
                                            toolbar.style.display = 'none';

                                            // Trigger the browser's print functionality
                                            window.print();

                                            // Show the print and export buttons after printing is done
                                            toolbar.style.display = 'block';
                                        });
                                    </script>
                                    <div>Universiti Malaysia Pahang</div>
                                    <div>(+6) xxxxxxxxx</div>
                                    <div>petakom@gmail.com</div>
                                </div>
                            </div>
                        </header>
                        <!-- for styling-->
                        <style>
                            body {
                                margin-top: 20px;
                                background-color: #f7f7ff;
                            }

                            #invoice {
                                padding: 0px;
                            }

                            .invoice {
                                position: relative;
                                background-color: #FFF;
                                min-height: 680px;
                                padding: 15px
                            }

                            .invoice header {
                                padding: 10px 0;
                                margin-bottom: 20px;
                                border-bottom: 1px solid #0d6efd
                            }

                            .invoice .company-details {
                                text-align: right
                            }

                            .invoice .company-details .name {
                                margin-top: 0;
                                margin-bottom: 0
                            }

                            .invoice .contacts {
                                margin-bottom: 20px
                            }

                            .invoice .invoice-to {
                                text-align: left
                            }

                            .invoice .invoice-to .to {
                                margin-top: 0;
                                margin-bottom: 0
                            }

                            .invoice .invoice-details {
                                text-align: right
                            }

                            .invoice .invoice-details .invoice-id {
                                margin-top: 0;
                                color: #0d6efd
                            }

                            .invoice main {
                                padding-bottom: 50px
                            }

                            .invoice main .thanks {
                                margin-top: -100px;
                                font-size: 2em;
                                margin-bottom: 50px
                            }

                            .invoice main .notices {
                                padding-left: 6px;
                                border-left: 6px solid #0d6efd;
                                background: #e7f2ff;
                                padding: 10px;
                            }

                            .invoice main .notices .notice {
                                font-size: 1.2em
                            }

                            .invoice table {
                                width: 100%;
                                border-collapse: collapse;
                                border-spacing: 0;
                                margin-bottom: 20px
                            }

                            .invoice table td,
                            .invoice table th {
                                padding: 15px;
                                background: #eee;
                                border-bottom: 1px solid #fff
                            }

                            .invoice table th {
                                white-space: nowrap;
                                font-weight: 400;
                                font-size: 16px
                            }

                            .invoice table td h3 {
                                margin: 0;
                                font-weight: 400;
                                color: #0d6efd;
                                font-size: 1.2em
                            }

                            .invoice table .qty,
                            .invoice table .total,
                            .invoice table .unit {
                                text-align: right;
                                font-size: 1.2em
                            }

                            .invoice table .no {
                                color: #fff;
                                font-size: 1.6em;
                                background: #0d6efd
                            }

                            .invoice table .unit {
                                background: #ddd
                            }

                            .invoice table .total {
                                background: #0d6efd;
                                color: #fff
                            }

                            .invoice table tbody tr:last-child td {
                                border: none
                            }

                            .invoice table tfoot td {
                                background: 0 0;
                                border-bottom: none;
                                white-space: nowrap;
                                text-align: right;
                                padding: 10px 20px;
                                font-size: 1.2em;
                                border-top: 1px solid #aaa
                            }

                            .invoice table tfoot tr:first-child td {
                                border-top: none
                            }

                            .card {
                                position: relative;
                                display: flex;
                                flex-direction: column;
                                min-width: 0;
                                word-wrap: break-word;
                                background-color: #fff;
                                background-clip: border-box;
                                border: 0px solid rgba(0, 0, 0, 0);
                                border-radius: .25rem;
                                margin-bottom: 1.5rem;
                                box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
                            }

                            .invoice table tfoot tr:last-child td {
                                color: #0d6efd;
                                font-size: 1.4em;
                                border-top: 1px solid #0d6efd
                            }

                            .invoice table tfoot tr td:first-child {
                                border: none
                            }

                            .invoice footer {
                                width: 100%;
                                text-align: center;
                                color: #777;
                                border-top: 1px solid #aaa;
                                padding: 8px 0
                            }

                            @media print {
                                .invoice {
                                    font-size: 11px !important;
                                    overflow: hidden !important
                                }

                                .invoice footer {
                                    position: absolute;
                                    bottom: 10px;
                                    page-break-after: always
                                }

                                .invoice>div:last-child {
                                    page-break-before: always
                                }
                            }

                            .invoice main .notices {
                                padding-left: 6px;
                                border-left: 6px solid #0d6efd;
                                background: #e7f2ff;
                                padding: 10px;
                            }

                            .button1 {
                                background-color: #0d6efd;

                            }
                        </style>
                        <main>
                            <div class="row contacts">
                                <div class="col invoice-to">
                                    <div class="text-gray-light">INVOICE TO:</div>
                                    <h2 class="to">Ahmad Bin Ali</h2>
                                    <div class="address">796 Silver Harbour, TX 79273, US</div>
                                    <div class="email"><a href="mailto:john@example.com">AhmdAli@example.com</a>
                                    </div>
                                </div>
                                <div class="col invoice-details">
                                    <h1 class="invoice-id">INVOICE 3-2-1</h1>
                                    <div class="date">Date of Invoice: 01/2/2023</div>
                                    <div class="date">Due Date: 30/10/2023</div>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-left">DESCRIPTION</th>
                                        <th class="text-right">HOUR PRICE</th>
                                        <th class="text-right">HOURS</th>
                                        <th class="text-right">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="no">01</td>
                                        <td class="text-left">
                                            <h3>
                                                <a target="_blank" href="javascript:;">
                                                    Zakaria embong
                                                </a>
                                            </h3>
                                            <a target="_blank" href="javascript:;">

                                            </a> Thank you. Work with us again :)
                                        </td>
                                        <td class="unit">RM5.00</td>
                                        <td class="qty">2</td>
                                        <td class="total">RM10.00</td>
                                    </tr>
                                    <tr>
                                        <td class="no">01</td>
                                        <td class="text-left">
                                            <h3>Siti zubaidah</h3>Thank you. Work with us again :)
                                        </td>
                                        <td class="unit">RM5.00</td>
                                        <td class="qty">3</td>
                                        <td class="total">RM15.00</td>
                                    </tr>
                                    <tr>
                                        <td class="no">02</td>
                                        <td class="text-left">
                                            <h3>Kamalia khan</h3>Thank you. Work with us again :)
                                        </td>
                                        <td class="unit">RM5.00</td>
                                        <td class="qty">4</td>
                                        <td class="total">RM20.00</td>
                                    </tr>
                                    <tr>
                                        <td class="no">03</td>
                                        <td class="text-left">
                                            <h3>Ali bin Abu</h3>Thank you. Work with us again :)
                                        </td>
                                        <td class="unit">RM5.00</td>
                                        <td class="qty">6</td>
                                        <td class="total">RM30.00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">SUBTOTAL</td>
                                        <td>RM 75.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">TAX 25%</td>
                                        <td>RM 18.75</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">GRAND TOTAL</td>
                                        <td>RM 93.25</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="thanks">Thank you!</div>
                            <div class="notices">
                                <div>NOTICE:</div>
                                <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30
                                    days.</div>
                            </div>
                        </main>
                        <footer>Invoice was created on a computer and is valid without the signature and seal.</footer>
                    </div>
                    <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>
