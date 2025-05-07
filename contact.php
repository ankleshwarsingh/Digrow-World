<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Digrow World</title>
    <link rel="shortcut icon" href="Images/Logo/circluar-icon.png" type="image/x-icon">
    <!-- Head Links -->
    <?php include 'Includes/head-links.php' ?>
    <!-- Link CSS -->
    <link rel="stylesheet" href="includes/style.css">
</head>

<body>
    <!-- Navbar -->
    <?php include 'Components/header.php' ?>
    <!-- Contact Start -->
    <section class="contact-section py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Contact Form -->
                <div class="col-md-6">
                    <h2 class="mb-4">Get in Touch</h2>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control contact-input" id="name" placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control contact-input" id="email" placeholder="Your Email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control contact-input" id="message" rows="5" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit">Send Message</button>
                    </form>
                </div>

                <!-- Contact Info & Map -->
                <div class="col-md-6">
                    <h2 class="mb-4">Contact Info</h2>
                    <div class="card contact-card mb-3">
                        <div class="card-body d-flex align-items-center">
                            <i class="fas fa-phone-alt me-3 contact-icon"></i>
                            <span>+91 8506820025</span>
                        </div>
                    </div>
                    <div class="card contact-card mb-3">
                        <div class="card-body d-flex align-items-center">
                            <i class="fas fa-envelope me-3 contact-icon"></i>
                            <span>digrowworld@gmail.com</span>
                        </div>
                    </div>
                    <div class="card contact-card mb-4">
                        <div class="card-body d-flex align-items-center">
                            <i class="fas fa-map-marker-alt me-3 contact-icon"></i>
                            <span>Gorakhpur, Uttar Pradesh, India</span>
                        </div>
                    </div>

                    <!-- Google Map Embed -->
                    <div class="ratio ratio-16x9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.1517838770833!2d83.17485157521571!3d26.675627676789365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39913fd442d762bb%3A0x9c12329c1909c415!2sDigrow%20World!5e0!3m2!1sen!2sin!4v1746556093343!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Ends -->



    <!-- Footer -->
    <?php include 'Components/footer.php' ?>
    <!-- Body Links -->
    <?php include 'Includes/body-links.php' ?>
    <!-- Javascript -->
    <script src="includes/script.js"></script>
</body>

</html>