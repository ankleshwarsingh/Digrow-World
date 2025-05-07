<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply For Job | Digrow World</title>
    <link rel="shortcut icon" href="Images/Logo/circluar-icon.png" type="image/x-icon">
    <!-- Head Links -->
    <?php include 'Includes/head-links.php' ?>
    <!-- Link CSS -->
    <link rel="stylesheet" href="includes/style.css">
</head>

<body>
    <!-- Navbar -->
    <?php include 'Components/header.php' ?>
    <!-- Form Start -->
    <section class="job-application-form py-5" style="background-color: #f5f5f5;">
        <div class="container">
            <h2 class="section-title text-center mb-4">Apply Now</h2>
            <p class="section-subtitle text-center mb-5">Submit your details and we’ll get in touch soon.</p>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="submit-application.php" method="POST" enctype="multipart/form-data" class="bg-white p-5 rounded shadow-sm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name *</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number *</label>
                            <input type="tel" name="phone" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="position" class="form-label">Position Applying For *</label>
                            <select name="position" class="form-select" required>
                                <option value="" selected disabled>Select a role</option>
                                <option value="Frontend Developer">Frontend Developer</option>
                                <option value="PHP Developer">PHP Developer</option>
                                <option value="SEO Specialist">SEO Specialist</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Cover Letter</label>
                            <textarea name="message" class="form-control" rows="5" placeholder="Tell us about yourself..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="resume" class="form-label">Upload Resume (PDF, DOCX) *</label>
                            <input type="file" name="resume" class="form-control" accept=".pdf,.doc,.docx" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100" style="background-color:#ea5c1f; border: none;">Submit Application</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Ends -->



    <!-- Footer -->
    <?php include 'Components/footer.php' ?>
    <!-- Body Links -->
    <?php include 'Includes/body-links.php' ?>
    <!-- Javascript -->
    <script src="includes/script.js"></script>
</body>

</html>