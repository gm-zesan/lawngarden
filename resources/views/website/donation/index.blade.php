@extends('website.master')

@section('title')
    Donate us
@endsection

@push('styles')
    <style>
        hr {
            margin: 20px 0;
        }
    </style>
@endpush

@section('body')
    <div style="position: fixed; top: -20px; left: 50%; transform: translate(-50%, -50%); background-color: #fff; color: #7da500; padding: 5px 15px; border-radius: 5px; display: flex; align-items: center; gap: 10px; opacity: 0; z-index: -1;" id="success-message">
        <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 512 512">
            <path fill="#7da500"
                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
        </svg> Donation Successful
    </div>

    <!--Start Page Title-->
    <div class="page_title bg3">
        <div class="layer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h1>Donate Us</h1>
                        <div class="beadcrumb">
                            <a href="#">Home</a> <i class="fa fa-angle-right"></i> <span>donate us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Page Title-->
    
    <!--Start Contact Detail-->
    <div class="contact_detail seaction_margin">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="contact_address  animated slide">
                        <h3 class="heading_c">Account <span>Details</span></h3>
                        <address class="animated fades">
                            <p class="hed"> Islami Bank Account:</p>
                            
                            <p><i class="fa fa-bank"></i> Account Name: John Doe</p>
                            <p>Account Number: 1234567890123</p>
                            <p>Branch: Dhaka Main Branch</p>
                        
                            <hr>
                            <p class="hed"> Bkash Number:</p>
                            <p><i class="fa fa-mobile"></i> +880 1XXX-XXXXXX (Personal)</p>
                            <hr>
                            <p class="hed"> Rocket Number:</p>
                            <p><i class="fa fa-mobile"></i> +880 1XXX-XXXXXX (Personal)</p>
                            <hr>
                            <p class="hed"> Nagad Number:</p>
                            <p><i class="fa fa-mobile"></i> +880 1XXX-XXXXXX (Personal)</p>
                        
                        </address>
                        
                    </div>
                </div>
                <div class="col-sm-12 col-lg-8">
                    <div class="contact_form  animated fades">
                        <h3 class="heading_c">Donation <span>Form</span></h3>
                        <form id="donateForm" class="row">
                            @csrf

                            <div class="col-sm-12 col-md-12">
                                <select class="form-control" name="project_id">
                                    <option value="" selected disabled>Select Project</option>
                                    @foreach ($projects as $project)
                                        <option value="{{ $project->id }}">{{ $project->title }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-sm-12 col-md-12">
                                <input type="text" placeholder="Full Name" class="form-control" name="username"/>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <input type="tel" placeholder="Phone no." class="form-control" name="phone"/>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <select class="form-control" name="payment_method">
                                    <option value="" selected disabled>Select Payment Method</option>
                                    <option value="bkash">Bkash</option>
                                    <option value="rocket">Rocket</option>
                                    <option value="nagad">Nagad</option>
                                    <option value="bank">Bank</option>
                                </select>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <input type="text" placeholder="Transaction ID" class="form-control" name="transaction_id"/>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <input type="text" placeholder="Amount" class="form-control" name="amount"/>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <input type="submit" id="submit" class="button" value="Donate Now" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {
            $('#donateForm').submit(function(e) {
                e.preventDefault();
                $('.error_msg').html('');
                $.ajax({
                    type: 'POST',
                    url: '{{ route('donation.store') }}',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success) {
                            setTimeout(() => {
                                document.getElementById('success-message').style
                                    .zIndex = 1024;
                                document.getElementById('success-message').style
                                    .opacity = 1;
                                document.getElementById('success-message').style.top =
                                    '40px';
                                document.getElementById('success-message').style
                                    .transition = 'all 0.3s ease-in-out';
                                setTimeout(() => {
                                    document.getElementById('success-message')
                                        .style.zIndex = -1;
                                    document.getElementById('success-message')
                                        .style.opacity = 0;
                                    document.getElementById('success-message')
                                        .style.top = '-20px';
                                    document.getElementById('success-message')
                                        .style.transition =
                                        'all 0.3s ease-in-out';
                                }, 3000);
                            }, 100);
                            $('#donateForm')[0].reset();

                            $('html, body').animate({
                                scrollTop: 0
                            }, 100);
                        } else {
                            $.each(response.errors, function(key, value) {
                                var errorElement = $('#' + key + '_error');
                                if (errorElement.length) {
                                    errorElement.html(value);
                                    $('html, body').animate({
                                        scrollTop: errorElement.offset().top -
                                            100
                                    }, 100);
                                }
                            });
                        }
                    }
                });
            });
        });
    </script>
@endpush