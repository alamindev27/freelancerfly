</div>
<footer class="footer-dark" style="background-image: url({{ asset('assets/frontend/user/images/f-bg.jpg') }});">
    <div class="container">


        <div class="ftr-nw-content">
            <div class="row">
                <div class="col-md-5">
                    <div class="ftr-nw-title">
                        Subscribe to us by submitting your Gmail address, every new update will be sent to your
                        Gmail inbox first.
                    </div>
                </div>
                <div class="col-md-7">
                    <form method="post" action="https://gpsfreelancer.com/create/subscriber">
                        <input type="hidden" name="_token" value="TKltWQYXrA5R1WcBYM8K11PRNQeONOE56JlAs1b7">
                        <div class="ftr-nw-form">
                            <input name="email" class="form-control" placeholder="Enter Your Email" type="email"
                                required>
                            <button class="ftr-nw-subcribe-btn" style="submit">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="footer-top">
            <div class="row">

                <div class="col-lg-3 col-md-12">
                    <div class="widget widget_about">
                        <div class="logo-footer clearfix">
                            <a href="index.html"><img src="{{ asset('assets/frontned/user/images/logo-footer-3.png') }}" alt=""></a>
                        </div>
                        <p>{{ setting()->footer_message }}</p>
                        <ul class="ftr-list">
                            <li>
                                <p><span>Address :</span>{{ setting()->footer_address }} </p>
                            </li>
                            <li>
                                <p><span>Email :</span>{{ setting()->footer_email }}</p>
                            </li>
                            <li>
                                <p><span>Call :</span>{{ setting()->footer_number }}</p>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="col-lg-9 col-md-12">
                    <div class="row">

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="widget widget_services ftr-list-center">
                                <h3 class="widget-title">Company</h3>
                                <ul>
                                    <li><a href="{{ route('frontend.trams.condition') }}">Terms and condition</a></li>
                                    <li><a href="{{ route('frontend.privacy.policy') }}">Privacy policy</a></li>
                                    <li><a href="{{ route('frontend.about') }}">About Us</a></li>
                                    <li><a href="">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="widget widget_services ftr-list-center">
                                <h3 class="widget-title">User</h3>
                                <ul>
                                    <li><a href="{{ route('frontend.refund.policy') }}">Refund Policy</a></li>
                                    <li><a href="{{ route('frontend.support') }}">Support</a></li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="widget widget_services ftr-list-center">
                                <h3 class="widget-title">Social Support</h3>
                                <ul>
                                    @foreach (socials() as $social)
                                        <li><a href="{{ $social->link }}">{{ $social->name }}</a> </li>
                                    @endforeach
                                    {{-- <li><a href="#">Facebook</a> </li>
                                    <li><a href="#">YouTube</a> </li>
                                    <li><a href="#">Linkedin</a> </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-info">
                <div class="footer-copy-right">
                    <span class="copyrights-text">Copyright © {{ Carbon\Carbon::now()->format('Y') }} by <a href="{{ route('frontend.index') }}">{{ setting()->site_name }}</a> . All Rights Reserved</span>
                </div>
                {{-- <ul class="social-icons">
                    <li><a href="#" target="blank"> <i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" target="blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#" target="blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" target="blank"><i class="fab fa-youtube"></i></a></li>
                </ul> --}}

            </div>

        </div>

    </div>

</footer>


<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>


<div class="modal fade delivery-project-modal" id="send_message" aria-hidden="true"
    aria-labelledby="sign_up_popupLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('message.send') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <input type="hidden" name="sender_id" id="sender_id">
                        <input type="hidden" name="resiver_id" id="resiver_id">
                        <div class="form-group mb-2">
                            <div class="ls-inputicon-box custom-i-box modal-comments">
                                <label class="custom-title mb-2">Message <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="message" rows="4" placeholder="Type Message"
                                    required></textarea>
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>
                        <div class="btn-submit-final mt-4 text-center">
                            <button type="submit" class="approve-final-btn d-inline">
                                <i class="fa fa-envelope"></i> Send
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>

    </div>
</div>

<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

</div>

<script src="{{ asset('assets/frontend/user/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/frontend/user/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/frontend/user/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/user/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/frontend/user/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/frontend/user/js/counterup.min.js') }}"></script>
<script src="'../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js'"></script>
<script src="{{ asset('assets/frontend/user/js/waypoints-sticky.min.js') }}"></script>
<script src="{{ asset('assets/frontend/user/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/frontend/user/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/frontend/user/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/frontend/user/js/theia-sticky-sidebar.js') }}"></script>

<script src="{{ asset('assets/frontend/user/js/bootstrap-select.min.js') }}"></script>

<script src="{{ asset('assets/frontend/user/plugin/dropify-master/dist/js/dropify.min.js') }}"></script>
<script src="{{ asset('assets/frontend/user/js/jquery.scrollbar.js') }}"></script>
<script src="{{ asset('assets/frontend/user/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/frontend/user/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/frontend/user/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/frontend/user/js/chart.js') }}"></script>
<script src="{{ asset('assets/frontend/user/js/custom.js') }}"></script>



<script src="{{ asset('assets/frontend/common/js/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/frontend/common/js/toastr.min.js') }}"></script>
<script src="{{ asset('assets/frontend/common/js/alert.js') }}"></script>
<script src="{{ asset('assets/frontend/common/js/ajax.js') }}"></script>
<script src="{{ asset('assets/frontend/common/js/common.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>


@if (session('success'))
    <script>
        swal({
            title: "Success",
            text: "{{ session('success') }}",
            icon: "success",
            button: "Ok",
        });
    </script>
@endif
@if (session('error'))
    <script>
        swal({
            title: "Error",
            text: "{{ session('error') }}",
            icon: "error",
            button: "Ok",
        });
    </script>
@endif
@yield('scripts')
</body>

</html>