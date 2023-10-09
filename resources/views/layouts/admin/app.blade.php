<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} class="light-style layout-menu-fixed" dir="ltr"
    data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free"">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/tinymce/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea.myeditorinstance',
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
    </script>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- @vite('resources/js/app.js', 'vendor/courier/build') --}}

    <title>Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    {{-- <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" /> --}}
    <link href="{{ asset('img/group12.svg') }}" rel="icon" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" /> --}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet" /> --}}

    <!-- Icons. Uncomment required icon fonts -->
    <link href="{{ asset('assets/vendor/fonts/boxicons.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" /> --}}
    <!-- Core CSS -->
    <link href="{{ asset('assets/vendor/css/core.css') }}" rel="stylesheet" class="template-customizer-core-css">
    <link href="{{ asset('assets/vendor/css/theme-default.css') }}" rel="stylesheet"
        class="template-customizer-theme-css">
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" /> --}}
    {{-- <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" /> --}}

    <!-- Vendors CSS -->
    <link href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" /> --}}
    <link href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" /> --}}

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    {{-- <script src="../assets/vendor/js/helpers.js"></script> --}}

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    {{-- <script src="../assets/js/config.js"></script> --}}


    <style>
        /* CSS for the zoom effect */
        .zoomed-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            overflow: hidden;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .zoomed-image img {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .zoomed-image.zoom-out img {
            transform: scale(1);
        }

        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

        .icon {
            cursor: pointer;
            margin-right: 50px;
            line-height: 60px
        }

        .icon span {
            background: #f00;
            padding: 7px;
            border-radius: 50%;
            color: #fff;
            vertical-align: top;
            margin-left: -25px
        }

        .icon img {
            display: inline-block;
            width: 26px;
            margin-top: 4px
        }

        .icon:hover {
            opacity: .7
        }

        .logo {
            flex: 1;
            margin-left: 50px;
            color: #eee;
            font-size: 20px;
            font-family: monospace
        }

        .notifications {
            width: 300px;
            height: 0px;
            opacity: 0;
            position: absolute;
            top: 63px;
            right: 62px;
            border-radius: 5px 0px 5px 5px;
            background-color: #fff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
        }

        .notifications h2 {
            font-size: 14px;
            padding: 10px;
            border-bottom: 1px solid #eee;
            color: #999
        }

        .notifications h2 span {
            color: #f00
        }

        .notifications-item {
            display: flex;
            border-bottom: 1px solid #eee;
            padding: 6px 9px;
            margin-bottom: 0px;
            cursor: pointer
        }

        .notifications-item:hover {
            background-color: #eee
        }

        .notifications-item img {
            display: block;
            width: 50px;
            height: 50px;
            margin-right: 9px;
            border-radius: 50%;
            margin-top: 2px
        }

        .notifications-item .text h4 {
            color: #777;
            font-size: 16px;
            margin-top: 3px
        }

        .notifications-item .text p {
            color: #aaa;
            font-size: 12px
        }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('layouts.admin.asidebar')
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('layouts.admin.navbar')
                <!-- / Navbar -->
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Page Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="">
                            {{ $slot }}
                        </div>
                    </div>
                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by
                                <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">Tim
                                    Kamojang.id</a>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    {{-- <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script> --}}
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('js/tinymce/js/tinymce.min.js') }}" referrerpolicy="origin"></script>
    {{-- <script src="../assets/vendor/js/menu.js"></script> --}}
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    {{-- <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script> --}}

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- <script src="../assets/js/main.js"></script> --}}

    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

    {{-- <script src="../assets/js/dashboards-analytics.js"></script> --}}

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
        $(document).ready(function() {

            $("#addPengeluara").click(function() {
                const formData = new FormData(imagePengeluaran);
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                console.log(formData);
                $.ajax({
                    url: "/pengeluaran",
                    method: "POST",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        location.reload();
                        // You can perform any actions you need here after a successful upload.
                    },
                    error: function(error) {
                        // Handle error response
                        console.error("Error uploading image(s):", error);
                    }
                });
            });


            $('.delete-image').click(function() {
                var imageId = $(this).data('id');
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                // Confirm the delete action if needed
                if (confirm('Are you sure you want to delete this image?')) {
                    $.ajax({
                        type: 'DELETE',
                        url: '/image/delete/' + imageId,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response) {
                            if (response.success) {
                                location.reload();
                            } else {
                                location.reload();
                            }
                        },
                        error: function() {
                            alert('An error occurred while deleting the image.');
                        }
                    });
                }
            });


            $('.delete-pengeluaran').click(function() {
                var imageId = $(this).data('id');
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                // Confirm the delete action if needed
                if (confirm('Are you sure you want to delete this image?')) {
                    $.ajax({
                        type: 'DELETE',
                        url: '/pengeluaran/delete/' + imageId,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response) {
                            if (response.success) {
                                location.reload();
                            } else {
                                location.reload();
                            }
                        },
                        error: function() {
                            alert('An error occurred while deleting the image.');
                        }
                    });
                }
            });

            $("#addHomestay").click(function() {
                const formData = new FormData(imageForm);
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                console.log(formData);
                $.ajax({
                    url: "/image/homestay",
                    method: "POST",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        location.reload();
                        // You can perform any actions you need here after a successful upload.
                    },
                    error: function(error) {
                        // Handle error response
                        console.error("Error uploading image(s):", error);
                    }
                });
            });

            $("#addServiceButton").click(function() {
                const formData = new FormData(imageService);
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                console.log(formData);
                $.ajax({
                    url: "/service",
                    method: "POST",
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        location.reload();
                        // You can perform any actions you need here after a successful upload.
                    },
                    error: function(error) {
                        // Handle error response
                        console.error("Error uploading image(s):", error);
                    }
                });
            });

            // When the "Ubah" button is clicked
            $('.updateTransaksiHistoryButton').click(function() {
                var transaksiId = $(this).data('transaksi-id');
                var namaDepan = $(this).data('nama-depan');
                var notelp = $(this).data('notelp');
                var checkIn = $(this).data('check-in');
                var checkOut = $(this).data('check-out');
                var totalMasaInap = $(this).data('total-masa-inap');
                var noReferensi = $(this).data('no-referensi');
                var status_transfer_pemilik = $(this).data('status_transfer_pemilik');
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                // Populate the form fields in the modal with the data
                $('#updateTransaksiHistoryButton').find('#status_transfer_pemilik').val(
                    status_transfer_pemilik);
                // Populate other fields as needed

                // When the "Save changes" button in the modal is clicked
                $('#updateTransaksiHistoryButton').click(function() {
                    // Get the updated data from the form
                    var updatedData = {
                        status_transfer_pemilik: $('#updateTransaksiHistoryModal').find(
                            '#status_transfer_pemilik').val(),
                        // Get other fields as needed
                    };
                    // Send an AJAX request to update the transaksi data
                    $.ajax({
                        url: '/update_trf/' +
                            transaksiId, // Replace with your controller route
                        method: 'PUT',
                        data: updatedData,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response) {
                            // Handle the success response, e.g., close the modal
                            $('#updateTransaksiHistoryModal').modal('hide');
                            location.reload();
                        },
                        error: function(error) {
                            // Handle any errors, e.g., display an error message
                        }
                    });
                });
            });

            $('.updateTransaksiButton').click(function() {
                var transaksiId = $(this).data('transaksi-id');
                var namaDepan = $(this).data('nama-depan');
                var notelp = $(this).data('notelp');
                var checkIn = $(this).data('check-in');
                var checkOut = $(this).data('check-out');
                var totalMasaInap = $(this).data('total-masa-inap');
                var noReferensi = $(this).data('no-referensi');
                var statusPayment = $(this).data('status-payment');
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                // Populate the form fields in the modal with the data
                $('#updateTransaksiModal').find('#status_payment').val(statusPayment);
                // Populate other fields as needed

                // When the "Save changes" button in the modal is clicked
                $('#updateTransaksiButton').click(function() {
                    // Get the updated data from the form
                    var updatedData = {
                        status_payment: $('#updateTransaksiModal').find('#status_payment')
                            .val(),
                        // Get other fields as needed
                    };

                    // Send an AJAX request to update the transaksi data
                    $.ajax({
                        url: '/update_transaksi/' +
                            transaksiId, // Replace with your controller route
                        method: 'PUT',
                        data: updatedData,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response) {
                            // Handle the success response, e.g., close the modal
                            $('#updateTransaksiModal').modal('hide');
                            location.reload();
                        },
                        error: function(error) {
                            // Handle any errors, e.g., display an error message
                        }
                    });
                });
            });
        });
    </script>

    <script>
        const images = document.querySelectorAll("td img");
        images.forEach((image) => {
            image.addEventListener("click", () => {
                const zoomedImage = document.createElement("div");
                zoomedImage.className = "zoomed-image";

                const clone = image.cloneNode();
                clone.style.cursor = "zoom-out";

                zoomedImage.appendChild(clone);

                document.body.appendChild(zoomedImage);

                // Close the zoomed image when clicked
                zoomedImage.addEventListener("click", () => {
                    zoomedImage.classList.add("zoom-out");
                    setTimeout(() => {
                        zoomedImage.remove();
                    }, 300); // Adjust the timing to match your CSS transition duration
                });
            });
        });

        $(document).ready(function() {
            var down = false;
            $('#bell').click(function(e) {

                var color = $(this).text();
                if (down) {

                    $('#box').css('height', '0px');
                    $('#box').css('opacity', '0');
                    down = false;
                } else {

                    $('#box').css('height', 'auto');
                    $('#box').css('opacity', '1');
                    down = true;

                }

            });

        });
    </script>
</body>

</html>
