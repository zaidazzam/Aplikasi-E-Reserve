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
    <title>Pembayaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
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
    <link href="{{ asset('css/pembayaran.css') }}" rel="stylesheet">
</head>

<body>


    <!-- End Banner Area -->
    <section>
        <div class="container">
            <div id="multi-step-form-container">
                <!-- Form Steps / Progress Bar -->
                <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                    <!-- Step 1 -->
                    <li class="form-stepper-active text-center form-stepper-list" step="1">
                        <a class="mx-2">
                            <span class="form-stepper-circle">
                                <span>1</span>
                            </span>
                            <div class="label">Pengisian Identitas</div>
                        </a>
                    </li>
                    <!-- Step 2 -->
                    <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                        <a class="mx-2">
                            <span class="form-stepper-circle text-muted">
                                <span>2</span>
                            </span>
                            <div class="label text-muted">Metode Pembayaran</div>
                        </a>
                    </li>
                    <!-- Step 3 -->
                    <!-- <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
                        <a class="mx-2">
                            <span class="form-stepper-circle text-muted">
                                <span>3</span>
                            </span>
                            <div class="label text-muted">Konfirmasi Pembayaran</div>
                        </a>
                    </li> -->
                </ul>
                <!-- Step Wise Form Content -->
                
                    <!-- Step 1 Content -->
                    <section id="step-1" class="form-step">
                    <form method="POST" action="{{ route('transaksi.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex flex-wrap">
                            <div class="col-lg-12">
                                <div class="">
                                    <div class="row">
                                        <div class="">
                                            <center>
                                                <h3>Masukkan rincian Anda</h3>
                                            </center>
                                            <div class="d-flex flex-wrap">
                                                <div class="col-md-6 form-group p_star">
                                                    <label for="">Nomor Telepon</label>
                                                    <input type="text" class="form-control" id="first"
                                                        name="nama_depan" placeholder="Nama depan">
                                                </div>
                                                <div class="col-md-6 form-group p_star" style="display:none;" >
                                                    <label for="">ID HOMESTAY</label>
                                                    <input type="text" class="form-control" id="first"
                                                        value="{{ $homestay->id }}"
                                                        name="homestay_id" placeholder="Nama depan">
                                                </div>

                                                <div class="col-md-6 form-group p_star"  style="display:none;" >
                                                    <label for="">checkin</label>
                                                    <input type="text" class="form-control" id="first"
                                                        value="{{ $checkin }}"
                                                        name="check_in" placeholder="check_in">
                                                </div>

                                                <div class="col-md-6 form-group p_star"  style="display:none;"  >
                                                    <label for="">checkout</label>
                                                    <input type="text" class="form-control" id="first"
                                                        value="{{ $checkout }}"
                                                        name="check_out" placeholder="check_out">
                                                </div>

                                                <div class="col-md-6 form-group p_star"  style="display:none;"  >
                                                    <label for="">total_harga</label>
                                                    <input type="text" class="form-control" id="first"
                                                        value="{{ $homestay->harga * $numberOfDays }}"
                                                        name="total_harga" placeholder="Nama depan">
                                                </div>

                                                <div class="col-md-6 form-group p_star"  style="display:none;"  >
                                                    <label for="">biaya_admin</label>
                                                    <input type="text" class="form-control" id="first"
                                                        value="{{ $homestay->harga * 0.10 }}"
                                                        name="biaya_admin" placeholder="Nama depan">
                                                </div>


                                                <div class="col-md-6 form-group p_star"  style="display:none;"  >
                                                    <label for="">total_masa_inap</label>
                                                    <input type="text" class="form-control" id="first"
                                                        value="{{ $numberOfDays }}"
                                                        name="total_masa_inap" placeholder="Nama depan">
                                                </div>
                                                
                                                <div class="col-md-6 form-group p_star">
                                                    <label for="">Nomor Telepon</label>
                                                    <input type="text" class="form-control" id="number"
                                                        name="notelp" placeholder="Nomor Telephone">
                                                </div>
                                                <div class="col-md-6 form-group p_star">
                                                    <label for="">Alamat Email</label>
                                                    <input type="text" class="form-control" id="email"
                                                        name="email" placeholder="Alamat email">
                                                </div>
                                                <div class="col-md-6 form-group p_star">
                                                        <label for="">Isi jumlah Peserta</label>
                                                        <input type="number" class="form-control" id="first"
                                                            name="name" placeholder="Jumlah Peserta">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <!-- Default switch -->
                                                <!-- <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customSwitches" />
                                                    <label class="custom-control-label" for="customSwitches">
                                                        <h3>Paket Wisata</h3>
                                                    </label>
                                                </div> -->
                                                <!-- <div class="">
                                                    <div class="dropdown">
                                                        <label
                                                            class="dropdown-label  text-truncate border rounded">Pilih
                                                            Wisata</label>

                                                        <div class="dropdown-list">
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="dropdown-group-all"
                                                                    class="check-all checkbox-custom "
                                                                    id="checkbox-main" />
                                                                <label for="checkbox-main"
                                                                    class="checkbox-custom-label ">Selection
                                                                    All</label>
                                                            </div>

                                                            <div class="checkbox">
                                                                <input type="checkbox" name="dropdown-group"
                                                                    class="check " id="checkbox-custom_01" />
                                                                <label for="checkbox-custom_01"
                                                                    class="checkbox-custom-label"> Wisata Curug Rp.
                                                                    20.000</label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="dropdown-group"
                                                                    class="check " id="checkbox-custom_01" />
                                                                <label for="checkbox-custom_01"
                                                                    class="checkbox-custom-label">Wisata Taman Rp.
                                                                    20.000</label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="dropdown-group"
                                                                    class="check " id="checkbox-custom_01" />
                                                                <label for="checkbox-custom_01"
                                                                    class="checkbox-custom-label">Wisata Gunung
                                                                    1</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-group p_star">
                                                        <label for="">Isi jumlah peserta yang akan ikut serta
                                                            dalam petualangan ini, karena harga yang Anda bayar akan
                                                            disesuaikan dengan jumlah peserta dan harga wisata</label>
                                                        <input type="number" class="form-control" id="first"
                                                            name="name" placeholder="Jumlah Peserta">
                                                    </div>
                                                </div> -->
                                                <!-- <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customSwitches" />
                                                    <label class="custom-control-label" for="customSwitches">
                                                        <h3>Service Tamabahan</h3>
                                                    </label>
                                                </div> -->
                                                <!-- <div class="">
                                                    <div class="dropdown">
                                                        <label
                                                            class="dropdown-label  text-truncate border rounded">Pilih
                                                            Breakfast</label>
                                                        <div class="dropdown-list">
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="dropdown-group-all"
                                                                    class="check-all checkbox-custom "
                                                                    id="checkbox-main" />
                                                                <label for="checkbox-main"
                                                                    class="checkbox-custom-label ">Selection
                                                                    All</label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="dropdown-group"
                                                                    class="check " id="checkbox-custom_01" />
                                                                <label for="checkbox-custom_01"
                                                                    class="checkbox-custom-label"> Wisata Curug Rp.
                                                                    20.000</label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="dropdown-group"
                                                                    class="check " id="checkbox-custom_01" />
                                                                <label for="checkbox-custom_01"
                                                                    class="checkbox-custom-label">Wisata Taman Rp.
                                                                    20.000</label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="dropdown-group"
                                                                    class="check " id="checkbox-custom_01" />
                                                                <label for="checkbox-custom_01"
                                                                    class="checkbox-custom-label">Wisata Gunung
                                                                    1</label>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                   
                                                </div>
                                                <!-- <div class="form-group">
                                                    <div class="creat_account">
                                                        <h3>Permintaan khusus</h3>
                                                        <label>Kami tidak menjamin permintaan khusus, tapi akomodasi
                                                            akan
                                                            berupaya memenuhi
                                                            kebutuhan Anda. Anda selalu bisa membuat permintaan khusus
                                                            setelah
                                                            menyelesaikan
                                                            pemesanan.</label>
                                                        <label class="mt-2"><strong>Harap tulis permintaan Anda dalam
                                                                Bahasa
                                                                Inggris atau Bahasa
                                                                Indonesia.
                                                                (opsional)</strong></label>
                                                        <textarea class="form-control bg-light" name="message" id="message" rows="1" placeholder=""></textarea>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="order_box">
                                    <h2>Rincian Pesanan Anda</h2>
                                    <div class="details_item mb-2">
                                        <ul class="list list_2">
                                            <li><a>Check-in <span>{{ $checkin }}</span></a></li>
                                            <li><a>Check-out<span>{{ $checkout }}</span></a></li>
                                            <li><a>Total Masa inap <span>{{ $numberOfDays }} Hari</span></a></li>
                                        </ul>
                                    </div>
                                    <h2>Rincian Biaya Anda</h2>
                                    <ul class="list list_2">
                                        <li><a href="">Harga Homestay <span>Rp. {{ number_format($homestay->harga, 0, ',', '.'); }}</span></a></li>
                                        <li><a href="#">Total <span>Rp. {{ number_format($homestay->harga, 0, ',', '.'); }}</span></a></li>
                                    </ul>
                                    <div class="creat_account">
                                        <input type="checkbox" id="f-option4" name="selector">
                                        <label for="f-option4">Saya telah membaca dan menerima</label>
                                        <a href="#">syarat & ketentuan*</a>
                                    </div>
                                    <a class="primary-btn button btn-navigate-form-step" href="#"
                                        type="button" step_number="2">Lanjutkan Pembayaran</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="step-2" class="form-step d-none">
                        <div class="d-flex flex-wrap">
                            <div class="col-lg-8">
                                <center>
                                    <h3>Pilih Metode</h3>
                                </center>
                                <div class="form-pemesan">
                                    <div class="metode-pembayaran mt-4">
                                        <div class="pilihan mb-3">
                                            <div class="e-wallet">
                                                <h4>Pembayaran E-Wallet</h4>
                                                <div class="pembayaran ewalet">
                                                    <h5 class="my-2">Pembayaran Dana</h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="first me-3">
                                                            <img src="{{ asset('img/logo-pembayaran/Logo_dana_blue.svg.png') }}"
                                                                alt="Pembayaran Dana" style="max-width: 80px; " />
                                                        </div>
                                                        <ul class="m-2">
                                                            <li>
                                                                <h6>Nama Dana: Zaid Abdullah Azzam</h6>
                                                            </li>
                                                            <li>
                                                                <h6>Nomor Dana: 089688347718</h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="bank">
                                                <h4>Pembayaran Bank</h4>
                                                <div class="pembayaran ewalet">
                                                    <h5 class="my-2">Pembayaran BNI</h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="first me-3">
                                                            <img src="{{ asset('img/logo-pembayaran/bni.svg') }}"
                                                                alt="Pembayaran Dana" style="max-width: 80px; " />
                                                        </div>
                                                        <ul class="m-2">
                                                            <li>
                                                                <h6>Nama BNI: Zaid Abdullah Azzam</h6>
                                                            </li>
                                                            <li>
                                                                <h6>Nomor Rekening: 089688347718</h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                                <div>
                                                    <h5 class="my-2">Masukan No Ref/No Urut/No Transaksi (Jika tidak
                                                        ada
                                                        nama pemilik kartu )</h5>
                                                </div>
                                                <div class="form-group p_star">
                                                    <input type="text" class="form-control" id="first"
                                                        name="no_referensi" placeholder="Masukkan Nomor">
                                                </div>
                                                <hr>
                                                <div>
                                                    <h5 class="my-2">Upload Bukti Transfer (.jpg, .jpeg,
                                                        .png)</h5>
                                                    <label for=""></label>
                                                </div>
                                                <div class="form-group p_star">
                                                    <input type="file" class="form-control" id="first"
                                                        name="bukti_transaksi" placeholder="Upload Bukti Transfer">
                                                </div>
                                            <div class="mt-3">
                                                <button class="button btn-navigate-form-step" type="button"
                                                    step_number="1">
                                                    Kembali
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="order_box">
                                    <h2>Rincian Pesanan Anda</h2>
                                    <div class="details_item mb-2">
                                        <ul class="list list_2">
                                            <li><a>Check-in <span>{{ $checkin }}</span></a></li>
                                            <li><a>Check-out<span>{{ $checkout }}</span></a></li>
                                            <li><a>Total Masa inap <span>{{ $numberOfDays }} Hari</span></a></li>
                                        </ul>
                                    </div>
                                    <h2>Rincian Biaya Anda</h2>
                                    <ul class="list list_2">
                                        <li><a href="">Harga Homestay <span>Rp. {{ number_format($homestay->harga, 0, ',', '.'); }}</span></a></li>
                                        <li><a href="#">Total <span>Rp. {{ number_format($homestay->harga, 0, ',', '.'); }}</span></a></li>
                                    </ul>
                                    <div class="creat_account">
                                        <input type="checkbox" id="f-option4" name="selector">
                                        <label for="f-option4">Saya telah membaca dan menerima</label>
                                        <a href="#">syarat & ketentuan*</a>
                                    </div>

                                    <button type="submit" class="btn btn-primary"> Lanjutkan Pembayaran</button>
                                    <!-- <button class="primary-btn button btn-navigate-form-step" type="submit">
                                        Lanjutkan Pembayaran
                                        </button> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
            </div>
    </section>
    <script src="{{ asset('js/js-pembayaran/main.js') }}"></script>
    <script src="{{ asset('js/js-pembayaran/gmaps.min.js') }}"></script>
    <script src="{{ asset('js/js-pembayaran/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/js-pembayaran/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/js-pembayaran/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/js-pembayaran/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/js-pembayaran/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/js-pembayaran/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/js-pembayaran/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/js-pembayaran/owl.carousel.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script>
        /**
         * Define a function to navigate betweens form steps.
         * It accepts one parameter. That is - step number.
         */
        const navigateToFormStep = (stepNumber) => {
            /**
             * Hide all form steps.
             */
            document.querySelectorAll(".form-step").forEach((formStepElement) => {
                formStepElement.classList.add("d-none");
            });
            /**
             * Mark all form steps as unfinished.
             */
            document
                .querySelectorAll(".form-stepper-list")
                .forEach((formStepHeader) => {
                    formStepHeader.classList.add("form-stepper-unfinished");
                    formStepHeader.classList.remove(
                        "form-stepper-active",
                        "form-stepper-completed"
                    );
                });
            /**
             * Show the current form step (as passed to the function).
             */
            document
                .querySelector("#step-" + stepNumber)
                .classList.remove("d-none");
            /**
             * Select the form step circle (progress bar).
             */
            const formStepCircle = document.querySelector(
                'li[step="' + stepNumber + '"]'
            );
            /**
             * Mark the current form step as active.
             */
            formStepCircle.classList.remove(
                "form-stepper-unfinished",
                "form-stepper-completed"
            );
            formStepCircle.classList.add("form-stepper-active");
            /**
             * Loop through each form step circles.
             * This loop will continue up to the current step number.
             * Example: If the current step is 3,
             * then the loop will perform operations for step 1 and 2.
             */
            for (let index = 0; index < stepNumber; index++) {
                /**
                 * Select the form step circle (progress bar).
                 */
                const formStepCircle = document.querySelector(
                    'li[step="' + index + '"]'
                );
                /**
                 * Check if the element exist. If yes, then proceed.
                 */
                if (formStepCircle) {
                    /**
                     * Mark the form step as completed.
                     */
                    formStepCircle.classList.remove(
                        "form-stepper-unfinished",
                        "form-stepper-active"
                    );
                    formStepCircle.classList.add("form-stepper-completed");
                }
            }
        };
        /**
         * Select all form navigation buttons, and loop through them.
         */
        document
            .querySelectorAll(".btn-navigate-form-step")
            .forEach((formNavigationBtn) => {
                /**
                 * Add a click event listener to the button.
                 */
                formNavigationBtn.addEventListener("click", () => {
                    /**
                     * Get the value of the step.
                     */
                    const stepNumber = parseInt(
                        formNavigationBtn.getAttribute("step_number")
                    );
                    /**
                     * Call the function to navigate to the target form step.
                     */
                    navigateToFormStep(stepNumber);
                });
            });

        function checkboxDropdown(el) {
            var $el = $(el)

            function updateStatus(label, result) {
                if (!result.length) {
                    label.html('Pilih Paket');
                }
            };

            $el.each(function(i, element) {
                var $list = $(this).find('.dropdown-list'),
                    $label = $(this).find('.dropdown-label'),
                    $checkAll = $(this).find('.check-all'),
                    $inputs = $(this).find('.check'),
                    defaultChecked = $(this).find('input[type=checkbox]:checked'),
                    result = [];

                updateStatus($label, result);
                if (defaultChecked.length) {
                    defaultChecked.each(function() {
                        result.push($(this).next().text());
                        $label.html(result.join(", "));
                    });
                }

                $label.on('click', () => {
                    $(this).toggleClass('open');
                });

                $checkAll.on('change', function() {
                    var checked = $(this).is(':checked');
                    var checkedText = $(this).next().text();
                    result = [];
                    if (checked) {
                        result.push(checkedText);
                        $label.html(result);
                        $inputs.prop('checked', false);
                    } else {
                        $label.html(result);
                    }
                    updateStatus($label, result);
                });

                $inputs.on('change', function() {
                    var checked = $(this).is(':checked');
                    var checkedText = $(this).next().text();
                    if ($checkAll.is(':checked')) {
                        result = [];
                    }
                    if (checked) {
                        result.push(checkedText);
                        $label.html(result.join(", "));
                        $checkAll.prop('checked', false);
                    } else {
                        let index = result.indexOf(checkedText);
                        if (index >= 0) {
                            result.splice(index, 1);
                        }
                        $label.html(result.join(", "));
                    }
                    updateStatus($label, result);
                });

                $(document).on('click touchstart', e => {
                    if (!$(e.target).closest($(this)).length) {
                        $(this).removeClass('open');
                    }
                });
            });
        };

        checkboxDropdown('.dropdown');
    </script>
</body>

</html>
