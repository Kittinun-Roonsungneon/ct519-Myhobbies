<?php
// Initialize variables to hold form data
$name = $description = "";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']))  {
    $name = $_POST['name'];
    $description = $_POST['description'];

    // Image Upload Handling
    $uploadDir = 'uploads/images';
    $imageName = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];
    $imagePath = $uploadDir . $imageName;

    if (move_uploaded_file($imageTmp, $imagePath)) {
        // Assuming you have a database connection established
        include('connection.php');

        // Prepare and execute the INSERT query
        $query = "INSERT INTO list (name, description, image) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $name, $description, $imagePath);

        if ($stmt->execute()) {
            // echo "Data inserted successfully.";
        } else {
            echo "Error inserting data: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Image upload failed.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My-Hobbies</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>

<body>
    <?php
    include('navbar.php');
    ?>
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">

    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 text-center tm-text-primary">
                เพิ่มงานอดิเรก
            </h2>
        </div>
        
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="add_hobbies.php" method="post" enctype="multipart/form-data">
                            <div class="form-group text-center">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="ชื่อสินค้า" name="name">
                                <label for="description" class="form-label">Description:</label>
                                <input type="text" class="form-control" id="description" placeholder="รายละเอียดสินค้า" name="description">
                                <label for="myfile">Select a file:</label>
                                <input type="file" class="form-control" id="image" name="image" accept=".jpg, .jpeg, .png">
                            </div>

                            <div class="text-center"> <!-- Center the button within this div -->
                                <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div> <!-- container-fluid, tm-container-content -->
    
    <?php
        include('footer.php');
    ?>
    
</body>
<script src="js/plugins.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(window).on("load", function() {
        $('body').addClass('loaded');
    });
    
</script>

</html>