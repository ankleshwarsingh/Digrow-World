<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Digrow World</title>
    <link rel="shortcut icon" href="Images/Logo/circluar-icon.png" type="image/x-icon">
    <!-- Head Links -->
    <?php include 'Includes/head-links.php' ?>
    <!-- Link CSS -->
    <link rel="stylesheet" href="includes/style.css">
</head>

<body>
    <!-- Navbar -->
    <?php include 'Components/header.php' ?>
    <!-- Hero Section Start -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center w-100">
                <div class="col-md-6">
                    <h1>Grow Your Business Digitally</h1>
                    <p>High-performance websites that deliver results.</p>
                    <button class="btn-quote">Get a Quote</button>
                </div>
                <div class="col-md-6 text-center">
                    <img src="Images/Gallery/website-developer.png" alt="Illustration" class="hero-img">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section Ends -->

    <!-- About Us Section Start -->
    <section class="about-preview">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Column -->
                <div class="col-md-6">
                    <img src="Images/Gallery/office-team.png" alt="Our Team" class="img-fluid about-img">
                </div>
                <!-- Content Column -->
                <div class="col-md-6">
                    <small class="section-title">Who We Are</small>
                    <h2 class="about-heading">We build digital solutions that grow your business.</h2>
                    <p class="about-text">
                        Our team blends creativity with technical expertise to deliver websites that engage, convert, and perform.
                        From strategy to execution, we’re committed to results.
                    </p>
                    <a href="about.php" class="btn-learn">Learn More →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section Ends -->


    <!-- Services Section Start -->
    <section class="services-section py-5">
        <div class="container text-center">
            <h2 class="mb-4">Our Services</h2>
            <div class="row g-4">
                <!-- Service Card 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <i class="fas fa-paint-brush service-icon"></i>
                        <h5>Website Design</h5>
                        <p>Creative, responsive, and modern designs tailored for your brand.</p>
                    </div>
                </div>
                <!-- Service Card 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <i class="fas fa-shopping-cart service-icon"></i>
                        <h5>E-commerce</h5>
                        <p>Robust online stores built to drive conversions and ease management.</p>
                    </div>
                </div>
                <!-- Service Card 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <i class="fas fa-search service-icon"></i>
                        <h5>SEO</h5>
                        <p>Improve visibility with our data-driven and modern SEO strategies.</p>
                    </div>
                </div>
                <!-- Service Card 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <i class="fas fa-server service-icon"></i>
                        <h5>Hosting</h5>
                        <p>Fast and secure hosting solutions tailored for your business.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section Ends -->

    <!-- Why Choose Us Section Start -->
    <section class="why-choose-us py-5">
        <div class="container text-center">
            <h2 class="text-white mb-5">Why Choose Us</h2>
            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-md-6">
                    <div class="feature-box">
                        <i class="fas fa-paint-brush feature-icon"></i>
                        <h5>Custom Design</h5>
                        <p>Unique, tailored websites that represent your brand identity.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-md-6">
                    <div class="feature-box">
                        <i class="fas fa-search feature-icon"></i>
                        <h5>SEO-Optimized</h5>
                        <p>Boost visibility with clean code and Google-friendly structure.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-md-6">
                    <div class="feature-box">
                        <i class="fas fa-headset feature-icon"></i>
                        <h5>24/7 Support</h5>
                        <p>Round-the-clock assistance to keep your business running.</p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-md-6">
                    <div class="feature-box">
                        <i class="fas fa-chart-line feature-icon"></i>
                        <h5>Scalable Performance</h5>
                        <p>Solutions that grow with your business and traffic needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Us Section Ends -->

    <!-- Portfolio Section Start -->
    <!-- Portfolio Highlights Section -->
    <section class="portfolio-section py-5">
        <div class="container text-center">
            <h2 class="mb-4">Our Work</h2>
            <div class="row g-4 portfolio-grid">
                <!-- Portfolio Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-card">
                        <img src="Images/Projects/Real Estate.png" alt="Project 1" class="img-fluid">
                        <div class="portfolio-overlay">
                            <h5>Real Estate Website</h5>
                        </div>
                    </div>
                </div><!-- Portfolio Card 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-card">
                        <img src="Images/Projects/Influencer Marketing.png" alt="Project 3" class="img-fluid">
                        <div class="portfolio-overlay">
                            <h5>Influencer Marketing Website</h5>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Card 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-card">
                        <img src="Images/Projects/E-commerce.png" alt="Project 2" class="img-fluid">
                        <div class="portfolio-overlay">
                            <h5>E-commerce Platform</h5>
                        </div>
                    </div>
                </div>

            </div>
            <a href="portfolio.php" class="btn-portfolio mt-4">View Full Portfolio →</a>
        </div>
    </section>

    <!-- Portfolio Section Ends-->

    <!-- Pricing Section Start -->

    <section class="pricing-section py-5" style="background-color: #f5f5f5;">
        <div class="container">
            <h2 class="text-center text-uppercase mb-5" style="color:#212431;">Our Pricing Plans</h2>
            <div class="row g-4">

                <!-- Basic Plan Card -->
                <div class="col-md-4">
                    <div class="pricing-card p-4 shadow-lg rounded bg-white">
                        <h3 class="pricing-title text-center text-uppercase" style="color: #212431;">Starter Plan</h3>
                        <div class="price text-center mb-3">
                            <span class="h2">₹2999</span>
                            <span class="text-muted">/ month</span>
                        </div>
                        <ul class="list-unstyled">
                            <li>✔️ 1 Website</li>
                            <li>✔️ 5 Pages</li>
                            <li>✔️ Basic SEO</li>
                            <li>✔️ 24/7 Support</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Get Started</a>
                    </div>
                </div>

                <!-- Standard Plan Card -->
                <div class="col-md-4">
                    <div class="pricing-card p-4 shadow-lg rounded bg-white">
                        <h3 class="pricing-title text-center text-uppercase" style="color: #212431;">Professional Plan</h3>
                        <div class="price text-center mb-3">
                            <span class="h2">₹4999</span>
                            <span class="text-muted">/ month</span>
                        </div>
                        <ul class="list-unstyled">
                            <li>✔️ 1 Websites</li>
                            <li>✔️ 10 Pages</li>
                            <li>✔️ SEO Optimization</li>
                            <li>✔️ 24/7 Support</li>
                            <li>✔️ Social Media Integration</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Get Started</a>
                    </div>
                </div>

                <!-- Premium Plan Card -->
                <div class="col-md-4">
                    <div class="pricing-card p-4 shadow-lg rounded bg-white">
                        <h3 class="pricing-title text-center text-uppercase" style="color: #212431;">Ultimate Plan</h3>
                        <div class="price text-center mb-3">
                            <span class="h2">₹8999</span>
                            <span class="text-muted">/ month</span>
                        </div>
                        <ul class="list-unstyled">
                            <li>✔️ 1 Websites</li>
                            <li>✔️ 25 Pages</li>
                            <li>✔️ Advanced SEO & Marketing</li>
                            <li>✔️ 24/7 Premium Support</li>
                            <li>✔️ Social Media + Google Ads</li>
                            <li>✔️ Monthly Reports</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Get Started</a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Pricing Section Ends -->






    <!-- Testimonial Section Start -->

    <section class="testimonials-section py-5">
        <div class="container text-center">
            <h2 class="mb-4">What Our Clients Say</h2>
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <!-- Testimonial 1 -->
                    <div class="swiper-slide testimonial-card">
                        <img src="Images/Clients/Adarsh Tripathi.heic" class="client-img" alt="Client 1">
                        <p>"The team delivered a fantastic website that improved our conversions."</p>
                        <div class="stars">★★★★★</div>
                        <h6>Adarsh Mani Tripathi</h6>
                        <small>CEO, AMT Pvt. Ltd.</small>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="swiper-slide testimonial-card">
                        <img src="Images/Clients/dummy man.jpg" class="client-img" alt="Client 2">
                        <p>"Fast, reliable, and very professional. Highly recommended!"</p>
                        <div class="stars">★★★★☆</div>
                        <h6>Harishankar Singh</h6>
                        <small>Founder, Singh Event Planner</small>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="swiper-slide testimonial-card">
                        <img src="Images/Clients/harsh.jpg" class="client-img" alt="Client 3">
                        <p>"Excellent support and SEO improvements that really made a difference."</p>
                        <div class="stars">★★★★★</div>
                        <h6>Harsh Srivastava</h6>
                        <small>Founder, Srivastava Developers</small>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination mt-3"></div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section Ends -->



    <!-- Blog Section Start -->
    <!-- <section class="blog-section py-5">
        <div class="container text-center">
            <h2 class="mb-4">Latest Insights</h2>
            <div class="row g-4"> -->
    <!-- Blog Post 1 -->
    <!-- <div class="col-md-4">
                    <div class="blog-card">
                        <img src="Images/Blog/Top 5 web trend blog.png" alt="Blog 1" class="img-fluid blog-thumb">
                        <div class="blog-content">
                            <h5 class="mt-3">Top 5 Web Trends in 2025</h5>
                            <small>5 min read</small>
                        </div>
                    </div>
                </div> -->
    <!-- Blog Post 2 -->
    <!-- <div class="col-md-4">
                    <div class="blog-card">
                        <img src="Images/Blog/SEO.png" alt="Blog 2" class="img-fluid blog-thumb">
                        <div class="blog-content">
                            <h5 class="mt-3">How SEO Drives Growth</h5>
                            <small>4 min read</small>
                        </div>
                    </div>
                </div> -->
    <!-- Blog Post 3 -->
    <!-- <div class="col-md-4">
                    <div class="blog-card">
                        <img src="Images/Blog/design convert.png" alt="Blog 3" class="img-fluid blog-thumb">
                        <div class="blog-content">
                            <h5 class="mt-3">Design That Converts</h5>
                            <small>3 min read</small>
                        </div>
                    </div>
                </div> -->
    <!-- </div>
            <a href="blog.php" class="btn-blog mt-4">Explore Blog</a>
        </div>
    </section> -->
    <!-- Blog Section Ends -->


    <!-- Call To Action Start -->
    <section class="cta-banner text-center py-5">
        <div class="container">
            <h2 class="mb-3">Ready to start your project?</h2>
            <a href="contact.php" class="btn-cta">Let’s Talk</a>
        </div>
    </section>
    <!-- Call To Action Ends -->


    <!-- Footer -->
    <?php include 'Components/footer.php' ?>
    <!-- Body Links -->
    <?php include 'Includes/body-links.php' ?>
    <!-- Javascript -->
    <script src="includes/script.js"></script>
    <!-- Swiper Js Start -->
    <script>
        const swiper = new Swiper('.testimonial-slider', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            autoplay: {
                delay: 4000
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                992: {
                    slidesPerView: 3
                }
            }
        });
        // Swiper Js Ends
    </script>
</body>

</html>