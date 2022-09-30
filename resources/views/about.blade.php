@extends('layouts.layout')
@section('content')

    <main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>About us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">About</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About Area Start -->
        <div class="about-low-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>About Our Company</span>
                                <h2>Safe Logistic & Transport  Solutions That Saves our Valuable Time!</h2>
                            </div>
                            <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replication of the designers is intended.</p>
                            <p>Brook presents your services with flexible, convefnient and chient anipurpose layouts. You can select your favorite layouts.</p>
                            <a href="about.html" class="btn">More About Us</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-font-img">
                                <img src="assets/img/gallery/about2.png" alt="">
                            </div>
                            <div class="about-back-img d-none d-lg-block">
                                <img src="assets/img/gallery/about1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->
        <!--? contact-form start -->
        <section class="contact-form-area section-bg  pt-115 pb-120 fix" data-background="assets/img/gallery/section_bg02.jpg">
            <div class="container">
                <div class="row justify-content-end">
                    <!-- Contact wrapper -->
                    <div class="col-xl-8 col-lg-9">
                        <div class="contact-form-wrapper">
                            <!-- From tittle -->
                            <div class="row">
                               <div class="col-lg-12">
                                    <!-- Section Tittle -->
                                    <div class="section-tittle mb-50">
                                        <span>Get a Qote For Free</span>
                                        <h2>Request a Free Quote</h2>
                                        <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for.</p>
                                    </div>
                               </div>
                            </div>
                            <!-- form -->
                            <form action="#" class="contact-form">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-form">
                                            <input type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-form">
                                            <input type="text" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-form">
                                            <input type="text" placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="select-items">
                                            <select name="select" id="select1">
                                                <option value="">Freight Type</option>
                                                <option value="">Catagories One</option>
                                                <option value="">Catagories Two</option>
                                                <option value="">Catagories Three</option>
                                                <option value="">Catagories Four</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-form">
                                            <input type="text" placeholder="City of Departure">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="input-form">
                                            <input type="text" placeholder="Incoterms">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="input-form">
                                            <input type="text" placeholder="Weight">
                                        </div>
                                    </div>
                                    <!-- Height Width length -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="input-form">
                                            <input type="text" placeholder="Height">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="input-form">
                                            <input type="text" placeholder="Width">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="input-form">
                                            <input type="text" placeholder="length">
                                        </div>
                                    </div>
                                    <!-- Radio Button -->
                                    <div class="col-lg-12">
                                        <div class="radio-wrapper mb-30 mt-15">
                                            <label>Extra services:</label>
                                            <div class="select-radio">
                                                <div class="radio">
                                                    <input id="radio-1" name="radio" type="radio" checked="">
                                                    <label for="radio-1" class="radio-label">Freight</label>
                                                </div>
                                                <div class="radio">
                                                    <input id="radio-2" name="radio" type="radio">
                                                    <label for="radio-2" class="radio-label">Express Delivery</label>
                                                </div>
                                                <div class="radio">
                                                    <input id="radio-4" name="radio" type="radio">
                                                    <label for="radio-4" class="radio-label">Insurance</label>
                                                </div>
                                                <div class="radio">
                                                    <input id="radio-5" name="radio" type="radio">
                                                    <label for="radio-5" class="radio-label">Packaging</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="col-lg-12">
                                        <button name="submit" class="submit-btn">Request a Quote</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-form end -->
        <!--Team Ara Start -->
        <div class="team-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Our Team Mambers</span>
                            <h2>What We Can Do For You</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-team mb-30 text-center">
                            <div class="team-img">
                                <img src="assets/img/gallery/team1.png" alt="">
                                <div class="team-caption">
                                    <h3><a href="#">Mancherwan Kolin</a></h3>
                                    <p>Health agent</p>
                                    <!-- Blog Social -->
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-team mb-30 text-center">
                            <div class="team-img">
                                <img src="assets/img/gallery/team2.png" alt="">
                                <div class="team-caption">
                                    <h3><a href="#">Mancherwan Kolin</a></h3>
                                    <p>Health agent</p>
                                    <!-- Blog Social -->
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-team mb-30 text-center">
                            <div class="team-img">
                                <img src="assets/img/gallery/team3.png" alt="">
                                <div class="team-caption">
                                    <h3><a href="#">Mancherwan Kolin</a></h3>
                                    <p>Health agent</p>
                                    <!-- Blog Social -->
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Ara End -->
        <!--? Testimonial Start -->
        <div class="testimonial-area testimonial-padding section-bg" data-background="assets/img/gallery/section_bg04.jpg">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-7 col-lg-7">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 mb-25">
                            <span>Clients Testimonials</span>
                            <h2>What Our Clients Say!</h2>
                        </div>
                        <div class="h1-testimonial-active mb-70">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial ">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <p>Srem ipsum adolor dfsit amet, consectetur adipiscing elit, sed dox beiusmod tempor incci didunt ut labore et dolore magna aliqua. Quis cipsucm suspendisse ultrices gravida. Risus commodo vivercra maecenas accumsan lac.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="assets/img/gallery/Homepage_testi.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Jhaon smith</span>
                                            <p>Creative designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial ">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <p>Srem ipsum adolor dfsit amet, consectetur adipiscing elit, sed dox beiusmod tempor incci didunt ut labore et dolore magna aliqua. Quis cipsucm suspendisse ultrices gravida. Risus commodo vivercra maecenas accumsan lac.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="assets/img/gallery/Homepage_testi.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Jhaon smith</span>
                                            <p>Creative designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form Start -->
                    <div class="col-xl-4 col-lg-5 col-md-8">
                        <div class="testimonial-form text-center">
                            <h3>Always listening, always understanding.</h3>
                            <input type="text" placeholder="Incoterms">
                            <button name="submit" class="submit-btn">Request a Quote</button>
                        </div>
                    </div>
                    <!-- Form End -->
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
         <!--? Blog Area Start -->
         <div class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-70">
                            <span>Our Recent news</span>
                            <h2>Tourist Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/blog01.png" alt="">
                                </div>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-date text-center">
                                    <span>27</span>
                                    <p>SEP</p>
                                </div>
                                <div class="blog-cap">
                                    <ul>
                                        <li><a href="#"><i class="ti-user"></i> Jessica Temphers</a></li>
                                        <li><a href="#"><i class="ti-comment-alt"></i> 12</a></li>
                                    </ul>
                                    <h3><a href="blog_details.html">Here’s what you should know before.</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/blog1.png" alt="">
                                </div>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-date text-center">
                                    <span>27</span>
                                    <p>SEP</p>
                                </div>
                                <div class="blog-cap">
                                    <ul>
                                        <li><a href="#"><i class="ti-user"></i> Jessica Temphers</a></li>
                                        <li><a href="#"><i class="ti-comment-alt"></i> 12</a></li>
                                    </ul>
                                     <h3><a href="blog_details.html">Here’s what you should know before.</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/blog02.png" alt="">
                                </div>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-date text-center">
                                    <span>27</span>
                                    <p>SEP</p>
                                </div>
                                <div class="blog-cap">
                                    <ul>
                                        <li><a href="#"><i class="ti-user"></i> Jessica Temphers</a></li>
                                        <li><a href="#"><i class="ti-comment-alt"></i> 12</a></li>
                                    </ul>
                                     <h3><a href="blog_details.html">Here’s what you should know before.</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
    </main>
@endsection
