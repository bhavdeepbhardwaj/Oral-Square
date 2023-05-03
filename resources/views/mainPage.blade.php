@extends('layouts.main')

@section('css')
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
@endsection

@section('content')
    {{-- Section Start --}}
    <div class="site-blocks-cover" style="background-image: url(assets/images/hero_bg_1.jpg);" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <span class="sub-text">We Priority Your</span>
                    <h1>Your <strong>New Smile</strong></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="site-block-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="site-block-feature d-flex p-4 rounded mb-4">
                        <div class="mr-3">
                            <span class="icon flaticon-tooth font-weight-light text-white h2"></span>
                        </div>
                        <div class="text">
                            <h3>Periontodology</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="site-block-feature d-flex p-4 rounded mb-4">
                        <div class="mr-3">
                            <span class="icon flaticon-tooth-whitening font-weight-light text-white h2"></span>
                        </div>
                        <div class="text">
                            <h3>Tooth Whitening</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="site-block-feature d-flex p-4 rounded mb-4">
                        <div class="mr-3">
                            <span class="icon flaticon-tooth-pliers font-weight-light text-white h2"></span>
                        </div>
                        <div class="text">
                            <h3>Preventative Care</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section site-block-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="assets/images/img_1.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="row row-items">
                        <div class="col-md-6">
                            <a href="#" class="d-flex text-center feature active p-4 mb-4">
                                <span class="align-self-center w-100">
                                    <span class="d-block mb-3">
                                        <span class="flaticon-tooth-whitening display-3"></span>
                                    </span>
                                    <h3>Tooth Whitening</h3>
                                </span>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="d-flex text-center feature p-4 mb-4">
                                <span class="align-self-center w-100">
                                    <span class="d-block mb-3">
                                        <span class="flaticon-stethoscope display-3"></span>
                                    </span>
                                    <h3>Stethoscope</h3>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="row row-items last">
                        <div class="col-md-6">
                            <a href="#" class="d-flex text-center feature p-4 mb-4">
                                <span class="align-self-center w-100">
                                    <span class="d-block mb-3">
                                        <span class="flaticon-first-aid-kit display-3"></span>
                                    </span>
                                    <h3>First Aid Kit</h3>
                                </span>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="d-flex text-center active feature p-4 mb-4">
                                <span class="align-self-center w-100">
                                    <span class="d-block mb-3">
                                        <span class="flaticon-tooth-pliers display-3"></span>
                                    </span>
                                    <h3>Tooth Pliers</h3>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section site-block-appointment">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 pl-lg-5 order-1 order-lg-2">
                    <div class="pl-lg-5 ml-lg-5">
                        <h2 class="site-heading text-black">Online <strong>Appointment</strong> Request Form</h2>
                        <p class="lead text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum vitae
                            possimus sapiente temporibus, cum error.</p>
                        <p class="text-black-opacity-5">Temporibus adipisci modi nisi, in deserunt. Nam, veritatis pariatur
                            fugit explicabo? Nemo eius, eaque saepe facilis quidem nisi. Officiis doloremque dolorum optio.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="alert alert-success" role="alert" id="successMsg" style="display: none">
                        Thank you for getting in touch!
                    </div>

                    <form action="#" class="p-5 bg-white" id="SubmitForm">

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="fname">First Name</label>
                                <input type="text" id="fname" class="form-control" placeholder="First Name">
                                <span class="text-danger" id="fnameErrorMsg"></span>
                            </div>
                            {{-- <div class="col-md-6">
                                <label class="font-weight-bold" for="lname">Last Name</label>
                                <input type="text" id="lname" class="form-control" placeholder="Last Name">
                            </div> --}}
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="phone">Phone Number</label>
                                <input type="text" id="phone" class="form-control" placeholder="Phone Number">
                                <span class="text-danger" id="phoneErrorMsg"></span>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="date">Date</label>
                                <input type="text" id="app_date" class="form-control datepicker px-2"
                                    placeholder="Date of visit">
                                <span class="text-danger" id="appdateErrorMsg"></span>
                            </div>
                            <div class="col-md-6">
                                <label class="font-weight-bold" for="email">Email</label>
                                <input type="email" id="email" class="form-control" placeholder="Email">
                                <span class="text-danger" id="emailErrorMsg"></span>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="treatment_needed">Treatment Needed</label>
                                <select name="treatment_needed" id="treatment_needed" class="form-control">
                                    <option value="">------</option>
                                    <option value="Dental exam and teeth cleaning">Dental exam and teeth cleaning</option>
                                    <option value="Dental emergency">Dental emergency</option>
                                    <option value="Dental emergency">Dental emergency</option>
                                </select>
                                <span class="text-danger" id="treatmentneededErrorMsg"></span>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="note">Notes</label>
                                <textarea name="note" id="note" cols="30" rows="3" class="form-control"
                                    placeholder="Write your notes or questions here..."></textarea>
                                <span class="text-danger" id="noteErrorMsg"></span>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Send" class="btn btn-primary">
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="promo py-5 bg-primary">
        <div class="container text-center">
            <span class="d-block h4 mb-3 font-weight-light text-white">Promo For Tooth Cleaning from <del>$140.00</del> now
                <strong class="font-weight-bold">$50.00</strong></span>
            <div id="date-countdown" class="mt-0"></div>
        </div>
    </div>


    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="site-heading text-black mb-5">Our <strong>Services</strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="site-block-feature-2 d-flex rounded mb-5">
                        <div class="mr-3">
                            <span class="icon flaticon-tooth-whitening font-weight-light "></span>
                        </div>
                        <div class="text">
                            <h3>Tooth Whitening</h3>
                            <p>Sunt illum fugit doloremque eaque omnis dolor sint fuga eligendi quis magnam Laboriosam
                                facilis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="site-block-feature-2 d-flex rounded mb-5">
                        <div class="mr-3">
                            <span class="icon flaticon-stethoscope font-weight-light "></span>
                        </div>
                        <div class="text">
                            <h3>Stethoscope</h3>
                            <p>Sunt illum fugit doloremque eaque omnis dolor sint fuga eligendi quis magnam Laboriosam
                                facilis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="site-block-feature-2 d-flex rounded mb-5">
                        <div class="mr-3">
                            <span class="icon flaticon-dentist-chair font-weight-light "></span>
                        </div>
                        <div class="text">
                            <h3>Dentist Chair</h3>
                            <p>Sunt illum fugit doloremque eaque omnis dolor sint fuga eligendi quis magnam Laboriosam
                                facilis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="site-block-feature-2 d-flex rounded mb-5">
                        <div class="mr-3">
                            <span class="icon flaticon-tooth-pliers font-weight-light "></span>
                        </div>
                        <div class="text">
                            <h3>Tooth Pliers</h3>
                            <p>Sunt illum fugit doloremque eaque omnis dolor sint fuga eligendi quis magnam Laboriosam
                                facilis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="site-block-feature-2 d-flex rounded mb-5">
                        <div class="mr-3">
                            <span class="icon flaticon-first-aid-kit font-weight-light "></span>
                        </div>
                        <div class="text">
                            <h3>First Aid Kit</h3>
                            <p>Sunt illum fugit doloremque eaque omnis dolor sint fuga eligendi quis magnam Laboriosam
                                facilis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="site-block-feature-2 d-flex rounded mb-5">
                        <div class="mr-3">
                            <span class="icon flaticon-dentist-tools font-weight-light "></span>
                        </div>
                        <div class="text">
                            <h3>Dentist Tools</h3>
                            <p>Sunt illum fugit doloremque eaque omnis dolor sint fuga eligendi quis magnam Laboriosam
                                facilis.</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <div class="site-block-half d-block d-lg-flex site-block-video">
        <div class="image bg-image order-2" style="background-image: url(assets/images/hero_bg_1.jpg); ">
            <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span
                    class="icon-play"></span></a>
        </div>
        <div class="text order-1">
            <h2 class="site-heading text-black mb-3">Success <strong>Stories</strong></h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id cum vel, eius nulla inventore
                aperiam excepturi molestias incidunt, culpa alias repudiandae, a nobis libero vitae repellendus temporibus
                vero sit natus.</p>
            <p>Dolores perferendis ipsam animi fuga, dolor pariatur aliquam esse. Modi maiores minus velit iste enim sunt
                iusto, dolore totam consequuntur incidunt illo voluptates vero quaerat excepturi. Iusto dolor, cum et.</p>
        </div>

    </div>


    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="site-heading text-black">People <strong>Says</strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="site-block-testimony p-4 text-center">
                        <div class="mb-3">
                            <img src="assets/images/person_2.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div>
                            <p>Dolores perferendis ipsam animi fuga, dolor pariatur aliquam esse. Modi maiores minus velit
                                iste enim sunt iusto dolore</p>
                            <p><strong class="font-weight-bold">Nathalie Oscar</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="site-block-testimony p-4 text-center active">
                        <div class="mb-3">
                            <img src="assets/images/person_1.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div>
                            <p>Dolores perferendis ipsam animi fuga dolor pariatur aliquam esse. Modi maiores minus velit
                                iste enim sunt iusto dolore</p>
                            <p><strong class="font-weight-bold">Linda Uler</strong></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="site-block-testimony p-4 text-center">
                        <div class="mb-3">
                            <img src="assets/images/person_3.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div>
                            <p>Dolores perferendis ipsam animi fuga dolor pariatur aliquam esse. Modi maiores minus velit
                                iste enim sunt iusto dolore</p>
                            <p><strong class="font-weight-bold">Chris Coodard</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End --}}
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

    <script type="text/javascript">
        $('#SubmitForm').on('submit', function(e) {
            e.preventDefault();

            let fname = $('#fname').val();
            let email = $('#email').val();
            let phone = $('#phone').val();
            let app_date = $('#app_date').val();
            let note = $('#note').val();
            let treatment_needed = $('#treatment_needed').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "/submit-form",
                type: "POST",
                dataType: 'json',
                data: {
                    fname: fname,
                    email: email,
                    phone: phone,
                    note: note,
                    app_date: app_date,
                    treatment_needed: treatment_needed,
                },
                global: false,
                async: true,
                // cache: false,
                success: function(response) {
                    $('#successMsg').show();
                    console.log(response);
                    swal({
                        title: "Good job",
                        text: "Thank you for getting in touch!",
                        type: "success"
                    }).then(function() {
                        location.reload();
                    });
                },
                error: function(response) {
                    $('#fnameErrorMsg').text(response.responseJSON.errors.fname);
                    $('#emailErrorMsg').text(response.responseJSON.errors.email);
                    $('#phoneErrorMsg').text(response.responseJSON.errors.phone);
                    $('#noteErrorMsg').text(response.responseJSON.errors.note);
                    $('#appdateErrorMsg').text(response.responseJSON.errors.app_date);
                    $('#treatmentneededErrorMsg').text(response.responseJSON.errors.treatment_needed);
                },
            });
        });
    </script>
@endsection
