@extends('website.master')

@section('title')
    Contact us
@endsection

@section('body')
    <div style="position: fixed; top: -20px; left: 50%; transform: translate(-50%, -50%); background-image: linear-gradient(to right, #A1CDA0, #4B8B3B); color: #fff; padding: 5px 15px; border-radius: 5px; display: flex; align-items: center; gap: 10px; opacity: 0; z-index: -1;"
        id="success-message">
        <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 512 512">
            <path fill="#ffffff"
                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
        </svg> Message sent successfully
    </div>

    <!--Start Page Title-->
    <div class="page_title bg3">
        <div class="layer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h1>Contact Us</h1>
                        <div class="beadcrumb">
                            <a href="#">Home</a> <i class="fa fa-angle-right"></i> <span>get in touch</span>
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
                        <h3 class="heading_c">Our <span>Details</span></h3>
                        <p>Ipsum dolor sit amet consectetur adipisicing elits eiusmod tempor incididunt selaboret dolore
                            mag aliquat enim ad minim veniam.
                        </p>
                        <address class=" animated fades">
                            <p class="hed">USA Office:</p>
                            <p><i class="fa fa-map-marker"></i> Brooks Street. 71, Washington DC</p>
                            <p><i class="fa fa-phone"></i>Toll Free: +880 192 132 4091</p>
                            <p><i class="fa fa-envelope"></i>gmzesan7767@gmail.com</p>
                        </address>
                        <address class=" animated fades">
                            <p class="hed">Spain Office:</p>
                            <p> <i class="fa fa-map-marker"></i> Carrer de París, 109, 08029 Madrid</p>
                            <p> <i class="fa fa-phone"></i>Toll Free: +(34) 934 00 12 09</p>
                            <p> <i class="fa fa-envelope"></i>gmzesan7767@gmail.com</p>
                        </address>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-8">
                    <div class="contact_form  animated fades">
                        <h3 class="heading_c">Send <span>Message</span></h3>
                        <p>Ipsum dolor sit amet consectetur adipisicing elits eiusmod tempor incididunt selaboret dolore
                            magna aliquat enim ad minim veniam lorem ipsum dolor sit amet consectetur adipisicing.
                        </p>
                        <p class="success" id="success" style="display:none;"></p>
                        <p class="error" id="error" style="display:none;"></p>
                        <form action="http://www.shmai.com/preview/lawnexpress-html/process.php" method="post"
                            id="contact_form" class="row">
                            <div class="col-sm-12 col-md-6">
                                <input type="text" placeholder="First Name" class="form-control" name="contact_name"
                                    id="contact_name" />
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <input type="text" placeholder="Last Name" class="form-control" />
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <input type="email" placeholder="Email address" class="form-control" name="contact_email"
                                    id="contact_email" />
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <input type="text" placeholder="Phone no." class="form-control" name="contact_phone"
                                    id="contact_sphone" />
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <select class="form-control required valid">
                                    <option value="">Service Inquiry</option>
                                    <option value="">Service Inquiry</option>
                                    <option value="">Service Inquiry</option>
                                </select>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <textarea placeholder="Write your message..." class="form-control" name="message" id="message"></textarea>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <input type="submit" id="submit" class="button" value="get estimate" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Contact Detail-->
    <!--Start Contact Map -->
    <div class="contact_map animated fades">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.94722688387!2d2.277516834109516!3d48.858837739118826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x791dd61b089f98b!2sLuxembourg+Gardens!5e0!3m2!1sen!2s!4v1492827801958"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--End Contact Map-->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#contactForm').submit(function(e) {
                e.preventDefault();
                $('.error_msg').html('');
                $.ajax({
                    type: 'POST',
                    url: '{{ route('contact.message.store') }}',
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
                            $('#contactForm')[0].reset();

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
