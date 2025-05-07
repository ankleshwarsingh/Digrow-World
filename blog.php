<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Digrow World</title>
    <link rel="shortcut icon" href="Images/Logo/circluar-icon.png" type="image/x-icon">
    <!-- Head Links -->
    <?php include 'Includes/head-links.php' ?>
    <!-- Link CSS -->
    <link rel="stylesheet" href="includes/style.css">
</head>

<body>
    <!-- Navbar -->
    <?php include 'Components/header.php' ?>

    <!-- Blog Start -->
    <!-- 1. Hero Section -->
    <section class="blog-hero text-center py-5">
        <div class="container">
            <h1 class="mb-2">Our Blog</h1>
            <p class="lead">Latest updates, ideas & insights from our team</p>
        </div>
    </section>

    <!-- 2. Blog Grid / Listing -->
    <section class="blog-listing py-5">
        <div class="container">
            <div class="row">
                <!-- Blog Card -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="blog-card">
                        <img src="images/Gallery/security.jpg" class="img-fluid" alt="Blog Thumbnail">
                        <div class="p-3">
                            <h5 class="blog-title">Top 10 Web Trends in 2025</h5>
                            <p class="text-muted mb-1">By John Doe | May 5, 2025 | Web Development</p>
                            <p>Explore the latest trends redefining user experience and development best practices.</p>
                            <a href="#" class="read-more">Read More →</a>
                        </div>
                    </div>
                </div>
                <!-- Add more blog cards here -->

                <!-- Sidebar (optional for large screens) -->
                <div class="col-lg-3 offset-lg-1 d-none d-lg-block">
                    <div class="sidebar">
                        <input type="text" class="form-control mb-3" placeholder="Search">

                        <h6>Categories</h6>
                        <ul class="list-unstyled mb-4">
                            <li><a href="#">E-commerce</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">Tech Trends</a></li>
                        </ul>

                        <h6>Popular Posts</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Boosting SEO with Structure</a></li>
                            <li><a href="#">Why Speed Matters</a></li>
                        </ul>

                        <h6>Tags</h6>
                        <div class="tags">
                            <span class="tag">#UIUX</span>
                            <span class="tag">#SEO</span>
                            <span class="tag">#Hosting</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. Pagination -->
            <nav class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- 5. Subscribe to Newsletter -->
    <section class="subscribe-banner text-center py-5">
        <div class="container">
            <h2 class="mb-3">Stay updated with our latest insights.</h2>
            <form class="subscribe-form d-flex justify-content-center">
                <input type="email" class="form-control w-50 me-2" placeholder="Enter your email">
                <button type="submit" class="btn btn-subscribe">Subscribe</button>
            </form>
        </div>
    </section>
    <!-- Blog Ends -->

    <!-- Footer -->
    <?php include 'Components/footer.php' ?>
    <!-- Body Links -->
    <?php include 'Includes/body-links.php' ?>
    <!-- Javascript -->
    <script src="includes/script.js"></script>
</body>

</html>