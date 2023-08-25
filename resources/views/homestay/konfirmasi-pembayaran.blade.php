<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Konfirmasi Pembayaran</title>

    <!--
            CSS
            ============================================= -->
    <link href="{{ asset('css/linearicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nouislider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: rgb(255, 253, 249);
        }

        .section_gap {
            padding-top: 0;
            pa dding-bottom: 100px;
        }

        .form-select {
            display: block;
            width: 100%;
            padding: .375rem 2.25rem .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #666565;
            background-color: #fff;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right .75rem center;
            background-size: 16px 12px;
            border: 1px solid #666565 !important;
            border-radius: 5px;
            appearance: none
        }

        .bg-light {
            background-color: #ffffffdf;
            padding: 4px;
            border-radius: 1px solid;
        }
    </style>
</head>

<body>
    <!--================Order Details Area =================-->
    <section class="order_details section_gap">
        <div class="container">
            <h3 class="title_confirmation">Thank you. Your order has been received.</h3>
            <div class="row order_d_inner">
                <div class="col-lg-4">
                    <div class="details_item">
                        <h4>Order Info</h4>
                        <ul class="list">
                            <li><a href="#"><span>Order number</span> : 60235</a></li>
                            <li><a href="#"><span>Date</span> : Los Angeles</a></li>
                            <li><a href="#"><span>Total</span> : USD 2210</a></li>
                            <li><a href="#"><span>Payment method</span> : Check payments</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details_item">
                        <h4>Billing Address</h4>
                        <ul class="list">
                            <li><a href="#"><span>Street</span> : 56/8</a></li>
                            <li><a href="#"><span>City</span> : Los Angeles</a></li>
                            <li><a href="#"><span>Country</span> : United States</a></li>
                            <li><a href="#"><span>Postcode </span> : 36952</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details_item">
                        <h4>Shipping Address</h4>
                        <ul class="list">
                            <li><a href="#"><span>Street</span> : 56/8</a></li>
                            <li><a href="#"><span>City</span> : Los Angeles</a></li>
                            <li><a href="#"><span>Country</span> : United States</a></li>
                            <li><a href="#"><span>Postcode </span> : 36952</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="order_details_table">
                <h2>Order Details</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>Pixelstore fresh Blackberry</p>
                                </td>
                                <td>
                                    <h5>x 02</h5>
                                </td>
                                <td>
                                    <p>$720.00</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Pixelstore fresh Blackberry</p>
                                </td>
                                <td>
                                    <h5>x 02</h5>
                                </td>
                                <td>
                                    <p>$720.00</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Pixelstore fresh Blackberry</p>
                                </td>
                                <td>
                                    <h5>x 02</h5>
                                </td>
                                <td>
                                    <p>$720.00</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Subtotal</h4>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <p>$2160.00</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Shipping</h4>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <p>Flat rate: $50.00</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Total</h4>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <p>$2210.00</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Order Details Area =================-->


    <!--================End Checkout Area =================-->

    <script src="{{ asset('js-2/main.js') }}"></script>
    <script src="{{ asset('js-2/gmaps.min.js') }}"></script>
    <script src="{{ asset('js-2/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js-2/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js-2/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js-2/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js-2/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js-2/nouislider.min.js') }}"></script>
    <script src="{{ asset('js-2/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js-2/owl.carousel.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
</body>

</html>
