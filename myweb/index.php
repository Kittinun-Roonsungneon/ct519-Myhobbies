<?php
// Assuming you have a database connection established
include('connection.php');

// Fetch data from the database
$query = "SELECT * FROM list"; // Modify this query according to your database structure
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>
<body>
    <?php 
        include('navbar.php');
    ?>
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">
        <!-- <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form> -->
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Latest Photos Hobbies
            </h2>
            <!-- <div class="col-6 d-flex justify-content-end align-items-center">
                <form action="" class="tm-text-primary">
                    Page <input type="text" value="1" size="1" class="tm-input-paging tm-text-primary"> of 200
                </form>
            </div> -->
        </div>
        <div class="row tm-mb-90 tm-gallery">
            <?php // Check if data was fetched successfully
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
        	<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="<?php echo $row['image'] ?>" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2><?php echo $row['name'] ?></h2>
                        <!-- <a href="photo-detail.html">View more</a> -->
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-center tm-text-gray">
                    <span class="tm-text-gray-dark"><?php echo $row['description'] ?></span>
                    <!-- <span>9,906 views</span> -->
                </div>
            </div>
            <?php 
                    }
                }
            ?>
        </div> <!-- row -->
        
    </div> <!-- container-fluid, tm-container-content -->

    <?php 
        include('footer.php');
    ?>
</body>
<script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</html>