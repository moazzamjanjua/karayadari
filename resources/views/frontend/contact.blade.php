@include('frontend.layouts.style')

<body id="contact" class="blog">
    @include('frontend.layouts.header')
    <!-- main content -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper">

                <!-- breadcrumb -->
                <nav class="breadcrumb-bg">
                    <div class="container no-index">
                        <div class="breadcrumb">
                            <ol>
                                <li>
                                    <a href="#">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Contact</span>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </nav>
                <div id="main">
                    <div class="page-home">
                        <div class="container">
                            <h1 class="text-center title-page">Contact Us</h1>
                            <div class="row-inhert">
                                <div class="header-contact">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="item d-flex">
                                                <div class="item-left">
                                                    <div class="icon">
                                                        <i class="zmdi zmdi-email"></i>
                                                    </div>
                                                </div>
                                                <div class="item-right d-flex">
                                                    <div class="title">Email:</div>
                                                    <div class="contact-content">
                                                        <a
                                                            href="mailto:support@domain.com">karayadari@gmail.com</a>
                                                        <br>
                                                        <a href="mailto:contact@domain.com">moazzamjanjua92@gmail.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="item d-flex">
                                                <div class="item-left">
                                                    <div class="icon">
                                                        <i class="zmdi zmdi-home"></i>
                                                    </div>
                                                </div>
                                                <div class="item-right d-flex">
                                                    <div class="title">Address:</div>
                                                    <div class="contact-content">
                                                       Syed Tabish Alwari Building
                                                        <br>Islamia University of Bahawalpur Baghdad-ul-Jadeed Campus Bahawalpur, Punjab Pakistan
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="item d-flex justify-content-end  last">
                                                <div class="item-left">
                                                    <div class="icon">
                                                        <i class="zmdi zmdi-phone"></i>
                                                    </div>
                                                </div>
                                                <div class="item-right d-flex">
                                                    <div class="title">Phone Number</div>
                                                    <div class="contact-content">
                                                        +92 307-8379364
                                                        <br>+92 308-6315926
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-map">
                                    <div id="map">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.9221652327433!2d71.75531889054157!3d29.383197583133963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b91d6aa95f99d%3A0x377adf9235cece48!2sIUB%20Rd%2C%20Bahawalpur%20University%2C%20Bahawalpur%2C%20Punjab%2C%20Pakistan!5e1!3m2!1sen!2s!4v1716201544103!5m2!1sen!2s"
                                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="input-contact">
                                    <p class="text-intro text-center">“KARAYADARI is a platform that helps students and
                                        professionals easily find hostels or rooms in a new city. You can browse
                                        hostels, read reviews, and directly contact room owners to book. Use location
                                        services to find nearby hostels and apply filters to find the best options. With
                                        KARAYADARI, finding a hostel is easy, fast, and excellent!.”
                                    </p>

                                    <p class="icon text-center">
                                        <a href="#">
                                            <img src="/frontend/img/other/contact_mess.png" alt="img">
                                        </a>
                                    </p>

                                    <div class="d-flex justify-content-center">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="contact-form">

                                                <form id="contact-form" action="{{ route('contact.store') }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-fields">
                                                        <div class="form-group row">
                                                            <div class="col-md-6">
                                                                <input class="form-control" name="name"
                                                                    placeholder="Enter your name" required>
                                                            </div>
                                                            <div class="col-md-6 margin-bottom-mobie">
                                                                <input class="form-control" name="number" type="number"
                                                                    placeholder="Enter Your Number" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12 margin-bottom-mobie">
                                                                <input class="form-control" name="subject" type="text"
                                                                    placeholder="Subject" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <textarea class="form-control" name="message"
                                                                    placeholder="Message" rows="8" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button class="btn" type="submit">
                                                            <img class="img-fl"
                                                                src="/frontend/img/other/contact_email.png"
                                                                alt="img">Send message
                                                        </button>
                                                    </div>
                                                </form>


                                                <script>
                                                    // Handle form submission
                                                    const feedbackForm = document.getElementById('contact-form');

                                                    feedbackForm.addEventListener('submit', function (e) {
                                                        e.preventDefault(); // Prevent default form submission

                                                        const formData = new FormData(feedbackForm);

                                                        fetch(feedbackForm.action, {
                                                            method: 'POST',
                                                            headers: {
                                                                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                                                                'Accept': 'application/json',
                                                            },
                                                            body: formData,
                                                        })
                                                            .then(response => response.json())
                                                            .then(data => {
                                                                if (data.success) {
                                                                    // Show success popup
                                                                    Swal.fire({
                                                                        icon: 'success',
                                                                        title: 'Feedback Submitted!',
                                                                        text: 'Thank you! Our team will be in touch with you soon.',
                                                                        showConfirmButton: false,
                                                                        timer: 2000 // Auto-close after 2 seconds
                                                                    }).then(() => {
                                                                        feedbackForm.reset(); // Reset the form fields
                                                                    });
                                                                } else {
                                                                    // Show error popup
                                                                    Swal.fire({
                                                                        icon: 'error',
                                                                        title: 'Error',
                                                                        text: data.error || 'An error occurred. Please try again.',
                                                                        showConfirmButton: true,
                                                                    });
                                                                }
                                                            })
                                                            .catch(error => {
                                                                console.error('Error:', error);
                                                                Swal.fire({
                                                                    icon: 'error',
                                                                    title: 'Submission Failed',
                                                                    text: 'Please check your connection or try again later.',
                                                                    showConfirmButton: true,
                                                                });
                                                            });
                                                    });
                                                </script>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- footer -->
    @include('frontend.layouts.footer')