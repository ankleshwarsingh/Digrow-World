<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Digrow World</title>
    <link rel="shortcut icon" href="Images/Logo/circluar-icon.png" type="image/x-icon">
    <!-- Head Links -->
    <?php include 'Includes/head-links.php' ?>
    <!-- Link CSS -->
    <link rel="stylesheet" href="includes/style.css">
</head>

<body>
    <!-- Navbar -->
    <?php include 'Components/header.php' ?>
    <!-- Portfolio Section Start -->
     

    <!-- Filter Section -->
    <div class="container mt-3">
        <div class="filter-btns">
            <button onclick="filterCategory('all')" class="active">All</button>
            <button onclick="filterCategory('ecommerce')">E-commerce</button>
            <button onclick="filterCategory('corporate')">Corporate</button>
            <button onclick="filterCategory('real-estate')">Real Estate</button>
        </div>
    </div>

    <!-- Portfolio Grid -->
    <div class="container portfolio-container mb-5">
        <div class="row" id="portfolio-grid">
            <!-- Example Portfolio Cards -->
            <div class="col-md-4 portfolio-card ecommerce">
                <img src="Images/Projects/E-commerce.png" alt="Project Image">
                <div class="portfolio-overlay">
                    <div class="portfolio-info">
                        <h4>E-Commerce Website</h4>
                        <p>Tech Stack: HTML, CSS, JS</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#projectModal" class="btn btn-light">View Project</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 portfolio-card corporate">
                <img src="Images/Projects/Influencer Marketing.png" alt="Project Image">
                <div class="portfolio-overlay">
                    <div class="portfolio-info">
                        <h4>Influencer Marketing Website</h4>
                        <p>Tech Stack: Html, CSS, Js, Bootstrap,Php, SQL</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#projectModal" class="btn btn-light">View Project</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 portfolio-card real-estate">
                <img src="Images/Projects/Real Estate.png" alt="Project Image">
                <div class="portfolio-overlay">
                    <div class="portfolio-info">
                        <h4>Real Estate Website</h4>
                        <p>Tech Stack: Html, CSS, Js, Bootstrap,Php, SQL</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#projectModal" class="btn btn-light">View Project</a>
                    </div>
                </div>
            </div>

            <!-- Add More Cards as needed -->

        </div>

        <!-- Pagination or Load More Button -->
        <div class="load-more">
            <button class="btn btn-warning" id="load-more-btn">Load More</button>
        </div>
    </div>

    <!-- Modal for Project View -->
    <div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="projectModalLabel">Project Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Details about the project will go here. You can add images, descriptions, and more.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Section Ends -->



    <!-- Footer -->
    <?php include 'Components/footer.php' ?>
    <!-- Body Links -->
    <?php include 'Includes/body-links.php' ?>
    <!-- Javascript -->
    <script src="includes/script.js"></script>
</body>

</html>