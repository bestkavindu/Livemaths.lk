@extends('layouts.master')

@section('head')
    <title>Nuwan Rajapaksha - Home Page</title>
@endsection

@section('custom-css')
    <style>
        .service-item i {
            font-size: 70px;
            padding: 20px 0;
            color: #ff6f0f;
        }

    </style>
@endsection



@section('content')

<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <small><i class="fa fa-map-marker-alt me-2"></i>High Level Road, Nugegoda</small>
            <small class="ms-4"><i class="fa fa-envelope me-2"></i><a href="mailto:nuwanrajapaksha@gmail.com" style="color: unset">nuwanrajapaksha@gmail.com</a></small>
            <small class="ms-4"><i class="fab fa-whatsapp me-2"></i><a  href="//wa.me/+9477265341" style="color: unset">077 265 341</a></small>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>Follow us:</small>
            <a class="text-white-50 ms-3" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="text-white-50 ms-3" href=""><i class="fab fa-twitter"></i></a>
            <a class="text-white-50 ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
            <a class="text-white-50 ms-3" href=""><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="fw-bold text-primary m-0">Nuwan<span class="text-white">Rajapaksha</span></h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="causes.html" class="nav-item nav-link">Causes</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="service.html" class="dropdown-item">Service</a>
                        <a href="donate.html" class="dropdown-item">Donate</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <div class="d-none d-lg-flex ms-2">
                <a class="btn btn-outline-primary py-2 px-3" href="//wa.me/+9477265341" target="_blank">
                    Join Now
                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                </a>
            </div>
        </div>
    </nav>
</div>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="/assets/img/1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                {{-- <div class="col-lg-7 pt-5">
                                <h1 class="display-4 text-white mb-3 animated slideInDown">Let's Change The World With Humanity</h1>
                                <p class="fs-5 text-white-50 mb-5 animated slideInDown">Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet</p>
                                <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                    Learn More
                                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="carousel-item">
                <img class="w-100" src="/assets/img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 pt-5">
                                <h1 class="display-4 text-white mb-3 animated slideInDown">Let's Save More Lifes With Our Helping Hand</h1>
                                <p class="fs-5 text-white-50 mb-5 animated slideInDown">Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet</p>
                                <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                    Learn More
                                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="/assets/img/4.jpg" alt=""
                            style="object-fit: cover;">

                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">About Us</div>
                        <h1 class="display-6 mb-5">Advanced Level Mathematics</h1>

                        <p class="mb-5">Unlock your potential in Advanced Level Mathematics with our expert tutors in Sri
                            Lanka. Our dedicated tutors specialize in guiding students through the intricate concepts of
                            calculus, algebra, geometry, and beyond. With personalized attention and tailored lesson plans,
                            we ensure that every student receives the support they need to excel. </br>Whether you're aiming for
                            top grades or striving to master challenging topics, our tutors are committed to your success.
                            Join us and embark on a journey of mathematical discovery, building confidence and achieving
                            your academic goals in Sri Lanka's Advanced Level Mathematics curriculum.</p>
                        <a class="btn btn-primary py-2 px-3 me-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                        <a class="btn btn-outline-primary py-2 px-3" href="">
                            Contact Us
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">What We Do</div>
                <h1 class="display-6 mb-5">Learn More What We Do And Get Involved</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <i class="fas fa-book"></i>
                        <h4 class="mb-3">නිවැරැදි විෂය කරුණු</h4>
                        <p class="mb-4">විෂය නිර්දේශය ආවරණය වන නිවැරදි විෂය කරුණු සම්පිණ්ඩණය කර සිසුන්ට ඉගැන්වීම</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <i class="fas fa-lightbulb"></i>
                        <h4 class="mb-3">විෂයානුබද්ධ ක්‍රියාකාරකම්</h4>
                        <p class="mb-4">විෂය කරුණු මතක තබා ගැනීම පහසු කිරීම උදෙසා සුවිශේෂ ක්‍රමවේද සතිපතා සිදුකිරීම</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <i class="fas fa-paste"></i>
                        <h4 class="mb-3">විශේෂ ප්‍රශ්න පත්‍ර</h4>
                        <p class="mb-4">සුවිශේෂ ප්‍රශ්න පත්‍ර මඟින් සිසුන් දැනුමින් සහ අත්දැකීම් මඟින් උසස් පෙළ විභාගයට සූදානම් කරවීම</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <i class="fas fa-clock"></i>
                        <h4 class="mb-3">නිවැරදි කාල රාමුව</h4>
                        <p class="mb-4">විෂය කරුණු පන්තිය තුළ දීම අවධාරණය කිරීමෙන් නිවැරැදි කාල රාමුවක් තුළ සිසුන් මෙහෙයවීම</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <i class="fab fa-angular"></i>
                        <h4 class="mb-3">විශිෂ්ටතම ප්‍රතිඵල</h4>
                        <p class="mb-4">අවසන් ප්‍රතිඵලක් ලෙස සිසුන්ට විශිෂ්ටතම ප්‍රතිඵලයක් ලබාගැනීම සඳහා මඟපෙන්වීම</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Donate Start -->
    <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="/assets/img/1.jpg">
        <div class="container py-5">
            <div class="row g-5 align-items-center">

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100" style="padding: 10rem">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End -->


    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Theory Class</div>
                <h1 class="display-6 mb-5">සිද්ධාන්ත පංති විස්තර About The Theory Class </h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">භෞතිකව පංතියට පැමිනීමට අපහසු දිනවලට Zoom live පංතියට සම්බන්ධ විය හැක</h4>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">සෑම පංති දිනයකටම අදාල video recording එකක් ඔනෑම වාර ගනනක් ඕනෑම කාලයක් නැරඹීමට හැකිය.</h4>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">මාසය අවසානයේ මාසයට අදලා video pack එකක් සෑම සිසුවෙකුට ලබා දේ.</h4>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">විශය නිර්දේශය Study pack 6 කින් ද කොටස් 44කින් හා නිබන්ධන 60කින් ආවරනය වේ.</h4>
                    </div>
                </div>




            </div>
        </div>
    </div>


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Testimonial</div>
                <h1 class="display-6 mb-5">Remarks Regarding The Class</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-1.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-2.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-3.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

        <!-- Contact -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Contacts Us</div>
                    <h1 class="display-6 mb-5">Contact Nuwan Rajapaksha</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a  href="//wa.me/+9477265341"> <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                            <i class="fab fa-whatsapp"></i>
                            <h4 class="mb-3">Technical Support</h4>
                            <p class="mb-4">077 265 341</p>
                        </div></a>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                            <i class="fab fa-telegram"></i>
                            <h4 class="mb-3">Technical Support</h4>
                            <p class="mb-4">077 265 341</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="tel:9477265341"><div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                            <i class="fas fa-phone-square-alt"></i>
                            <h4 class="mb-3">Hotline</h4>
                            <p class="mb-4">077 265 341</p></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Contact -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        {{-- <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">Chari<span class="text-white">Team</span></h1>
                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection
